<?php

class Penilaian extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model(['penilaian_model', 'Guru_model']);
		$this->load->library('form_validation', 'Mypdf');
	}
	public function index()
	{

		$data['tittle'] = 'Penilaian Kinerja';
		$data['user'] = $this->db->get_where(
			'user',
			['username ' => $this->session->userdata('username')]
		)->row_array();
		$data['start'] = $this->uri->segment(3);

		// $data['penilaian'] = $this->penilaian_model->TampilGuruNilai();



		$data['penilaian'] = $this->penilaian_model->getAllPenilaian();



		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penilaian/index', $data);
		$this->load->view('templates/footer');
	}
	public function guru()
	{

		$data['tittle'] = 'Penilaian Kinerja';
		$data['user'] = $this->db->get_where(
			'user',
			['username ' => $this->session->userdata('username')]
		)->row_array();
		$data['start'] = $this->uri->segment(3);

		// $data['penilaian'] = $this->penilaian_model->TampilGuruNilai();



		$data['penilaian'] = $this->penilaian_model->getAllPenilaian();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penilaian/guru', $data);
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['tittle'] = 'Form Tambah Data Kinerja';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('posisi', 'posisi', 'required');
		$this->form_validation->set_rules('nomor', 'nomor', 'required');

		// $this->form_validation->set_rules('p1', 'p1', 'required|numeric');
		// $this->form_validation->set_rules('p2', 'p2', 'required|numeric');
		// $this->form_validation->set_rules('p3', 'p3', 'required|numeric');
		// $this->form_validation->set_rules('p4', 'p4', 'required|numeric');
		// $this->form_validation->set_rules('p5', 'p5', 'required|numeric');
		// $this->form_validation->set_rules('k1', 'k1', 'required|numeric');
		// $this->form_validation->set_rules('k2', 'k2', 'required|numeric');
		// $this->form_validation->set_rules('k3', 'k3', 'required|numeric');
		// $this->form_validation->set_rules('k4', 'k4', 'required|numeric');
		// $this->form_validation->set_rules('s1', 's1', 'required|numeric');
		// $this->form_validation->set_rules('s2', 's2', 'required|numeric');
		// $this->form_validation->set_rules('s3', 's3', 'required|numeric');
		// $this->form_validation->set_rules('s4', 's4', 'required|numeric');
		// $this->form_validation->set_rules('s5', 's5', 'required|numeric');
		// $this->form_validation->set_rules('pr1', 'pr1', 'required|numeric');
		// $this->form_validation->set_rules('pr2', 'pr2', 'required|numeric');
		// $this->form_validation->set_rules('pr3', 'pr3', 'required|numeric');
		// $this->form_validation->set_rules('pr4', 'pr4', 'required|numeric');
		// $this->form_validation->set_rules('pr5', 'pr5', 'required|numeric');








		if ($this->form_validation->run() == FALSE) {
			//data salah
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_Array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar1', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Penilaian/tambah');
			$this->load->view('templates/footer');
		} else { //data benar
			$this->penilaian_model->tambahDataPenilaian();

			$this->session->set_flashdata('flash', 'Ditambahkan'); // tampilkan di index

			redirect('penilaian');
		}


		//untuk validasi form agar sesuai aturan inputan

	}


	public function hapus($id)
	{
		$this->penilaian_model->hapusDataPenilaian($id);

		$this->session->set_flashdata('flash', 'dihapus');

		redirect('penilaian');
	}


	public function ubah($id)
	{
		$data['tittle'] = 'Form Ubah Data Penilaian Guru';

		$data['penilaian'] = $this->penilaian_model->getPenilaianByid($id);
		$data['penilaian_detail'] = $this->penilaian_model->getDetail($id);



		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nip', 'nip', 'required');


		if ($this->form_validation->run() == FALSE) {
			//data salah
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_Array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('penilaian/ubah', $data);
			$this->load->view('templates/footer');
		} else { //data benar

			$this->penilaian_model->ubahDataPenilaian();

			$this->session->set_flashdata('flash', 'Diubah'); // tampilkan di index

			redirect('penilaian');
		}
	}



	public function cetak($id)
	{
		$data['nilai'] = $this->db->get_where('subkriteria', ['id' => $id])->row();
		// mengambil data pada baris
		$this->load->view('penilaian/cetak', $data);
	}
}
