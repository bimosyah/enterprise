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
        $this->load->view('pegawai/index',$data);
        $this->load->view('footer');
	}

	public function insert()
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		$this->Model_pegawai->insert($data);
		redirect('Pegawai','refresh');
	}

	public function hapus($id)
	{
		$this->Model_pegawai->hapus($id);
		redirect('Pegawai','refresh');	
	}

	public function edit($id)
	{
		$data['get'] = $this->Model_pegawai->getById($id)->result();
		$data['title'] = 'Sistem Informasi Managemen Restoran';
		$this->load->view('header',$data);
		$this->load->view('Pegawai/edit');
		$this->load->view('footer');
	}

	public function update($id)
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		$this->Model_pegawai->update($data,$id);
		redirect('Pegawai','refresh');
	}

}