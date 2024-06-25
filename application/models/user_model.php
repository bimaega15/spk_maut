<?php

class user_model extends CI_model
{



    public function getAllUser()
    {
        //panggil db dengan query builder class / selecting data/
        // $query = $this->db->get('dinsos');
        //return $query->result_array(); // untuk result keluarin db nya

        return $this->db->get('user')->result_array();
    }

    public function hapusDataUser($id)
    {

        $this->db->delete('user', ['id' => $id]);
    }

    public function getPenggunaByid($id)
    {
        //lihat di user_guide/query builder/selecting data/getwhere

        return $this->db->get_where('user', ['id' => $id])->row_array();
    }


    public function ubahDataPengguna()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "username" => $this->input->post('username'),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('role_id'),
            'is_active' => 1

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}