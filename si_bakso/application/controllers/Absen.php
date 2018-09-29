<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAbsen');
	}
	
	public function index()
	{
		$data['getAll'] = $this->mAbsen->getAll();
		$this->load->view('header',$data);
		$this->load->view('absen/index');
		$this->load->view('footer');
	}

}

/* End of file Absen.php */
/* Location: ./application/controllers/Absen.php */