<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
	}

	public function index()
	{
		$data['getAll'] = $this->mProduk->getAll();
		$this->load->view('header',$data);
		$this->load->view('produk/index');
		$this->load->view('footer');		
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */