<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Public_Controller
{
    public $path = '';

    public function subscribe()
    {
        if(!empty($this->input->post()) && $this->input->is_ajax_request()) {
            $post = [
                'email'         => $this->input->post('email'),
                'domain_id'     => $this->domain['id'],
                'created_at'    => date('Y-m-d H:i:s')
            ];

            $u_id = $this->main->add($post, "subscribe");

            if($u_id) {
                $this->load->library('appmails');
                $this->appmails->subscribe($this->input->post());
            }

            responseMsg($u_id, "Thank You for subscribing!", "Subscription not saved. Try again.");
        } else 
            return $this->error_404();
    }

    public function contact()
    {
        if(!empty($this->input->post()) && $this->input->is_ajax_request()) {
            $post = [
                'name'          => $this->input->post('first_name').' '.$this->input->post('last_name'),
                'email'         => $this->input->post('email'),
                'phone_number'  => $this->input->post('phone_number'),
                'msg_subject'   => $this->input->post('msg_subject'),
                'message'       => $this->input->post('message'),
                'domain_id'     => $this->domain['id'],
                'created_at'    => date('Y-m-d H:i:s')
            ];

            $u_id = $this->main->add($post, "contact_us");

            // if($u_id) {
            //     $this->load->library('appmails');
            //     $this->appmails->contact($this->input->post());
            // }

            responseMsg($u_id, "Thank you for contacting us. We will get back to you soon.", "Some error occured. Try again.");
        } else 
            return $this->error_404();
    }

    public function apply()
    {
        if(!empty($this->input->post()) && $this->input->is_ajax_request()) {
            $this->path = $this->config->item('resumes');
            $resume = $this->uploadImage('uploadFile', 'pdf');

            if($resume['error']) {
                responseMsg(false, '', $resume['message']);
            } else {
                $post = [
                    'name'          => $this->input->post('name'),
                    'email'         => $this->input->post('email'),
                    'phone'         => $this->input->post('phone'),
                    'designation'   => $this->input->post('designation'),
                    'message'       => $this->input->post('message'),
                    'resume'        => $resume['message'],
                    'domain_id'     => $this->domain['id'],
                    'created_at'    => date('Y-m-d H:i:s')
                ];

                $u_id = $this->main->add($post, "careers");
    
                responseMsg($u_id, "Thank you for apply. We will get back to you soon.", "Some error occured. Try again.");
            }
        } else
            return $this->error_404();
    }

    public function sitemap()
    {
        // Set the content-type header to XML
        header('Content-type: application/xml');

        // Generate the sitemap XML
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
        
        // Add dynamic URLs to the sitemap (replace with your own logic)
        $urls = $this->main->getAll('seo', '', ['domain_id' => $this->domain['id'], 'is_deleted' => 0], 'priority DESC, page_name ASC'); // Implement this method to retrieve your dynamic URLs

        foreach ($urls as $url) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . base_url($url['page_name'] !== 'index' ? "{$url['page_name']}" : '') . '</loc>';
            $sitemap .= '<lastmod>'.str_replace(' ', 'T', $url['updated_at']).'+00:00</lastmod>';
            $sitemap .= '<priority>'. $url['priority'] .'</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        // Output the sitemap XML
        echo $sitemap;
    }

    public function robots()
    {
        // Set the content-type header to plain text
        header('Content-type: text/plain');

        return $this->load->view('others/robots');
    }

    public function icard(String $slug)
    {
        $this->load->model(admin('employee_model'));
        $data['employee'] = $this->employee_model->getEmployee(['e.slug' => $slug]);
        
        if($data['employee']) {
            $this->path = $this->config->item('uploads');
            return $this->template->load('template', 'others/icard', $data);
        } else {
            return $this->error_404();
        }
    }
}