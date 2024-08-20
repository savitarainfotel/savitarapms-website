<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin_Controller  {
    protected $table = 'categories';
	protected $redirect = 'categories';
	protected $title = 'Category';
	protected $name = 'categories';

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
        
        $this->load->model('Categories_model', 'data');

        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->post('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->c_name;
            $sub_array[] = date('d-m-Y h:i A', strtotime($row->created_at));
            $sub_array[] = date('d-m-Y h:i A', strtotime($row->updated_at));
            
            $action = '<div class="d-flex">';
            $action .= anchor($this->redirect."/create-update/".e_id($row->id), '<i class="far fa-edit fa-xs"></i>', 'class="text-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Edit"');

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

    public function create_update()
	{
        $this->load->model('categories_model');
        $id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;

        $data['data'] = [];

        if($id != 0) {
            $data['data'] = $this->categories_model->getCategory(['c.id' => $id]);
            if(!$data['data']) {
                flashMsg(0, "", "$this->title not found.", $this->redirect);
            }
        }

        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules($this->validate);

            if ($this->form_validation->run() == FALSE) {
                responseMsg(0, "", $this->form_validation->error_array(), '', true);
            } else {
                $msg = $id != 0 ? 'updated' : 'added';

                $u_id = $this->categories_model->create_update($id, $this->table, $data['data']);

                responseMsg($u_id, "$this->title $msg.", "$this->title not $msg. Try again.", $this->input->server('HTTP_REFERER'));
            }
        } else {
            $data['title'] = $this->title;
            $data['name'] = $this->name;
            $data['operation'] = $id == 0 ? "Add" : "Update";
            $data['url'] = $this->redirect;
            $data['validate'] = true;

            return $this->template->load('template', "$this->redirect/form", $data);
        }
	}

	public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'required|is_natural');
        
        if ($this->form_validation->run() == FALSE)
            responseMsg(0, "", "Some required fields are missing.");
        else{
            $this->load->model('categories_model');
            $id = d_id($this->input->post('id'));
            $data = $this->categories_model->getCategory(['c.id' => $id]);
            if(!$data) responseMsg(0, "", "$this->title not found.");
            $d_id = $this->categories_model->delete($this->table, $data);

            responseMsg($d_id, "$this->title deleted.", "$this->title not deleted.");
        }
    }

    public function name_check($str)
    {
        $c_id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;
        $where = ['c_name' => $str, 'id != ' => $c_id, 'domain_id' => $this->domain['id'], 'is_deleted' => 0];
        
        if ($this->main->check($this->table, $where, 'id')) {
            $this->form_validation->set_message('name_check', 'The %s is already in use');
            return FALSE;
        } else
            return TRUE;
    }

    protected $validate = [
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required|max_length[255]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 255 chars allowed."
            ],
        ],
        [
            'field' => 'c_name',
            'label' => 'Name',
            'rules' => 'required|max_length[200]|callback_name_check|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 200 chars allowed."
            ],
        ],
        [
            'field' => 'keywords',
            'label' => 'Keywords',
            'rules' => 'required|max_length[255]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 255 chars allowed."
            ],
        ],
        [
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required|max_length[1000]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 1000 chars allowed."
            ],
        ]
    ];
}