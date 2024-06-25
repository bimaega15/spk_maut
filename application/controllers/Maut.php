<?php

class Maut extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model(['penilaian_model', 'kriteria_model']);
		$this->load->library('form_validation');
	}
	public function index()
	{

		$data['tittle'] = 'Metode MAUT';

		$data['user'] = $this->db->get_where(
			'user',
			['username' => $this->session->userdata('username')]
		)->row_array();

		$data['start'] = $this->uri->segment(3);

		$data['penilaian'] = $this->penilaian_model->getAllPenilaian(); //memanggil tabel subkriteria
		$data['kriteria'] = $this->kriteria_model->getAllKriteria(); // memanggil tabel kriteria


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('maut/index', $data);
		$this->load->view('templates/footer');
	}
}
