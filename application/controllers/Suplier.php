<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_suplier');
	}

	public function index()
	{
		$data['get'] = $this->Model_suplier->get_all();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('suplier/index');
		$this->load->view('footer');
	}

	public function insert()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nomer_hp' => $this->input->post('nomer_hp'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan')
		);
		$this->Model_suplier->insert($data);
		redirect('Suplier','refresh');
	}

	public function hapus($id)
	{
		$this->Model_suplier->hapus($id);
		redirect('Suplier','refresh');	
	}

	public function edit($id)
	{
		$data['get'] = $this->Model_suplier->getById($id)->result();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('Suplier/edit');
		$this->load->view('footer');
	}

	public function update($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nomer_hp' => $this->input->post('nomer_hp'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan')
		);
		$this->Model_suplier->update($data,$id);
		redirect('Suplier','refresh');
	}

}

/* End of file Suplier.php */
/* Location: ./application/controllers/Suplier.php */