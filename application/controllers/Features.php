<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends Public_Controller
{
    public function crs_intigration()
    {
        $data['breadcumb'] = 'Features';
		return $this->template->load('template', 'features/crs_intigration', $data);
    }

    public function user_dashboard()
    {
        $data['breadcumb'] = 'Features';
		return $this->template->load('template', 'features/user_dashboard', $data);
    }

    public function channel_manager()
    {
        $data['breadcumb'] = 'Features';
		return $this->template->load('template', 'features/channel_manager', $data);
    }

    public function receptionist()
    {
        $data['breadcumb'] = 'Features';
		return $this->template->load('template', 'features/receptionist', $data);
    }

    public function admin()
    {
        $data['breadcumb'] = 'Features';
		return $this->template->load('template', 'features/admin', $data);
    }
}