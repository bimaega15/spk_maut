<?php

class Guru_model extends CI_model
{

	public function getAllGuru()
	{
		//panggil db dengan query builder class / selecting data/
		// $query = $this->db->get('dinsos');
		//return $query->result_array(); // untuk result keluarin db nya

		return $this->db->get('guru')->result_array();
	}
	function getAllPenilaianGuru()
	{
		$this->db->order_by('nama', 'nip', 'id_guru');
		return $this->db->from('guru')->join('penilaian', 'guru.nip=penilaian.nip')->get()->result();
	}


	public function getGuru($limit, $start, $keyword = null)
	{
		return $this->db->get('Guru', $limit, $start)->result_array();

		if ($keyword) {
			$this->db->like('nama', $keyword);
		}
	}

	public function countAllGuru()
	{
		return $this->db->get('guru')->num_rows();
	}

	public function tambahDataGuru()
	{

		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"posisi" => $this->input->post('posisi', true),
			"nomor" => $this->input->post('nomor', true)


		];

		$this->db->insert('guru', $data);
	}
	public function hapusDataGuru($id)
	{

		$this->db->where('id_guru', $id);
		$this->db->delete('guru');

		// atau  $this->db->delete('pegawai',['id'=>id]);

	}
	public function getGuruByid($id)
	{
		//lihat di user_guide/query builder/selecting data/getwhere

		return $this->db->get_where('guru', ['id_guru' => $id])->row_array();
	}

	public function ubahDataGuru()
	{
		$data = [

			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"posisi" => $this->input->post('posisi', true),
			"nomor" => $this->input->post('nomor', true)

		];

		$this->db->where('id_guru', $this->input->post('id'));
		$this->db->update('guru', $data);
	}

	public function jointabel()
	{

		//  $this->db->select('nama, kelas, mapel, ki');
		//  $this->db->from('guru');
		// $this->db->join('penilaian', 'penilaian.id_guru = guru.id_guru');
		//$query = $this->db->get();
		//return $query;

		//penilaian adalah mahasiswa
		$this->db->Select('penilaian.* , guru.*');
		$this->db->from('penilaian');
		$this->db->join('guru', 'guru.id_guru = penilaian.id_guru');
		$query = $this->db->get();
		return $query->result();
	}
}
