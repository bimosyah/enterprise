<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_suplier extends CI_Model {

	public function get_all()
	{
		return $this->db->get('suplier')->result();
	}	

	public function insert($data)
	{
		$this->db->insert('suplier', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('suplier');
	}

	public function update($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('suplier', $data);
	}

	public function getById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('suplier');
	}

}

/* End of file model_suplier.php */
/* Location: ./application/models/model_suplier.php */