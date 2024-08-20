<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
        if ($this->session->auth) return redirect(admin('dashboard'));
	}

    protected $table = 'logins';

    protected $login = [
        [
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|numeric|exact_length[10]',
            'errors' => [
                'required' => "%s is required",
                'numeric' => "%s is invalid",
                'exact_length' => "%s is invalid",
            ],
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required',
            'errors' => [
                'required' => "%s is required"
            ],
        ]
    ];

	public function index()
	{
        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules($this->login);

            if ($this->form_validation->run() == FALSE) {
                $response = ['error' => true, 'message' => $this->form_validation->error_array(), 'validate' => true];
            } else {
                $response = $this->main->login($this->table);
            }

            die(json_encode($response));
        } else{
            if($this->input->get('dev')){
                $this->load->helper('cookie');
                if($this->input->cookie('dev') == null){
                    $cookie = [
                        'name'   => 'dev',
                        'value'  => $this->input->get('dev'),
                        'expire' => '0',
                        'secure' => TRUE
                    ];

                    $this->input->set_cookie($cookie);
                }
            }

            $data['title'] = 'Sign In';
            $data['name'] = 'sign_in';
            $data['validate'] = true;
            
            return $this->template->load('auth/template', 'auth/login', $data);
        }
	}

    public function forgot_password()
    {
        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|exact_length[10]',
                        ['required' => "%s is required", 'numeric' => "%s is invalid", 'exact_length' => "%s is invalid",
            ]);

            if ($this->form_validation->run() == FALSE)
            {
                $response = ['error' => true, 'message' => $this->form_validation->error_array(), 'validate' => true];
            }
            else
            {
                $post = [
                    'mobile'   	 => $this->input->post('mobile'),
                    'domain_id'  => $this->domain['id'],
                ];

                if ($user = $this->main->get($this->table, 'id, email', $post)) {
                    $hp  = encr_password(e_id($user['id']));
                    
                    $update = [
                        'pass_salt'  => $hp['salt'],
                        'pass_token' => $hp['hashedPassword'],
                        'update_at'  => date('Y-m-d H:i:s', strtotime('+5 minutes')),
                    ];
    
                    if ($this->main->update(['id' => $user['id']], $update, $this->table) === true) {
                        $this->load->library('appmails');
                        $token = my_crypt(e_id($user['id']));

                        $update['link'] = base_url(admin("change-password/{$token}"));
    
                        $this->appmails->password_reset($update, $user);

                        $response = ['error' => true, 'message' => 'Email send to '.$user['email'].'. Check mail.'];
                    }else{
                        $response = ['error' => true, 'message' => 'Some error occurs while sending email. Try again.'];
                    }
                }else{
                    $response = ['error' => true, 'message' => 'Mobile not registered or account blocked.'];
                }
            }

            die(json_encode($response));
        } else{
            $data['title'] = 'forgot password';
            $data['name'] = 'forgot_password';
            $data['validate'] = true;

            return $this->template->load('auth/template', 'auth/forgot_password', $data);
        }
    }

    public function change_password()
    {
        $token = d_id(my_crypt($this->uri->segment(3), 'd'));
        $post = [
            'id'   	        => $token,
            'update_at >= ' => date('Y-m-d H:i:s'),
            'domain_id'     => $this->domain['id'],
            'is_blocked'    => 0
        ];
        
        $user = $this->main->get($this->table, 'id, pass_token, pass_salt', $post);

        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[50]',
                ['required' => "%s is required", 'max_length' => "Max 50 chars allowed"
            ]);

            if ($this->form_validation->run() == FALSE) {
                $response = ['error' => true, 'message' => $this->form_validation->error_array(), 'validate' => true];
            } else {
                if(!password_verify(e_id($token) . $user['pass_salt'], $user['pass_token'])) {
                    responseMsg(0, "", "Token has been expired.", admin('login'));
                }

                $hp  = encr_password($this->input->post('password'));

                $update = [
                    'password_salt' => $hp['salt'],
                    'password'      => $hp['hashedPassword'],
                    'pass_salt'     => '',
                    'pass_token'    => '',
                ];

                if ($this->main->update(['id' => $token], $update, $this->table) === true) {
                    $response = ['error' => true, 'message' => 'Password changed. Login with new password.', 'redirect' => 'login'];
                }else{
                    $response = ['error' => true, 'message' => 'Password not changed. Try again.'];
                }
            }

            die(json_encode($response));
        } else{
            if(password_verify(e_id($token) . $user['pass_salt'], $user['pass_token'])) {
                $data['title'] = 'change password';
                $data['name'] = 'change_password';
                $data['validate'] = true;
                
                return $this->template->load('auth/template', 'auth/change_password', $data);
            }else {
                flashMsg(0, "", "Token has been expired.", admin('login'));
            }
        }
    }
}