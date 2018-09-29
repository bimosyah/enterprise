<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTransaksi extends CI_Model {

	function getAll()
	{
		return $this->db->get('transaksi')->result();
	}

}

/* End of file mTransaksi.php */
/* Location: ./application/models/mTransaksi.php */