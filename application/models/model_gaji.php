<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gaji extends CI_Model {

	public function get_all()
	{
		return $this->db->get('gaji')->result();
	}

	public function insert($data)
	{
		$this->db->insert('gaji', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('gaji');
	}

	public function update($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('gaji', $data);
	}

	public function getById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('gaji');
	}

}

/* End of file model_gaji.php */
/* Location: ./application/models/model_gaji.php */