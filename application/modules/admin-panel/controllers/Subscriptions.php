<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriptions extends Admin_Controller  {
    protected $table = 'subscribe';
	protected $redirect = 'subscriptions';
	protected $title = 'Subscription';
	protected $name = 'subscriptions';

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
        
        $this->load->model('Subscription_model', 'data');

        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->post('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->email;
            $sub_array[] = date('d-m-Y h:i A', strtotime($row->created_at));
            
            $action = '<div class="d-flex">';

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