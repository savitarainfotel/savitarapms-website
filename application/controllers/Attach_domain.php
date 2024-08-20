<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Attach_domain extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_modal', 'main');
	}

    public function index()
    {
        return $this->template->load('template', 'pages/attach-domain');
    }
}