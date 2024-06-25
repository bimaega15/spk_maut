<?php

class kriteria_model extends CI_model
{


    public function getAllKriteria()
    {
        //panggil db dengan query builder class / selecting data/
        // $query = $this->db->get('dinsos');
        //return $query->result_array(); // untuk result keluarin db nya

        return $this->db->get('kriteria')->result_array();
    }

    public function getKriteriaByid($id)
    {
        //lihat di user_guide/query builder/selecting data/getwhere

        return $this->db->get_where('kriteria', ['id' => $id])->row_array();
    }


    public function ubahDataKriteria()
    {
        $data = [

            "kr1" => $this->input->post('kr1'),
            "kr2" => $this->input->post('kr2'),
            "kr3" => $this->input->post('kr3'),
            "kr4" => $this->input->post('kr4'),


        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kriteria', $data);
    }
}