<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends Admin_Controller  {
    protected $table = 'seo';
	protected $redirect = 'seo';
	protected $title = 'Seo';
	protected $name = 'seo';

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
        
        $this->load->model('Seo_model', 'data');

        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->post('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->page_name;
            $sub_array[] = $row->title;
            $sub_array[] = date('d-m-Y h:i A', strtotime($row->created_at));
            $sub_array[] = date('d-m-Y h:i A', strtotime($row->updated_at));
            
            $action = '<div class="d-flex">';
            $action .= anchor($this->redirect."/create-update/".e_id($row->id), '<i class="far fa-edit fa-xs"></i>', 'class="text-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Edit"');

            if(!$row->no_delete) {
                $action .= form_open("$this->redirect/delete", 'id="'.e_id($row->id).'"', ['id' => e_id($row->id)]).
                                '<a class="text-danger delete-item" href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash fa-xs"></i></a>'.
                            form_close();
            }

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

        $data['data'] = $this->main->get($this->table, 'name, email, phone_number, msg_subject, message, created_at', ['id' => $id, 'is_deleted' => 0, 'domain_id' => $this->domain['id']]);

        if(!$data['data']) {
            flashMsg(0, "", "$this->title not found.", $this->redirect);
        }

        return $this->template->load('template', "$this->redirect/form", $data);
    }

    public function create_update()
	{
        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules($this->validate);

            if ($this->form_validation->run() == FALSE) {
                responseMsg(0, "", $this->form_validation->error_array(), '', true);
            } else {
                $post = [
                    'page_name'   => $this->input->post('page_name'),
                    'title'       => $this->input->post('title'),
                    'keywords'    => $this->input->post('keywords'),
                    'description' => $this->input->post('description'),
                    'domain_id'   => $this->domain['id'],
                    'updated_at'  => date('Y-m-d H:i:s')
                ];

                $id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;

                if($id != 0) {
                    $msg = 'updated';
                    $u_id = $this->main->update(['id' => $id], $post, $this->table);
                } else {
                    $msg = 'added';
                    $post['created_at'] = date('Y-m-d H:i:s');
                    $u_id = $this->main->add($post, $this->table);
                }

                responseMsg($u_id, "$this->title $msg.", "$this->title not $msg. Try again.", $this->input->server('HTTP_REFERER'));
            }            
        } else {
            $id = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;
            $data['title'] = $this->title;
            $data['name'] = $this->name;
            $data['operation'] = $id == 0 ? "Add" : "Update";
            $data['url'] = $this->redirect;
            $data['validate'] = true;

            if($id != 0) {
                $data['data'] = $this->main->get($this->table, 'page_name, title, keywords, description', ['id' => $id, 'is_deleted' => 0, 'domain_id' => $this->domain['id']]);
                if(!$data['data']) {
                    flashMsg(0, "", "$this->title not found.", $this->redirect);
                }
            }

            return $this->template->load('template', "$this->redirect/form", $data);
        }
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
            'field' => 'page_name',
            'label' => 'Page link',
            'rules' => 'required|max_length[100]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 100 chars allowed."
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