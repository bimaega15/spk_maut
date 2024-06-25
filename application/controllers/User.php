<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }
    public function index()
    {
        $data['tittle'] = 'Pengguna';
        $data['user'] = $this->db->get_where(
            'user',
            ['username' => $this->session->userdata('username')]
        )->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['pengguna'] = $this->user_model->getAllUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/pengguna', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $this->user_model->hapusDataUser($id);

        $this->session->set_flashdata('flash', 'dihapus');

        redirect('user');
    }

    public function ubah($id)
    {
        $data['tittle'] = 'Form Ubah Data Penilaian Guru';

        $data['pengguna'] = $this->user_model->getPenggunaByid($id);



        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');


        if ($this->form_validation->run() == FALSE) {
            //data salah
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_Array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar1', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/ubah', $data);
            $this->load->view('templates/footer');
        } else { //data benar

            $this->user_model->ubahDataPengguna();

            $this->session->set_flashdata('flash', 'Diubah'); // tampilkan di index

            redirect('user');
        }
    }
}