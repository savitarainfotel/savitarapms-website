<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends Admin_Controller  {
    protected $table = 'employees';
	protected $redirect = 'employees';
	protected $title = 'Employee';
	protected $name = 'employees';

	public function __construct()
    {
        parent::__construct();
        $this->path = $this->config->item('uploads');
        $this->departments = $this->main->getAll('departments', 'id, d_name', ['is_deleted' => 0]);
        $this->positions = $this->main->getAll('positions', 'id, p_name', ['is_deleted' => 0]);
    }

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
        
        $this->load->model('employee_model', 'data');

        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->post('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->e_name;
            $sub_array[] = $row->d_name;
            $sub_array[] = $row->p_name;
            $sub_array[] = $row->employee_id;
            $sub_array[] = date('d-m-Y', strtotime($row->joining_date));
            
            $action = '<div class="d-flex">';
            $action .= anchor($this->redirect."/create-update/".e_id($row->id), '<i class="far fa-edit fa-xs"></i>', 'class="text-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Edit"');

            if(is_file("$this->path$row->slug.png")) {
                $action .= '<a href="'.(base_url($this->path . $row->slug)).'.png" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Download QR" download=""><i class="fa fa-download fa-xs"></i></a>';
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

    public function create_update()
	{
        $this->load->model('employee_model');
        $id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;

        $data['data'] = [];

        if($id != 0) {
            $data['data'] = $this->employee_model->getEmployee(['e.id' => $id]);
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

                $img = $this->input->post('image');

                if(!empty($_FILES['image']['name'])) {
                    $upload = $this->uploadImage('image');

                    if($upload['error']) responseMsg(0, '', strip_tags($upload['message']));

                    $img = $upload['message'];
                }

                $u_id = $this->employee_model->create_update($id, $this->table, $data['data'], $img);

                if($u_id && $this->input->post('image') && $img !== $this->input->post('image')) {
                    
                }

                responseMsg($u_id, "$this->title $msg.", "$this->title not $msg. Try again.", $this->input->server('HTTP_REFERER'));
            }
        } else {
            $data['title'] = $this->title;
            $data['name'] = $this->name;
            $data['operation'] = $id == 0 ? "Add" : "Update";
            $data['url'] = $this->redirect;
            $data['validate'] = true;
            $data['datetimepicker'] = true;

            return $this->template->load('template', "$this->redirect/form", $data);
        }
	}

	public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'required|is_natural');
        
        if ($this->form_validation->run() == FALSE)
            responseMsg(0, "", "Some required fields are missing.");
        else{
            $this->load->model('employee_model');
            $id = d_id($this->input->post('id'));
            $data = $this->employee_model->getEmployee(['e.id' => $id]);
            if(!$data) responseMsg(0, "", "$this->title not found.");
            $d_id = $this->employee_model->delete($this->table, $data);

            responseMsg($d_id, "$this->title deleted.", "$this->title not deleted.");
        }
    }

    protected $validate = [
        [
            'field' => 'e_name',
            'label' => 'Employee Name',
            'rules' => 'required|max_length[200]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 200 chars allowed."
            ],
        ],
        [
            'field' => 'department_id',
            'label' => 'Department',
            'rules' => 'required|trim',
            'errors' => [
                'required' => "%s is required"
            ],
        ],
        [
            'field' => 'position_id',
            'label' => 'Position',
            'rules' => 'required|trim',
            'errors' => [
                'required' => "%s is required"
            ],
        ],
        [
            'field' => 'employee_id',
            'label' => 'Employee ID',
            'rules' => 'required|max_length[10]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 10 chars allowed."
            ],
        ],
        [
            'field' => 'joining_date',
            'label' => 'Joining Date',
            'rules' => 'required|trim',
            'errors' => [
                'required' => "%s is required"
            ],
        ]
    ];
}