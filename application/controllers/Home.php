<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  $this->load->model('guru_model');
        $this->load->library('form_validation');
    }

    public function index($nama = '')
    {
        $data['tittle'] = 'Profil Admin';

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_Array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar1', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }




    public function gantiPassword()
    {
        $data['tittle'] = 'Ganti Password';

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_Array();


        $this->form_validation->set_rules('current_password', 'Password Saat Ini', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[6]|matches[new_password1]');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar1', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/gantipassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Saat Ini Salah!</div>');
                redirect('home/gantiPassword');
            } else {

                //pw baru sama dengan pw lama
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password baru dan saat ini tidak boleh sama!</div>');
                    redirect('home/gantiPassword');
                } else {
                    //pw benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->Set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('home/gantiPassword');
                }
            }
        }
    }
}