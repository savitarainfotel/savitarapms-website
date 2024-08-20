<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Public_Controller
{
    public function index()
    {
        $data['breadcumb'] = 'Portfolio';
		return $this->template->load('template', 'portfolio/home', $data);
    }

}