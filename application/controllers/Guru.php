<?php


class Guru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->helper(array('url', 'download'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tittle'] = 'Data Guru';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_Array();

        //load library paginationnya
        $this->load->library('pagination');

        //ambil data keyword
        if ($this->input->post('submit')) {

            $data['keyword'] =  $this->input->post('keyword');
        } else {

            $data['keyword'] = null;
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->from('guru');
        $config['total_rows'] = $this->db->count_all_results();

        $config['per_page'] = 5;
        $config['num_links'] = 3;



        //inisialisasi
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['guru'] = $this->Guru_model->getAllGuru($config['per_page'], $data['start'], $data['keyword']); // jadi inti dari pagination tu main dengan limitnya



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['tittle'] = 'Form Tambah Data Guru';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('mapel', 'mapel', 'required');
        $this->form_validation->set_rules('ki', 'ki', 'required');


        if ($this->form_validation->run() == FALSE) {
            //data salah
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_Array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar1', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Guru/tambah');
            $this->load->view('templates/footer');
        } else { //data benar

            $this->Guru_model->tambahDataGuru();

            $this->session->set_flashdata('flash', 'Ditambahkan'); // tampilkan di index

            redirect('Guru');
        }


        //untuk validasi form agar sesuai aturan inputan

    }

    public function hapus($id)
    {
        $this->Guru_model->hapusDataGuru($id);

        $this->session->set_flashdata('flash', 'dihapus');

        redirect('Guru');
    }
    public function ubah($id)
    {
        $data['tittle'] = 'ubah data guru';


        $data['guru'] = $this->Guru_model->getGuruByid($id);
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('mapel', 'mapel', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('ki', 'ki', 'required');





        if ($this->form_validation->run() == FALSE) {
            //data salah
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_Array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar2', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('guru/ubah', $data);
            $this->load->view('templates/footer');
        } else { //data benar

            $this->Guru_model->ubahDataGuru();

            $this->session->set_flashdata('flash', 'Diubah'); // tampilkan di index

            redirect('guru');
        }
    }

    public function relasi()
    {
        $data['tittle'] = 'relasi';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_Array();


        $data['join'] = $this->Guru_model->jointabel();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/relasi', $data);
        $this->load->view('templates/footer');
    }
}