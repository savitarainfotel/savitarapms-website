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
    
    public function career()
    {
        $data['breadcumb'] = 'Careers';
		return $this->template->load('template', 'pages/career', $data);
    }

    public function apply()
    {
        $data['breadcumb'] = 'apply';
		return $this->template->load('template', 'pages/apply', $data);
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
    
    public function software_development_technology()
    {
        $data['breadcumb'] = 'Technologies';
		return $this->template->load('template', 'pages/software-development-technology', $data);
    }

    public function team()
    {
        $data['breadcumb'] = 'Team Savitara Infotel';
		return $this->template->load('template', 'pages/team', $data);
    }    
}