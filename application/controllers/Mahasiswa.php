<?php

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['judul'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}

		$this->load->view('template/header', $data);
		$this->load->view('mahasiswa/index');
		$this->load->view('template/footer');
	}

	public function tambah()
	{

		$data['judul'] = 'Form Tambah Data Mahasiswa';

		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('template/footer');
		} else {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Data Mahasiswa Berhasil Ditambahkan');
			redirect('mahasiswa');
		}
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}

	public function detail($id)
	{

		$data['judul'] = 'Detail Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByID($id);

		$this->load->view('template/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('template/footer');
	}


	public function ubah($id)
	{

		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('template/footer');
		} else {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Data Diubah');
			redirect('mahasiswa');
		}
	}
}
