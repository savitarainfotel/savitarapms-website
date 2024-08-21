<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
{
    public function index()
    {
        $this->load->model(admin('blogs_model'));
        $this->path = $this->config->item('uploads');
        $data['blogs'] = $this->blogs_model->getAllBlogs([], 3, 0);
        return $this->template->load('template', 'home', $data);
    }

    public function about()
    {
        $data['breadcumb'] = 'About Us';
        return $this->template->load('template', 'pages/about', $data);
    }

    public function contact()
    {
        $data['breadcumb'] = 'Contact Us';
		return $this->template->load('template', 'pages/contact', $data);
    }
    
    public function privacypolicy()
    {
        $data['breadcumb'] = 'Privacy Policy';
		return $this->template->load('template', 'pages/privacypolicy', $data);
    }
    public function termsofservice()
    {
        $data['breadcumb'] = 'Terms of Service';
		return $this->template->load('template', 'pages/termsofservice', $data);
    }
}