<?php


class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['penilaian_model', 'Guru_model']);
		$this->load->helper(array('url', 'download'));
	}

	public function index()
	{
		$data['tittle'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_Array();
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_Array();




		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}
}