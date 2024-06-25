<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Auth');
        }
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses harus private ditandai_
            $this->_login();
        }
    }

    private function _login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //usernya ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek pw
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 2) {
                        redirect('kepsek');
                    } else
                        redirect('Staff');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username ini belum aktif</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">username tidak ada</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        //membersihkan session dan mengembalikan ke login

        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda berhasil keluar!</div>');
        redirect('auth');
    }



    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'username',
            'username',
            'required|trim|is_unique[user.username]',
            ['is_unique' => 'username ini sudah terdaftar!']
        );
        $this->form_validation->set_rules(
            'password1',
            'Password1',
            'trim|required|min_length[6]|matches[password2]',
            [
                'matches' => 'password tidak sama!',
                'min_length' => 'password terlalu pendek!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password1]');



        if ($this->form_validation->run() == false) {

            $data['tittle'] = 'Buat Akun';
            $data['user'] = $this->db->get_where(
                'user',
                ['username' => $this->session->userdata('username')]
            )->row_array();

            $data['menu'] = $this->db->get('user_menu')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar1', $data);
            $this->load->view('templates/topbar', $data);


            $this->load->view('Home/registration', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
    role = "alert"> Akun Berhasil Dibuat. Silahkan gunakan!</div>');


            redirect('Auth/registration');
        }
    }
}