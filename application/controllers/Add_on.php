<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_on extends Public_Controller
{
    public function payroll_management()
    {
        $data['breadcumb'] = 'Add_on';
		return $this->template->load('template', 'add_on/payroll_management', $data);
    }

    public function digital_marketing()
    {
        $data['breadcumb'] = 'Add_on';
		return $this->template->load('template', 'add_on/digital_marketing', $data);
    }

    public function website_builder()
    {
        $data['breadcumb'] = 'Add_on';
		return $this->template->load('template', 'add_on/website_builder', $data);
    }

    public function revenue_management()
    {
        $data['breadcumb'] = 'Add_on';
		return $this->template->load('template', 'add_on/revenue_management', $data);
    }
    public function repetition_management()
    {
        $data['breadcumb'] = 'Add_on';
		return $this->template->load('template', 'add_on/repetition_management', $data);
    }

    public function resource_finder_repair()
    {
        $data['breadcumb'] = 'Add_on';
		return $this->template->load('template', 'add_on/resource_finder_repair', $data);
    }
}