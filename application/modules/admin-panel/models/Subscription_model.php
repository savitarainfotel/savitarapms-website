<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Subscription_model extends MY_Model
{
	public $table = "subscribe s";
	public $select_column = ['s.id', 's.email', 's.created_at'];
	public $search_column = ['s.id', 's.email', 's.created_at'];
    public $order_column = [null, 's.email', 's.created_at', null];
	public $order = ['s.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['s.is_deleted' => 0, 's.domain_id' => $this->domain['id']]);

        if($count === false) $this->datatable();
	}
}