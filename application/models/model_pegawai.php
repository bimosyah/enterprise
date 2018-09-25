<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {

	public function get_all()
	{
		return $this->db->get('pegawai')->result();
	}

}

/* End of file model_barang.php */
/* Location: ./application/models/model_barang.php */