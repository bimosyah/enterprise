<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {

	public function get_all()
	{
		return $this->db->get('transaksi_gudang')->result();
	}
	

}

/* End of file model_tranksaksi.php */
/* Location: ./application/models/model_tranksaksi.php */