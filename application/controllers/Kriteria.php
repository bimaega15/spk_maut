<?php



class Kriteria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('kriteria_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['tittle'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_Array();
        $data['kriteria'] = $this->kriteria_model->getAllKriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kriteria/index', $data);
        $this->load->view('templates/footer');
    }


    public function ubah($id)
    {
        $data['tittle'] = 'ubah kriteria';


        $data['kriteria'] = $this->kriteria_model->getKriteriaByid($id);
        $this->form_validation->set_rules('kr1', 'kr1', 'required|numeric');
        $this->form_validation->set_rules('kr2', 'kr2', 'required|numeric');
        $this->form_validation->set_rules('kr3', 'kr3', 'required|numeric');
        $this->form_validation->set_rules('kr4', 'kr4', 'required|numeric');





        if ($this->form_validation->run() == FALSE) {
            //data salah
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_Array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar1', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kriteria/ubah', $data);
            $this->load->view('templates/footer');
        } else { //data benar

            $this->kriteria_model->ubahDataKriteria();

            $this->session->set_flashdata('flash', 'Diubah'); // tampilkan di index

            redirect('kriteria');
        }
    }
}