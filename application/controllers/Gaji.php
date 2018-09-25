<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_gaji');
	}

	public function index()
	{
		$data['get'] = $this->Model_gaji->get_all();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('gaji/index');
		$this->load->view('footer');
	}

	public function insert()
	{
		$data = array(
			'id_jabatan' => $this->input->post('id_jabatan'),
			'nip' => $this->input->post('nip'),
			'gaji' => $this->input->post('gaji')
		);
		$this->Model_gaji->insert($data);
		redirect('Gaji','refresh');
	}

	public function hapus($id)
	{
		$this->Model_gaji->hapus($id);
		redirect('Gaji','refresh');	
	}

	public function edit($id)
	{
		$data['get'] = $this->Model_gaji->getById($id)->result();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('gaji/edit');
		$this->load->view('footer');
	}

	public function update($id)
	{
		$data = array(
			'id_jabatan' => $this->input->post('id_jabatan'),
			'nip' => $this->input->post('nip'),
			'gaji' => $this->input->post('gaji')
		);
		$this->Model_gaji->update($data,$id);
		redirect('Gaji','refresh');
	}

}

/* End of file Gaji.php */
/* Location: ./application/controllers/Gaji.php */