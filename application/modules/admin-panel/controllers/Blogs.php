<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Admin_Controller  {
    protected $table = 'blogs';
	protected $redirect = 'blogs';
	protected $title = 'Blog';
	protected $name = 'blogs';

	public function __construct()
    {
        parent::__construct();
        $this->path = $this->config->item('uploads');
        $this->categories = $this->main->getAll('categories', 'id, c_name', ['is_deleted' => 0, 'domain_id'   => $this->domain['id']]);
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
        
        $this->load->model('Blogs_model', 'data');

        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->post('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->b_title;
            $sub_array[] = $row->posted_by;
            $sub_array[] = date('d-m-Y', strtotime($row->posted_on));
            
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
        $this->load->model('blogs_model');
        $id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;

        $data['data'] = [];

        if($id != 0) {
            $data['data'] = $this->blogs_model->getBlog(['b.id' => $id]);
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
                    $upload = $this->uploadImage('image', $exts='jpg|jpeg|png', $size=[], $name=null);

                    if($upload['error']) responseMsg(0, '', strip_tags($upload['message']));

                    $img = $upload['message'];
                }

                $u_id = $this->blogs_model->create_update($id, $this->table, $data['data'], $img);

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
            $data['ckeditor'] = true;
            $data['select2'] = true;

            return $this->template->load('template', "$this->redirect/form", $data);
        }
	}

	public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'required|is_natural');
        
        if ($this->form_validation->run() == FALSE)
            responseMsg(0, "", "Some required fields are missing.");
        else{
            $this->load->model('blogs_model');
            $id = d_id($this->input->post('id'));
            $data = $this->blogs_model->getBlog(['b.id' => $id]);
            if(!$data) responseMsg(0, "", "$this->title not found.");
            $d_id = $this->blogs_model->delete($this->table, $data);

            responseMsg($d_id, "$this->title deleted.", "$this->title not deleted.");
        }
    }

    public function title_check($str)
    {
        $c_id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;
        $where = ['b_title' => $str, 'id != ' => $c_id, 'domain_id' => $this->domain['id'], 'is_deleted' => 0];
        
        if ($this->main->check($this->table, $where, 'id')) {
            $this->form_validation->set_message('title_check', 'The %s is already in use');
            return FALSE;
        } else
            return TRUE;
    }

    protected $validate = [
        [
            'field' => 'b_title',
            'label' => 'Blog title',
            'rules' => 'required|max_length[200]|callback_title_check|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 200 chars allowed."
            ],
        ],
        [
            'field' => 'category_id[]',
            'label' => 'Category',
            'rules' => 'required|trim',
            'errors' => [
                'required' => "%s is required"
            ],
        ],
        [
            'field' => 'posted_by',
            'label' => 'Posted By',
            'rules' => 'required|max_length[100]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 100 chars allowed."
            ],
        ],
        [
            'field' => 'posted_on',
            'label' => 'Posted On',
            'rules' => 'required|max_length[10]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 10 chars allowed."
            ],
        ],
        [
            'field' => 'b_description',
            'label' => 'Blog description',
            'rules' => 'required|trim',
            'errors' => [
                'required' => "%s is required"
            ],
        ],
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