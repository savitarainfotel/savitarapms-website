<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends Admin_Controller  {
    protected $table = 'careers';
	protected $redirect = 'careers';
	protected $title = 'Career';
	protected $name = 'careers';
	protected $path = '';

	public function index()
	{
		$data['title'] = $this->title;
        $data['name'] = $this->name;
        $data['operation'] = 'list';
        $data['url'] = $this->redirect;
        $data['datatables'] = true;
        $data['datatable'] = "$this->redirect/get";
        
        return $this->template->load('template', "$this->redirect/home", $data);
	}

    public function get()
    {
        check_ajax();
        
        $this->load->model('Careers_model', 'data');
        $this->path = $this->config->item('resumes');

        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->post('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->name;
            $sub_array[] = $row->email;
            $sub_array[] = $row->phone;
            $sub_array[] = $row->designation;
            $sub_array[] = date('d-m-Y h:i A', strtotime($row->created_at));
            
            $action = '<div class="d-flex">';
            $action .= anchor($this->redirect."/view/".e_id($row->id), '<i class="far fa-eye fa-xs"></i>', 'class="text-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="View"');

            if(is_file($this->path.$row->resume)) {
                $action .= '<a href="https://docs.google.com/viewerng/viewer?url='.site_url($this->path.$row->resume).'" class="text-success mr-2" data-toggle="tooltip" data-placement="top" data-original-title="View resume" target="_blank"><i class="far fa-file fa-xs"></i></a>';
            }

            $action .= form_open("$this->redirect/delete", 'id="'.e_id($row->id).'"', ['id' => e_id($row->id)]).
                            '<a class="text-danger delete-item" href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash fa-xs"></i></a>'.
                        form_close();

            $action .= '</div>';

            $sub_array[] = $action;

            $data[] = $sub_array;
            $sr++;
        }

        $output = [
            "draw"              => intval($this->input->post('draw')),  
            "recordsTotal"      => $this->data->count(),
            "recordsFiltered"   => $this->data->get_filtered_data(),
            "data"              => $data
        ];
        
        die(json_encode($output));
    }

	public function view()
    {
        $id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;
        $data['title'] = $this->title;
        $data['name'] = $this->name;
        $data['operation'] = "View";
        $data['url'] = $this->redirect;

        $data['data'] = $this->main->get($this->table, 'name, email, phone, designation, message, created_at, resume', ['id' => $id, 'is_deleted' => 0, 'domain_id' => $this->domain['id']]);

        if(!$data['data']) {
            flashMsg(0, "", "$this->title not found.", $this->redirect);
        }

        return $this->template->load('template', "$this->redirect/form", $data);
    }

	public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'required|is_natural');
        
        if ($this->form_validation->run() == FALSE)
            responseMsg(0, "", "Some required fields are missing.");
        else{
            $id = d_id($this->input->post('id'));
            if(!$this->main->get($this->table, 'id', ['id' => $id, 'domain_id' => $this->domain['id']])) responseMsg(0, "", "$this->title not found.");
            $d_id = $this->main->update(['id' => $id], ['is_deleted' => 1], $this->table);

            responseMsg($d_id, "$this->title deleted.", "$this->title not deleted.");
        }
    }
}