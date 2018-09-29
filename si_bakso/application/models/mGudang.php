<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MGudang extends CI_Model {

	function getAll()
	{
		$this->db->select('no_faktur,produk.nama as produk,total_masuk,total_keluar,tanggal,id_suplier');
		$this->db->from('gudang');
		$this->db->join('produk', 'gudang.id_produk = produk.id');
		return $this->db->get()->result();
	}

}

/* End of file mGudang.php */
/* Location: ./application/models/mGudang.php */ 