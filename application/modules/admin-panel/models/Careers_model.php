<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Careers_model extends MY_Model
{
	public $table = "careers c";
	public $select_column = ['c.id', 'c.name', 'c.email', 'c.phone', 'c.designation', 'c.created_at', 'c.resume'];
	public $search_column = ['c.id', 'c.name', 'c.email', 'c.phone', 'c.designation', 'c.created_at'];
    public $order_column = [null, 'c.name', 'c.email', 'c.phone', 'c.designation', 'c.created_at', null];
	public $order = ['c.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['c.is_deleted' => 0, 'c.domain_id' => $this->domain['id']]);

        if($count === false) $this->datatable();
	}
}