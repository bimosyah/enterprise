<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}

	public function index()
	{
		$data['getAll'] = $this->mTransaksi->getAll();
		$this->load->view('header',$data);
		$this->load->view('transaksi/index');
		$this->load->view('footer');		
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */