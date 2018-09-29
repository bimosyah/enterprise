<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MProduk extends CI_Model {

	function getAll()
	{
		return $this->db->get('produk')->result();
	}

}

/* End of file mProduk.php */
/* Location: ./application/models/mProduk.php */