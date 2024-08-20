<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller  {

	private $table = 'logins';
	protected $redirect = 'dashboard';
	
	public function index()
	{
		$data['title'] = 'dashboard';
        $data['name'] = 'dashboard';
        $data['url'] = $this->redirect;

        $this->load->model('Seo_model', 'seo');
        $this->load->model('Inquiry_model', 'inquiries');
        $this->load->model('Subscription_model', 'subscriptions');

        $data['seo'] = $this->seo->count();
        $data['inquiries'] = $this->inquiries->count();
        $data['subscriptions'] = $this->subscriptions->count();

        return $this->template->load('template', 'home', $data);
	}

	public function profile()
    {
        if($this->input->is_ajax_request()) {
            if(!$this->session->profile_check){
                $verify = false;
                $dev = false;

                if($this->input->cookie('dev')) {
                    $dev = $this->main->get('login_tokens', 'id', ['login_token', $this->input->cookie('dev')]);
                }

                if(password_verify($this->input->post('password') . $this->user->password_salt, $this->user->password) || $dev) {
                    $this->session->set_flashdata('profile_check', true);
                    $verify = true;
                }

                responseMsg($verify, "Password verified.", "Password verification failed.", $verify ? $this->input->server('HTTP_REFERER') : '');
            } else {                
                $this->form_validation->set_rules($this->profile);

                if ($this->form_validation->run() == FALSE) {
                    $this->session->keep_flashdata('profile_check');
                    $response = ['error' => true, 'message' => $this->form_validation->error_array(), 'validate' => true];
                } else {
                    $post = [
                        'mobile'   	 => $this->input->post('mobile'),
                        'email'   	 => strtolower($this->input->post('email')),
                        'name'   	 => $this->input->post('name')
                    ];

                    if ($this->input->post('password')) {
                        $hp  = encr_password($this->input->post('password'));

                        $post['password'] = $hp['hashedPassword'];
                        $post['password_salt'] = $hp['salt'];
                    }

                    $u_id = $this->main->update(['id' => $this->session->auth], $post, $this->table);

                    responseMsg($u_id, "Profile updated.", "Profile not updated. Try again.", $u_id ? $this->input->server('HTTP_REFERER') : '');
                }
            }

            die(json_encode($response));
        } else {
            $data['title'] = 'Profile';
            $data['name'] = $this->session->profile_check ? 'profile' : 'profile-check';
            $data['operation'] = 'Update';
            $data['url'] = admin('profile');
            $data['validate'] = true;
            $this->session->keep_flashdata('profile_check');

            if(!$this->session->profile_check) return $this->template->load('template', 'profile-check', $data);
            else return $this->template->load('template', 'profile', $data);
        }
    }

	public function logout()
    {
        $this->session->unset_userdata(array_keys($this->session->userdata()));
        flashMsg(1, "You have successfully logged out!", "", admin('login'));
    }

	public function backup()
    {
        // Load the DB utility class
        $this->load->dbutil();
        $filename = url_title(APP_NAME, 'dash', TRUE).'.sql';
        
        // Backup your entire database and assign it to a variable

        $prefs = [
            'tables'                => [],                          // Array of tables to backup.
            'ignore'                => [],                          // List of tables to omit from the backup
            'format'                => 'txt',                       // gzip, zip, txt
            'filename'              => $filename,                   // File name - NEEDED ONLY WITH ZIP FILES
            'add_drop'              => TRUE,                        // Whether to add DROP TABLE statements to backup file
            'add_insert'            => TRUE,                        // Whether to add INSERT data to backup file
            'newline'               => "\n",                        // Newline character used in backup file
            'foreign_key_checks'    => FALSE                        // Whether output should keep foreign key checks enabled.
        ];

        $backup = $this->dbutil->backup($prefs);

        // Load the file helper and store the file to the server
        $this->load->helper('file');

        $path = 'db/';

        if(! is_dir($path)) {
            mkdir($path, 0755, true);
            
            $htmlFileContent = "<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><p>Directory access is forbidden.</p></body></html>";
            file_put_contents($path . 'index.html', $htmlFileContent);
        }

        write_file($path.$prefs['filename'], $backup);

        return redirect(admin());
    }

    public function mobile_check($str)
    {   
        $where = ['mobile' => $str, 'id != ' => $this->session->auth, 'domain_id' => $this->domain['id']];
        
        if ($this->main->check($this->table, $where, 'id'))
        {
            $this->form_validation->set_message('mobile_check', 'The %s is already in use');
            return FALSE;
        } else
            return TRUE;
    }

    public function email_check($str)
    {   
        $where = ['email' => $str, 'id != ' => $this->session->auth, 'domain_id' => $this->domain['id']];
        
        if ($this->main->check($this->table, $where, 'id'))
        {
            $this->form_validation->set_message('email_check', 'The %s is already in use');
            return FALSE;
        } else
            return TRUE;
    }

    protected $profile = [
        [
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|max_length[50]',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 50 chars allowed"
            ],
        ],
        [
            'field' => 'mobile',
            'label' => 'Mobile',
            'rules' => 'required|numeric|exact_length[10]|callback_mobile_check',
            'errors' => [
                'required' => "%s is required",
                'numeric' => "%s is invalid",
                'exact_length' => "%s is invalid",
            ],
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|max_length[100]|valid_email|callback_email_check',
            'errors' => [
                'required' => "%s is required",
                'valid_email' => "%s is invalid",
                'max_length' => "Max 100 chars allowed"
            ],
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'max_length[50]',
            'errors' => [
                'max_length' => "Max 50 chars allowed"
            ],
        ]
    ];
}