<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MY_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_modal', 'main');

        $this->domain = $this->main->get("domains", '*', ['domain' => SERVER_NAME, 'is_deleted' => 0]);

        if(!$this->domain) {
            return redirect('attach-domain');
        }
	}

	protected function uploadImage($upload, $exts='jpg|jpeg|png', $size=[], $name=null)
    {
        if(! is_dir($this->path)) {
            mkdir(FCPATH . $this->path, 0777, true);
            
            $htmlFileContent = "<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><p>Directory access is forbidden.</p></body></html>";
            file_put_contents($this->path . 'index.html', $htmlFileContent);
        }
        
        $this->load->library('upload');
        
        $config = [
                'upload_path'      => $this->path,
                'allowed_types'    => $exts,
                'file_name'        => $name ? $name : time(),
                'file_ext_tolower' => TRUE,
                'max_size'         => 15360,
                'overwrite'        => FALSE
            ];
            
        $config = array_merge($config, $size);
        
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload($upload))            
            return ['error' => false, 'message' => $this->upload->data("file_name")];
        else
            return ['error' => true, 'message' => strip_tags($this->upload->display_errors())];
    }

	public function error_404()
	{
		$data['title'] = 'Error 404';
        $data['name'] = 'Error 404';

		return $this->template->load('template', 'error_404', $data);
	}

    protected function uploadMultipleFiles($files, $name)
    {
        $images = [];
        $uploadError = false;

        foreach ($files['name'] as $key => $image) {
            $_FILES['image']['name']= $files['name'][$key];
            $_FILES['image']['type']= $files['type'][$key];
            $_FILES['image']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['image']['error']= $files['error'][$key];
            $_FILES['image']['size']= $files['size'][$key];

            $img = $this->uploadImage('image', '*', [], $name);

            if($img['error']) {
                $uploadError = $img['message'];
                break;
            }

            $images[] = ! $img['error'] ? $img['message'] : '';
        }

        return ['error' => $uploadError, 'images' => $images];
    }
}