<?php

class Home extends CI_Controller
{

	public function index($nama = 'Susanto')
	{
		$data['judul'] = 'Halaman Home';
		$data['nama'] = $nama;

		$this->load->view('template/header.php', $data);
		$this->load->view('home/index', $nama);
		$this->load->view('template/footer');
	}
}
