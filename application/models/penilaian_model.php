<?php

class penilaian_model extends CI_model
{



	public function getAllPenilaian()
	{
		//panggil db dengan query builder class / selecting data/
		// $query = $this->db->get('dinsos');
		//return $query->result_array(); // untuk result keluarin db nya

		return $this->db->get('subkriteria')->result_array();
	}

	public function getPenilaianByid($id)
	{
		//lihat di user_guide/query builder/selecting data/getwhere

		return $this->db->get_where('subkriteria', ['id' => $id])->row_array();
	}
	public function getDetail($id)
	{
		//lihat di user_guide/query builder/selecting data/getwhere

		return $this->db->get_where('penilaian_subkriteria', ['subkriteria_id' => $id])->row_array();
	}
	public function TampilGuruNilai()
	{
		// join tabel guru dan penilaian


		$this->db->select('nama', 'nip', 'mapel', 'kelas');
		$this->db->from('guru');
		$this->db->join('subkriteria', 'subkriteria.guru_id = guru.guru_id');
		$query = $this->db->get();
		return $query->result();
	}



	public function tambahDataPenilaian()
	{
		// function safeCount($array)
		// {
		// 	if (!is_array($array)) return 0;
		// 	return count($array) > 0 ? count($array) : 0;
		// }
		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"posisi" => $this->input->post('posisi', true),
			"nomor" => $this->input->post('nomor', true),
			"p1" => $this->input->post('p1', true),
			"p2" => $this->input->post('p2', true),
			"p3" => $this->input->post('p3', true),
			"p4" => $this->input->post('p4', true),
			"p5" => $this->input->post('p5', true),
			"p6" => $this->input->post('p6', true),
			"p7" => $this->input->post('p7', true),
			"p8" => $this->input->post('p8', true),
			"p9" => $this->input->post('p9', true),
			"p10" => $this->input->post('p10', true),

			"k1" => $this->input->post('k1'),
			"k2" => $this->input->post('k2'),
			"k3" => $this->input->post('k3'),
			"k4" => $this->input->post('k4'),

			"s1" => $this->input->post('s1'),
			"s2" => $this->input->post('s2'),

			"pr1" => $this->input->post('pr1'),
			"pr2" => $this->input->post('pr2'),
			"pr3" => $this->input->post('pr3'),
		];
		$this->db->insert('subkriteria', $data);
		$id_subkriteria = $this->db->insert_id();
		// $id_subkriteria = 1;
		// $penilaianSubkriteria = [];
		// $indexP1 =  $this->input->post('p1', true);
		// $dP1 = [];
		// foreach ($indexP1 as $key => $vP1) {
		// 	$dP1[] = $key;
		// }
		// $indexP2 =  $this->input->post('p2', true);
		// $dP2 = [];
		// foreach ($indexP2 as $key => $vP2) {
		// 	$dP2[] = $key;
		// }
		// $indexP3 =  $this->input->post('p3', true);
		// $dP3 = [];
		// foreach ($indexP3 as $key => $vP3) {
		// 	$dP3[] = $key;
		// }
		// $indexP4 =  $this->input->post('p4', true);
		// $dP4 = [];
		// foreach ($indexP4 as $key => $vP4) {
		// 	$dP4[] = $key;
		// }
		// $indexP5 =  $this->input->post('p5', true);
		// $dP5 = [];
		// foreach ($indexP5 as $key => $vP5) {
		// 	$dP5[] = $key;
		// }
		// $indexP6 =  $this->input->post('p6', true);
		// $dP6 = [];
		// foreach ($indexP6 as $key => $vP6) {
		// 	$dP6[] = $key;
		// }
		// $indexP7 =  $this->input->post('p7', true);
		// $dP7 = [];
		// foreach ($indexP7 as $key => $vP7) {
		// 	$dP7[] = $key;
		// }
		// $indexP8 =  $this->input->post('p8', true);
		// $dP8 = [];
		// foreach ($indexP8 as $key => $vP8) {
		// 	$dP8[] = $key;
		// }
		// $indexP9 =  $this->input->post('p9', true);
		// $dP9 = [];
		// foreach ($indexP9 as $key => $vP9) {
		// 	$dP9[] = $key;
		// }
		// $indexP10 =  $this->input->post('p10', true);
		// $dP10 = [];
		// foreach ($indexP10 as $key => $vP10) {
		// 	$dP10[] = $key;
		// }

		// $indexK1 =  $this->input->post('k1', true);
		// $dK1 = [];
		// foreach ($indexK1 as $key => $vK1) {
		// 	$dK1[] = $key;
		// }
		// $indexK2 =  $this->input->post('k2', true);
		// $dK2 = [];

		// foreach ($indexK2 as $key => $vK2) {
		// 	$dK2[] = $key;
		// }
		// $indexK3 =  $this->input->post('k3', true);
		// $dK3 = [];
		// foreach ($indexK3 as $key => $vK3) {
		// 	$dK3[] = $key;
		// }
		// $indexK4 =  $this->input->post('k4', true);
		// $dK4 = [];
		// foreach ($indexK4 as $key => $vK4) {
		// 	$dK4[] = $key;
		// }

		// $indexS1 =  $this->input->post('s1', true);
		// $dS1 = [];
		// foreach ($indexS1 as $key => $vS1) {
		// 	$dS1[] = $key;
		// }
		// $indexS2 =  $this->input->post('s2', true);
		// $dS2 = [];
		// foreach ($indexS2 as $key => $vS2) {
		// 	$dS2[] = $key;
		// }

		// $indexPr1 =  $this->input->post('pr1', true);
		// $dPr1 = [];
		// foreach ($indexPr1 as $key => $vPr1) {
		// 	$dPr1[] = $key;
		// }
		// $indexPr2 =  $this->input->post('pr2', true);
		// $dPr2 = [];
		// foreach ($indexPr2 as $key => $vPr2) {
		// 	$dPr2[] = $key;
		// }
		// $indexPr3 =  $this->input->post('pr3', true);
		// $dPr3 = [];
		// foreach ($indexPr3 as $key => $vPr3) {
		// 	$dPr3[] = $key;
		// }

		function safeImplodeKeys($array)
		{
			if (!is_array($array)) return '';
			return implode(',', array_keys($array));
		}

		$penilaianSubkriteria = [
			"p1" => $this->input->post('p1', true),
			"p2" => $this->input->post('p2', true),
			"p3" => $this->input->post('p3', true),
			"p4" => $this->input->post('p4', true),
			"p5" => $this->input->post('p5', true),
			"p6" => $this->input->post('p6', true),
			"p7" => $this->input->post('p7', true),
			"p8" => $this->input->post('p8', true),
			"p9" => $this->input->post('p9', true),
			"p10" => $this->input->post('p10', true),

			"k1" => $this->input->post('k1'),
			"k2" => $this->input->post('k2'),
			"k3" => $this->input->post('k3'),
			"k4" => $this->input->post('k4'),

			"s1" => $this->input->post('s1'),
			"s2" => $this->input->post('s2'),

			"pr1" => $this->input->post('pr1'),
			"pr2" => $this->input->post('pr2'),
			"pr3" => $this->input->post('pr3'),
			'subkriteria_id' => $id_subkriteria
		];
		$this->db->insert('penilaian_subkriteria', $penilaianSubkriteria);
	}



	public function hapusDataPenilaian($id)
	{

		$this->db->delete('subkriteria', ['id' => $id]);
	}

	public function ubahDataPenilaian()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nip" => $this->input->post('nip', true),
			"posisi" => $this->input->post('posisi', true),
			"nomor" => $this->input->post('nomor', true),

			"p1" => count($this->input->post('p1', true)),
			"p2" => count($this->input->post('p2', true)),
			"p3" => count($this->input->post('p3', true)),
			"p4" => count($this->input->post('p4', true)),
			"p5" => count($this->input->post('p5', true)),
			"p6" => count($this->input->post('p6', true)),
			"p7" => count($this->input->post('p7', true)),
			"p8" => count($this->input->post('p8', true)),
			"p9" => count($this->input->post('p9', true)),
			"p10" => count($this->input->post('p10', true)),

			"k1" => count($this->input->post('k1')),
			"k2" => count($this->input->post('k2')),
			"k3" => count($this->input->post('k3')),
			"k4" => count($this->input->post('k4')),

			"s1" => count($this->input->post('s1')),
			"s2" => count($this->input->post('s2')),

			"pr1" => count($this->input->post('pr1')),
			"pr2" => count($this->input->post('pr2')),
			"pr3" => count($this->input->post('pr3')),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('subkriteria', $data);

		$id = $this->input->post('id');
		$this->db->delete('penilaian_subkriteria', [
			'subkriteria_id' => $id
		]);

		$penilaianSubkriteria = [];
		$indexP1 =  $this->input->post('p1', true);
		$dP1 = [];
		foreach ($indexP1 as $key => $vP1) {
			$dP1[] = $key;
		}
		$indexP2 =  $this->input->post('p2', true);
		$dP2 = [];
		foreach ($indexP2 as $key => $vP2) {
			$dP2[] = $key;
		}
		$indexP3 =  $this->input->post('p3', true);
		$dP3 = [];
		foreach ($indexP3 as $key => $vP3) {
			$dP3[] = $key;
		}
		$indexP4 =  $this->input->post('p4', true);
		$dP4 = [];
		foreach ($indexP4 as $key => $vP4) {
			$dP4[] = $key;
		}
		$indexP5 =  $this->input->post('p5', true);
		$dP5 = [];
		foreach ($indexP5 as $key => $vP5) {
			$dP5[] = $key;
		}
		$indexP6 =  $this->input->post('p6', true);
		$dP6 = [];
		foreach ($indexP6 as $key => $vP6) {
			$dP6[] = $key;
		}
		$indexP7 =  $this->input->post('p7', true);
		$dP7 = [];
		foreach ($indexP7 as $key => $vP7) {
			$dP7[] = $key;
		}
		$indexP8 =  $this->input->post('p8', true);
		$dP8 = [];
		foreach ($indexP8 as $key => $vP8) {
			$dP8[] = $key;
		}
		$indexP9 =  $this->input->post('p9', true);
		$dP9 = [];
		foreach ($indexP9 as $key => $vP9) {
			$dP9[] = $key;
		}
		$indexP10 =  $this->input->post('p10', true);
		$dP10 = [];
		foreach ($indexP10 as $key => $vP10) {
			$dP10[] = $key;
		}

		$indexK1 =  $this->input->post('k1', true);
		$dK1 = [];
		foreach ($indexK1 as $key => $vK1) {
			$dK1[] = $key;
		}
		$indexK2 =  $this->input->post('k2', true);
		$dK2 = [];
		foreach ($indexK2 as $key => $vK2) {
			$dK2[] = $key;
		}
		$indexK3 =  $this->input->post('k3', true);
		$dK3 = [];
		foreach ($indexK3 as $key => $vK3) {
			$dK3[] = $key;
		}
		$indexK4 =  $this->input->post('k4', true);
		$dK4 = [];
		foreach ($indexK4 as $key => $vK4) {
			$dK4[] = $key;
		}

		$indexS1 =  $this->input->post('s1', true);
		$dS1 = [];
		foreach ($indexS1 as $key => $vS1) {
			$dS1[] = $key;
		}
		$indexS2 =  $this->input->post('s2', true);
		$dS2 = [];
		foreach ($indexS2 as $key => $vS2) {
			$dS2[] = $key;
		}

		$indexPr1 =  $this->input->post('pr1', true);
		$dPr1 = [];
		foreach ($indexPr1 as $key => $vPr1) {
			$dPr1[] = $key;
		}
		$indexPr2 =  $this->input->post('pr2', true);
		$dPr2 = [];
		foreach ($indexPr2 as $key => $vPr2) {
			$dPr2[] = $key;
		}
		$indexPr3 =  $this->input->post('pr3', true);
		$dPr3 = [];
		foreach ($indexPr3 as $key => $vPr3) {
			$dPr3[] = $key;
		}

		$penilaianSubkriteria = [
			"p1" => implode(',', $dP1),
			"p2" => implode(',', $dP2),
			"p3" => implode(',',  $dP3),
			"p4" => implode(',', $dP4),
			"p5" => implode(',',  $dP5),
			"p6" => implode(',',  $dP6),
			"p7" => implode(',',  $dP7),
			"p8" => implode(',',  $dP8),
			"p9" => implode(',', $dP9),
			"p10" => implode(',',  $dP10),

			"k1" => implode(',',  $dK1),
			"k2" => implode(',', $dK2),
			"k3" => implode(',', $dK3),
			"k4" => implode(',', $dK4),

			"s1" => implode(',', $dS1),
			"s2" => implode(',', $dS2),

			"pr1" => implode(',', $dPr1),
			"pr2" => implode(',', $dPr2),
			"pr3" => implode(',', $dPr3),
			'subkriteria_id' => $id
		];
		$this->db->insert('penilaian_subkriteria', $penilaianSubkriteria);
	}

	public function getDesc()
	{
		$this->db->order_by('nilai_preferensi', 'desc');
		return $this->db->get('subkriteria')->result();
	}

	public function jointabel()
	{

		//penilaian adalah mahasiswa
		$this->db->Select('penilaian.* , guru.*');
		$this->db->from('penilaian');
		$this->db->join('guru', 'guru.id_guru = penilaian.id_guru');
		$query = $this->db->get();
		return $query->result();
	}
}
