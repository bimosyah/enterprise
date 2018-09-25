<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jabatan extends CI_Model {

	public function get_all()
	{
		return $this->db->get('jabatan')->result();
	}	

	public function insert($data)
	{
		$this->db->insert('jabatan', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jabatan');
	}

	public function update($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('jabatan', $data);
	}

	public function getById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('jabatan');
	}

}

/* End of file model_jabatan.php */
/* Location: ./application/models/model_jabatan.php */