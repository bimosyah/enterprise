<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_jabatan');
	}

	public function index()
	{
		$data['get'] = $this->Model_jabatan->get_all();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('jabatan/index');
		$this->load->view('footer');
	}

	public function insert()
	{
		$data = array(
			'posisi' => $this->input->post('posisi'),
			'nip' => $this->input->post('nip')
		);
		$this->Model_jabatan->insert($data);
		redirect('Jabatan','refresh');
	}

	public function hapus($id)
	{
		$this->Model_jabatan->hapus($id);
		redirect('Jabatan','refresh');	
	}

	public function edit($id)
	{
		$data['get'] = $this->Model_jabatan->getById($id)->result();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('jabatan/edit');
		$this->load->view('footer');
	}

	public function update($id)
	{
		$data = array(
			'posisi' => $this->input->post('posisi'),
			'nip' => $this->input->post('nip')
		);
		$this->Model_jabatan->update($data,$id);
		redirect('Jabatan','refresh');
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */