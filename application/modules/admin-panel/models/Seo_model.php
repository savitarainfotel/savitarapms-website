<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Seo_model extends MY_Model
{
	public $table = "seo s";
	public $select_column = ['s.id', 's.page_name', 's.title', 's.created_at', 's.updated_at', 's.no_delete'];
	public $search_column = ['s.id', 's.page_name', 's.title', 's.created_at', 's.updated_at'];
    public $order_column = [null, 's.page_name', 's.title', 's.created_at', 's.updated_at', null];
	public $order = ['s.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['s.is_deleted' => 0, 's.domain_id' => $this->domain['id']]);

        if($count === false) $this->datatable();
	}
}