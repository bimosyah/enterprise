<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {

	public function get_all()
	{
		return $this->db->get('pegawai')->result();
	}

	public function insert($data)
	{
		$this->db->insert('pegawai', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pegawai');
	}

	public function update($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('pegawai', $data);
	}

	public function getById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('pegawai');
	}

}

/* End of file model_barang.php */
/* Location: ./application/models/model_barang.php */