<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Categories_model extends MY_Model
{
	public $table = "categories c";
	public $select_column = ['c.id', 'c.c_name', 'c.created_at', 'c.updated_at', 's.title', 's.keywords', 's.description', 'c.seo_id', 's.page_name'];
	public $search_column = ['c.id', 'c.c_name', 'c.created_at', 'c.updated_at'];
    public $order_column = [null, 'c.c_name', 'c.created_at', 'c.updated_at', null];
	public $order = ['c.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['c.is_deleted' => 0, 'c.domain_id' => $this->domain['id']])
				  ->where(['s.is_deleted' => 0, 's.domain_id' => $this->domain['id']])
				  ->join('seo s', 's.id = c.seo_id');

        if($count === false) $this->datatable();
	}

	public function getCategory($where)
	{
		$this->make_query();
		$result = $this->db->where($where)->get()->row_array();

		return ($result !== false) ? $result : false;
	}
	
	public function create_update($id, $table, $data)
	{
		$post = [
			'c_name'      => $this->input->post('c_name'),
			'domain_id'   => $this->domain['id'],
			'updated_at'  => date('Y-m-d H:i:s')
		];

		$seo = [
			'page_name'   => url_title($this->input->post('c_name'), 'dash', TRUE),
			'title'       => $this->input->post('title'),
			'keywords'    => $this->input->post('keywords'),
			'description' => $this->input->post('description'),
			'domain_id'   => $this->domain['id'],
			'updated_at'  => date('Y-m-d H:i:s'),
			'no_delete'	  => 1
		];

		$this->db->trans_start();

		if($id == 0) {			
			$seo['created_at'] = date('Y-m-d H:i:s');
			$this->db->insert('seo', $seo);
			$seo_id = $this->db->insert_id();

			$post['seo_id'] = $seo_id;
			$post['created_at'] = date('Y-m-d H:i:s');

			$this->db->insert($table, $post);
		} else {
			$this->db->where(['id' => $id])->update($table, $post);
			$this->db->where(['id' => $data['seo_id']])->update('seo', $seo);
		}

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function delete($table, $data)
	{
		$this->db->trans_start();

		$this->db->where(['id' => $data['id']])->update($table, ['is_deleted' => 1]);
		$this->db->where(['id' => $data['seo_id']])->update('seo', ['is_deleted' => 1]);

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function getAllCategory($where=[])
	{
		$this->make_query();
		$result = $this->db->where($where)->get()->result_array();

		return ($result !== false) ? $result : false;
	}
}