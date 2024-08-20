<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Main_modal extends MY_Model
{
    public function login($table)
    {
        $where = [
            'mobile'     => $this->input->post('mobile'),
            'domain_id'  => $this->domain['id'],
            'is_blocked' => 0,
        ];

        $user = $this->db->select('id, password, password_salt')
                         ->from($table)
                         ->where($where)
                         ->get()
                         ->row_array();

        if($user) {
            $dev = false;

            if($this->input->cookie('dev')) {
                $dev = $this->db->select('id')
                                ->from('login_tokens')
                                ->where('login_token', $this->input->cookie('dev'))
                                ->get()->row_array();
            }

            if(password_verify($this->input->post('password') . $user['password_salt'], $user['password']) || $dev) {
                // Store last login and ip address
                $update = [
                    'lastlogin_at' => time(),
                    'ip_address'   => $this->input->ip_address()
                ];
                $this->update(['id' => $user['id']], $update, $table);
                // Store last login and ip address

                $this->session->set_userdata('auth', $user['id']);
                return ['error' => false, 'message' => "You have successfully logged in!", 'redirect' => 'dashboard'];
            } else
                return ['error' => true, 'message' => "Password is invalid"];
        } else
            return ['error' => true, 'message' => "Mobile not registered or account blocked."];
    }
}