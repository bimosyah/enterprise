<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pegawai');
	}

	public function index()
	{
		$data['get'] = $this->Model_pegawai->get_all();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
        $this->load->view('header',$data);
        $this->load->view('barang/index');
        $this->load->view('footer');
	}

}