<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
	}

	public function index()
	{
		$data['get'] = $this->Model_barang->get_all();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('barang/index',$data);
		$this->load->view('footer');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */