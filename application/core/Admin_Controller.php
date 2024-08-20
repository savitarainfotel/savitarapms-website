<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->auth) 
			return redirect(admin('login'));

        $this->user = (object) $this->main->get("logins", 'name, mobile, email, password_salt, password', ['id' => $this->session->auth]);

		$this->redirect = admin($this->redirect);
	}
}