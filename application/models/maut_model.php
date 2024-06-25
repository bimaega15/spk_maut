<?php

class maut_model extends CI_model
{


	public function getAllMaut()
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
}
