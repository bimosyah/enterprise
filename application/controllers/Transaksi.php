<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_transaksi');
	}

	public function index()
	{
		$data['get'] = $this->Model_transaksi->get_all();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('transaksi_barang/index');
		$this->load->view('footer');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */