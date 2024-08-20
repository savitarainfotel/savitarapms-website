<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

/**
 * 
 */
class Employee_model extends MY_Model
{
	public $table = "employees e";
	public $select_column = ['e.id', 'e.e_name', 'd.d_name', 'p.p_name', 'e.image', 'e.employee_id', 'e.joining_date', 'e.department_id', 'e.position_id', 'e.slug'];
	public $search_column = ['e.id', 'e.e_name', 'd.d_name', 'p.p_name', 'e.employee_id', 'e.joining_date'];
    public $order_column = [null, 'e.e_name', 'd.d_name', 'p.p_name', 'e.employee_id', 'e.joining_date', null, null];
	public $order = ['e.id' => 'DESC'];

	public function make_query($count = false)
	{
		$this->db->select($this->select_column)
            	  ->from($this->table)
				  ->where(['e.is_deleted' => 0, 'e.domain_id' => $this->domain['id']])
				  ->where(['p.is_deleted' => 0, 'd.is_deleted' => 0])
				  ->join('departments d', 'd.id = e.department_id')
				  ->join('positions p', 'p.id = e.position_id');

        if($count === false) $this->datatable();
	}

	public function getEmployee($where)
	{
		$this->make_query();
		$result = $this->db->where($where)->get()->row_array();

		return ($result !== false) ? $result : false;
	}
	
	public function create_update($id, $table, $data, $img)
	{
		$post = [
			'e_name'      	=> $this->input->post('e_name'),
			'slug'      	=> url_title($this->input->post('e_name'), 'dash', TRUE),
			'department_id' => d_id($this->input->post('department_id')),
			'position_id'   => d_id($this->input->post('position_id')),
			'employee_id'   => $this->input->post('employee_id'),
			'joining_date'  => date('Y-m-d H:i:s', strtotime($this->input->post('joining_date'))),
			'image'		   	=> $img,
			'domain_id'   	=> $this->domain['id'],
			'updated_at'  	=> date('Y-m-d H:i:s')
		];

		$this->db->trans_start();

		if($id == 0) {
			$post['created_at'] = date('Y-m-d H:i:s');
			$this->db->insert($table, $post);
		} else {
			$this->db->where(['id' => $id])->update($table, $post);
		}

		$this->db->trans_complete();

		if($this->db->trans_status()) {
			$qrcode = Builder::create()
					->writer(new PngWriter())
					->writerOptions([])
					->data(site_url("icard/".$post['slug']))
					->encoding(new Encoding('UTF-8'))
					->errorCorrectionLevel(ErrorCorrectionLevel::High)
					->size(500)
					->roundBlockSizeMode(RoundBlockSizeMode::Margin)
					->validateResult(false)
					->build();

			$qrcode->saveToFile($this->path.$post['slug'].'.png');
		}

		return $this->db->trans_status();
	}

	public function delete($table, $data)
	{
		$this->db->trans_start();

		$this->db->where(['id' => $data['id']])->update($table, ['is_deleted' => 1, 'updated_at' => date('Y-m-d H:i:s')]);

		$this->db->trans_complete();

		return $this->db->trans_status();
	}
}