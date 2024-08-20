<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Public_Controller
{
    public function index()
    {
        $data['breadcumb'] = 'Services';
		return $this->template->load('template', 'services/home', $data);
    }

    public function custom_software_development()
    {
        $data['breadcumb'] = 'Custom Software Development';
		return $this->template->load('template', 'services/custom-software-development', $data);
    }
    
    public function e_commerce_development()
    {
        $data['breadcumb'] = 'E-Commerce Development';
		return $this->template->load('template', 'services/e-commerce-development', $data);
    }
    
    public function game_development_services()
    {
        $data['breadcumb'] = 'Game Development';
		return $this->template->load('template', 'services/game-development-services', $data);
    }
    
    public function mobile_application_development()
    {
        $data['breadcumb'] = 'Mobile Application Development';
		return $this->template->load('template', 'services/mobile-application-development', $data);
    }
    
    public function virtual_production()
    {
        $data['breadcumb'] = 'Virtual Production';
		return $this->template->load('template', 'services/virtual-production', $data);
    }
    
    public function visualization()
    {
        $data['breadcumb'] = 'Architectural Visualization';
		return $this->template->load('template', 'services/visualization', $data);
    }
    
    public function web_development()
    {
        $data['breadcumb'] = 'Web Development';
		return $this->template->load('template', 'services/web-development', $data);
    }
    public function graphics_design()
    {
        $data['breadcumb']='Graphic Design';
        return $this->template->load('template','services/graphics-design',$data);
    }
    public function digital_marketing()
    {
        $data['breadcumb']='Digital Marketing';
        return $this->template->load('template','services/digital-marketing',$data);
    }
    public function networking_services()
    {
        $data['breadcumb']='Networking Services';
        return $this->template->load('template','services/networking-services',$data);
    }
}