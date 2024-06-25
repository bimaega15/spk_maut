<?php

class Preferensi extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('penilaian_model');
		$this->load->library('form_validation');
	}
	public function index()
	{

		$data['tittle'] = 'Data Preferensi';
		$data['user'] = $this->db->get_where(
			'user',
			['username' => $this->session->userdata('username')]
		)->row_array();
		$data['start'] = $this->uri->segment(3);
		$data['penilaian'] = $this->penilaian_model->getDesc(); // memanggil tabel kriteria




		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar3', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('preferensi/rank', $data);
		$this->load->view('templates/footer');
	}
}
