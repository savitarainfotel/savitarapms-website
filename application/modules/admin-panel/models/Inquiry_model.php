<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Inquiry_model extends MY_Model
{
	public $table = "contact_us i";
	public $select_column = ['i.id', 'CONCAT(i.fname, "", i.lname) AS name', 'i.email', 'i.phone_number', 'i.created_at'];
	public $search_column = ['i.id', 'i.fname', 'i.email', 'i.phone_number', 'i.created_at'];
    public $order_column = [null, 'i.fname', 'i.email', 'i.phone_number', 'i.created_at', null];
	public $order = ['i.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['i.is_deleted' => 0, 'i.domain_id' => $this->domain['id']]);

        if($count === false) $this->datatable();
	}
}