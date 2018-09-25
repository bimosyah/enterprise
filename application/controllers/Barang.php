<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	public function index()
	{
		$data['title'] = 'Sistem Informasi Managemen Restoran';
        $this->load->view('header',$data);
        $this->load->view('barang/index');
        $this->load->view('footer');
	}

}