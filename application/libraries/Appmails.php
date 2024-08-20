<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appmails {
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function password_reset(Array $data, Array $post)
    {
        $message = $this->ci->template->load(admin('emails/template'), admin('emails/password_reset/password'), $data, true);
        $subject = "Password reset link : ".APP_NAME;

        return $this->send_email($post['email'], $message, $subject);
    }

    public function subscribe(Array $post)
    {
        $message = $this->ci->template->load(admin('emails/template'), admin('emails/subscribe/subscribe'), $post, true);
        $subject = "Thank You for subscribing!";

        return $this->send_email($post['email'], $message, $subject);
    }

    public function contact(Array $post)
    {
        $message = $this->ci->template->load(admin('emails/template'), admin('emails/contact/contact'), $post, true);
        $subject = "Thank you for contacting us";

        return $this->send_email($post['email'], $message, $subject);
    }

    private function send_email($email, $message, $subject, $config = 'info', $pdf='')
	{
        $creds = $this->ci->config->item('emails')[$config];

        $this->ci->load->library('email');
        $this->ci->email->initialize($creds);
        
        $this->ci->email->clear(TRUE);
		$this->ci->email->set_newline("\r\n");
		$this->ci->email->from($creds['smtp_user'], APP_NAME);
		$this->ci->email->to($email);
		$this->ci->email->subject($subject);
		$this->ci->email->message($message);

		if ($pdf) {
            if(is_array($pdf)) {
                foreach ($pdf as $file) {
                    $this->ci->email->attach($_SERVER['DOCUMENT_ROOT'] . str_replace(basename($_SERVER["SCRIPT_NAME"]), "", $_SERVER["SCRIPT_NAME"]) . $file);
                }
            } else {
                $this->ci->email->attach($_SERVER['DOCUMENT_ROOT'] . str_replace(basename($_SERVER["SCRIPT_NAME"]), "", $_SERVER["SCRIPT_NAME"]) . $pdf);
            }
        }
        
        $this->ci->email->send(FALSE);
        
        if(ENVIRONMENT === 'development') $this->ci->email->print_debugger(array('headers'));

        $this->ci->email->clear();

        return;
	}
}