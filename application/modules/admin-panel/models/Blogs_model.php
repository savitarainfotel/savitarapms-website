<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Blogs_model extends MY_Model
{
	public $table = "blogs b";
	public $select_column = ['b.id', 'b.b_title', 'b.posted_by', 'b.posted_on', 'b.image', 's.title', 's.keywords', 's.description', 'b.seo_id', 'b.category_id', 'b.b_description', 'b.blog_type'];
	public $search_column = ['b.id', 'b.b_title', 'b.posted_by', 'b.posted_on'];
    public $order_column = [null, 'b.b_title', 'b.posted_by', 'b.posted_on', null];
	public $order = ['b.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['b.is_deleted' => 0, 'b.domain_id' => $this->domain['id']])
				  ->where(['s.is_deleted' => 0, 's.domain_id' => $this->domain['id']])
				  ->join('seo s', 's.id = b.seo_id');

        if($count === false) $this->datatable();
	}

	public function getBlog($where)
	{
		$this->make_query();
		$result = $this->db->where($where)->get()->row_array();

		return ($result !== false) ? $result : false;
	}
	
	public function create_update($id, $table, $data, $img)
	{
		$post = [
			'b_title'      	=> $this->input->post('b_title'),
			'posted_by'     => $this->input->post('posted_by'),
			'category_id'   => implode(',', array_map('d_id', $this->input->post('category_id'))),
			'blog_type'     => $this->input->post('blog_type'),
			'posted_on'     => date('Y-m-d H:i:s', strtotime($this->input->post('posted_on'))),
			'b_description' => $this->input->post('b_description'),
			'image'		   	=> $img,
			'domain_id'   	=> $this->domain['id'],
			'updated_at'  	=> date('Y-m-d H:i:s')
		];

		$seo = [
			'page_name'   => url_title($this->input->post('b_title'), 'dash', TRUE),
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

	public function getAllBlogs($where=[], $limit = null, $offset = null)
	{
		$this->make_query();
		$this->db->select('sc.title, sc.keywords, sc.description, s.page_name')
				  ->join('categories c', 'FIND_IN_SET(c.id, b.category_id) <> 0')
				  ->join('seo sc', 'sc.id = c.seo_id');

		if($limit !== null && $offset !== null) {
			$this->db->limit($limit, $offset);
		}

		$result = $this->db->where($where)->group_by('b.id')->get()->result_array();

		return ($result !== false) ? $result : false;
	}
}