<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mGudang');
	}

	public function index()
	{
		$data['getAll'] = $this->mGudang->getAll();
		$this->load->view('header',$data);
		$this->load->view('gudang/index');
		$this->load->view('footer');			
	}
}

/* End of file Gudang.php */
/* Location: ./application/controllers/Gudang.php */