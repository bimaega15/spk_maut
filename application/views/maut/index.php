<div class="container">

	<div class="card ">

		<div class="card">
			<div class="container">


				<?php if ($this->session->flashdata('flash')) : ?>
					<div class="row mt-3">
						<div class="col-md-10">

							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Data Pegawai<strong> Berhasil </strong> <?php echo $this->session->flashdata('flash'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

						</div>
					</div>
				<?php endif; ?>

				<h3 style="color: black;">Rincian Perhitungan menggunakan Metode MAUT</h3>
				<br>

				<div class="col-md-6">
					<div class="card ">
						<div class="table-responsive ">
							<table class="table" id="employee_table">
								<thead class="thead-dark">
									<tr>

										<th>Kode</th>
										<th>Kriteria</th>
										<th>Bobot</th>

									</tr>
								</thead>

								<tbody id="myTable" style="color: black;">
									<tr>
										<?php if (!empty($kriteria)) {
											foreach ($kriteria as $k) { ?>
												<td>KR1</td>
												<td>PEMBERKASAN DAN PROFESIONALITAS</td>
												<td><?php echo $k['kr1']; ?></td>
									<tr>
										<td>KR2</td>
										<td>KEPRIBADIAN</td>
										<td> <?php echo $k['kr2']; ?></td>
									</tr>
									<tr>
										<td>KR3</td>
										<td>SOSIAL</td>
										<td> <?php echo $k['kr3']; ?></td>
									</tr>
									<tr>
										<td>KR4</td>
										<td>REKOMENDASI</td>
										<td> <?php echo $k['kr4']; ?></td>
									</tr>




							<?php }
										} else {
											// Jika data tidak ada
											echo "<tr>
                                                <td colspan='4'>Data tidak ada</td>
                                            </tr>";
										} ?>



								</tbody>
							</table>
						</div>
					</div>

				</div>


				<!-- MENAMPILKAN KETERANGAN SUB KRITERIA -->


				<hr>
				<div class="col-md-10">
					<div class="card ">
						<h6 style="color: black;">SUB KRITERIA PERMBERKASAN DAN PROFESIONALITAS</h6>
						<div class="table-responsive ">
							<table class="table" id="employee_table">
								<thead class="thead-dark">
									<tr>

										<th>Kode </th>
										<th>Kriteria</th>


									</tr>
								</thead>

								<tbody id="myTable" style="color: black;">
									<tr>

										<td>P1</td>
										<td>Kesesuaian latar pendidikan</td>

									<tr>
										<td>P2</td>
										<td>Pengalaman kerja sesuai dengan posisi yang dipilih
										</td>

									</tr>
									<tr>
										<td>P3</td>
										<td>Merupakan alumni, pernah magang, atau pernah bergabung <br> di SMK Farmasi
											Ikasari Pekanbaru</td>

									</tr>
									<tr>
										<td>P4</td>
										<td>Nilai ijazah sesuai dengan syarat (IPK >3.00)</td>

									</tr>
									<tr>
										<td>P5</td>
										<td> Berkas lamaran sesuai dan lengkap</td>

									</tr>
									<tr>
										<td>P6</td>
										<td>Penggunaan metode kerja saat micro teaching sesuai</td>

									</tr>
									<tr>
										<td>P7</td>
										<td>Efektifitas kerja yang baik</td>

									</tr>
									<tr>
										<td>P8</td>
										<td>Penguasaan materi dan tugas yang baik</td>

									</tr>
									<tr>
										<td>P9</td>
										<td>Wawasan yang luas saat wawancara dan saat micro teaching</td>

									</tr>
									<tr>
										<td>P10</td>
										<td>Tidak memiliki cacatan buruk di tempat kerja terdahulu</td>

									</tr>

								</tbody>
							</table>
						</div>
					</div>

				</div>
				<hr>
				<hr>
				<div class="col-md-10">
					<div class="card ">
						<h6 style="color: black;">SUB KRITERIA KEPRIBADIAN</h6>
						<div class="table-responsive ">
							<table class="table" id="employee_table">
								<thead class="thead-dark">
									<tr>

										<th>Kode </th>
										<th>Kriteria</th>


									</tr>
								</thead>

								<tbody id="myTable" style="color: black;">
									<tr>

										<td>K1</td>
										<td>Interaksi dengan pewawancara baik dan sopan</td>

									<tr>
										<td>K2</td>
										<td>Menggunakan bahasa yang efektif dan terarah
										</td>

									</tr>
									<tr>
										<td>K3</td>
										<td>Sikap dan pola pikir yang baik sesuai dengan <br> visi dan misi SMK Farmasi
											Ikasari Pekanbaru</td>

									</tr>
									<tr>
										<td>K4</td>
										<td>Berpenampilan Menarik</td>

									</tr>


								</tbody>
							</table>
						</div>
					</div>

				</div>

				<hr>
				<div class="col-md-10">
					<div class="card ">
						<h6 style="color: black;">SUB KRITERIA SOSIAL</h6>
						<div class="table-responsive ">
							<table class="table" id="employee_table">
								<thead class="thead-dark">
									<tr>

										<th>Kode </th>
										<th>Kriteria</th>


									</tr>
								</thead>

								<tbody id="myTable" style="color: black;">
									<tr>

										<td>S1</td>
										<td>Bersikap ramah saat wawancara dan micro teaching</td>

									<tr>
										<td>S2</td>
										<td>Memiliki pengalaman organisasi yang luas
										</td>

									</tr>
									<tr>


								</tbody>
							</table>
						</div>
					</div>

				</div>


				<hr>
				<div class="col-md-10">
					<div class="card ">
						<h6 style="color: black;">SUB KRITERIA REKOMENDASI</h6>
						<div class="table-responsive ">
							<table class="table" id="employee_table">
								<thead class="thead-dark">
									<tr>

										<th>Kode</th>
										<th>Kriteria</th>


									</tr>
								</thead>

								<tbody id="myTable" style="color: black;">
									<tr>

										<td>R1</td>
										<td>Rekomendasi dari pegawai dan guru SMK Farmasi Ikasari Pekanbaru </td>

									<tr>
										<td>R2</td>
										<td>Rekomendasi dari Kepala Sekolah
										</td>

									</tr>
									<tr>
										<td>R3</td>
										<td>Rekomendasi dari Yayasan</td>

									</tr>
									<tr>


								</tbody>
							</table>
						</div>
					</div>

				</div>
				<hr>


				<!-- MENAMPILKAN TABEL SUBKRITERIA untuk matriks ternormalisasi-->

				<div class="row mt-3 ">
					<div class="col-md-12">
						<h6 style="color: black;">PEMBUATAN MATRIKS TERNORMALISASI</h6>


						<div class="card ">
							<div class="table-responsive ">
								<table class="table" class="table-warning" id="employee_table">
									<thead class="table-warning" style="color: black;">
										<tr>

											<th>Nama</th>

											<th>P1</th>
											<th>P2</th>
											<th>P3</th>
											<th>P4</th>
											<th>P5</th>
											<th>P6</th>
											<th>P7</th>
											<th>P8</th>
											<th>P9</th>
											<th>P10</th>
											<th>K1</th>
											<th>K2</th>
											<th>K3</th>
											<th>K4</th>
											<th>S1</th>
											<th>S2</th>
											<th>R1</th>
											<th>R2</th>
											<th>R3</th>

										</tr>
									</thead>

									<tbody id="myTable" style="color: black;">
										<tr>
											<?php
											foreach ($penilaian as $j) : ?>
												<td><?php echo $j['nama']; ?></td>
												<td><?php echo $j['p1']; ?></td>
												<td><?php echo $j['p2']; ?></td>
												<td><?php echo $j['p3']; ?></td>
												<td><?php echo $j['p4']; ?></td>
												<td><?php echo $j['p5']; ?></td>
												<td><?php echo $j['p6']; ?></td>
												<td><?php echo $j['p7']; ?></td>
												<td><?php echo $j['p8']; ?></td>
												<td><?php echo $j['p9']; ?></td>
												<td><?php echo $j['p10']; ?></td>
												<td><?php echo $j['k1']; ?></td>
												<td><?php echo $j['k2']; ?></td>
												<td><?php echo $j['k3']; ?></td>
												<td><?php echo $j['k4']; ?></td>
												<td><?php echo $j['s1']; ?></td>
												<td><?php echo $j['s2']; ?></td>

												<td><?php echo $j['pr1']; ?></td>
												<td><?php echo $j['pr2']; ?></td>
												<td><?php echo $j['pr3']; ?></td>

										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>


							<?php

							//logika perhitungan jumlah untuk setiap subkriteria

							foreach ($penilaian as $key => $j) {
								$kriteria[$key]['id'] = $j['id'];
								$kriteria[$key]['nama'] = $j['nama'];
								$kriteria[$key]['C1'] = $j['p1'] + $j['p2'] + $j['p3'] + $j['p4'] + $j['p5'] + $j['p6'] + $j['p7'] + $j['p8'] + $j['p9'] + $j['p10'];
								$kriteria[$key]['C2'] = $j['k1'] + $j['k2'] + $j['k3'] + $j['k4'];
								$kriteria[$key]['C3'] = $j['s1'] + $j['s2'];
								$kriteria[$key]['C4'] = $j['pr1'] + $j['pr2'] + $j['pr3'];
							};

							// membuat array min & max
							$arr_min_max = [];
							foreach ($kriteria as $key => $v_kriteria) {
								$arr_min_max['C1'][$v_kriteria['C1']] = $v_kriteria['C1'];
								$arr_min_max['C2'][$v_kriteria['C2']] = $v_kriteria['C2'];
								$arr_min_max['C3'][$v_kriteria['C3']] = $v_kriteria['C3'];
								$arr_min_max['C4'][$v_kriteria['C4']] = $v_kriteria['C4'];
							}
							?>

							<Hr>
							<!-- MENAMPILKAN hasil penjumlahan tiap subkriteria-->

							<div class="row mt-3 ">
								<div class="col-md-12">
									<h6 style="color: black;">HASIL PERHITUNGAN</h6>
									<div class="card ">
										<div class="table-responsive ">
											<table class="table" class="table-warning" id="employee_table">
												<thead class="table-warning" style="color: blue;">
													<tr>
														<th>Nama</th>
														<th>C1</th>
														<th>C2</th>
														<th>C3</th>
														<th>C4</th>

													</tr>
												</thead>

												<tbody id="myTable" style="color: black;">
													<?php
													foreach ($kriteria as $C) : ?>
														<tr>
															<td><?php echo $C['nama']; ?></td>
															<td><?php echo $C['C1']; ?></td>
															<td><?php echo $C['C2']; ?></td>
															<td><?php echo $C['C3']; ?></td>
															<td><?php echo $C['C4']; ?></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>


										</div>
										<hr>

										<!-- MENENTUKAN NILAI MAX DAN MIN-->

										<?php
										//LOGIKA MAX dan MIN
										?>






										<div class="row mt-3 ">
											<div class="col-md-12">
												<h6 style="color: black;">NILAI MAX TIAP KRITERIA </h6>
												<div class="card ">
													<div class="table-responsive ">
														<table class="table" class="table-error" id="employee_table">
															<thead class="table-warning" style="color: blue;">
																<tr>
																	<th>Min/Max</th>
																	<th>C1</th>
																	<th>C2</th>
																	<th>C3</th>
																	<th>C4</th>

																</tr>
															</thead>
															<?php
															$min_max_c1 = ($arr_min_max['C1']);
															$min_max_c2 = ($arr_min_max['C2']);
															$min_max_c3 = ($arr_min_max['C3']);
															$min_max_c4 = ($arr_min_max['C4']);
															?>
															<tbody id="myTable" style="color: black;">
																<tr>
																	<td>MIN</td>
																	<td><?= min($min_max_c1) ?></td>
																	<td><?= min($min_max_c2) ?></td>
																	<td><?= min($min_max_c3) ?></td>
																	<td><?= min($min_max_c4) ?></td>
																</tr>
																<tr>
																	<td>MAX</td>
																	<td><?= max($min_max_c1) ?></td>
																	<td><?= max($min_max_c2) ?></td>
																	<td><?= max($min_max_c3) ?></td>
																	<td><?= max($min_max_c4) ?></td>
																</tr>
															</tbody>

														</table>



													</div>
													<hr>
												</div>
											</div>
										</div>

										<div class="row mt-3 ">
											<div class="col-md-12">
												<h6 style="color: black;">NORMALISASI MATRIKS KEPUTUSAN </h6>
												<div class="card ">
													<div class="table-responsive ">
														<table class="table" class="table-error" id="employee_table">
															<thead class="table-warning" style="color: blue;">
																<tr>
																	<th>Alternatif</th>
																	<th>C1</th>
																	<th>C2</th>
																	<th>C3</th>
																	<th>C4</th>

																</tr>
															</thead>
															<!-- <?php
																	$CK = $kriteria[0];
																	?> -->
															<tbody id="myTable" style="color: black;">
																<?php
																$arr_preferensi = [];
																foreach ($kriteria as $C) :

																	// perhitungan normalisasi matriks
																	$normalisasi_c1 = ($C['C1'] - min($min_max_c1)) / (max($min_max_c1) - min($min_max_c1));
																	$normalisasi_c2 = ($C['C2'] - min($min_max_c2)) / (max($min_max_c2) - min($min_max_c2));
																	$normalisasi_c3 = ($C['C3'] - min($min_max_c3)) / (max($min_max_c3) - min($min_max_c3));
																	$normalisasi_c4 = ($C['C4'] - min($min_max_c4)) / (max($min_max_c4) - min($min_max_c4));
																?>
																	<tr>
																		<td><?php echo $C['nama']; ?></td>
																		<td><?php echo round($normalisasi_c1, 3); ?></td>
																		<td><?php echo round($normalisasi_c2, 3); ?></td>
																		<td><?php echo round($normalisasi_c3, 3); ?></td>
																		<td><?php echo round($normalisasi_c4, 3); ?></td>
																	</tr>

																	<!-- Menghitung nilai preferensi -->
																<?php
																	$hitung_preferensi = ($CK['kr1'] * $normalisasi_c1) + ($CK['kr2'] * $normalisasi_c2) + ($CK['kr3'] * $normalisasi_c3) + ($CK['kr4'] * $normalisasi_c4);
																	$data = array(
																		'nilai_preferensi' => $hitung_preferensi
																	);
																	$this->db->where('id', $C['id']);
																	$this->db->update('subkriteria', $data);

																	$arr_preferensi[$C['id']] = [
																		'nilai_preferensi' => $hitung_preferensi,
																		'nama' => $C['nama']
																	];
																	$data_preferensi = $arr_preferensi;
																endforeach;
																?>
															</tbody>
														</table>
													</div>
													<hr>
												</div>
											</div>
										</div>
										<?php
										// Mengurutkan peringkat rekomendasi
										ksort($arr_preferensi);
										$dataPeringkat = [];
										$rank = 1;
										foreach ($arr_preferensi as $id_1 => $v_preferensi) {
											foreach ($data_preferensi as $id_2 => $rdata_preferensi) {
												if ($v_preferensi['nilai_preferensi'] == $rdata_preferensi['nilai_preferensi']) {
													$dataPeringkat[] = [
														'id' => $id_2,
														'nama' => $rdata_preferensi['nama'],
														'nilai_preferensi' => $rdata_preferensi['nilai_preferensi'],
														'rank' => $rank++
													];
												}
											}
										}
										?>

										<div class="row mt-3 ">
											<div class="col-md-12">
												<h6 style="color: black;">HASIL NILAI PREFERENSI </h6>
												<div class="card ">
													<div class="table-responsive ">
														<table class="table" class="table-error" id="employee_table">
															<thead class="table-warning" style="color: blue;">
																<tr>
																	<th>No</th>
																	<th>Alternatif</th>
																	<th>Preferensi</th>
																</tr>
															</thead>
															<tbody id="myTable" style="color: black;">
																<?php
																$no = 1;
																foreach ($dataPeringkat as $id => $r_peringkat) {
																?>
																	<tr>
																		<td><?= $r_peringkat['rank'] ?></td>
																		<td><?= $r_peringkat['nama']; ?></td>
																		<td><?= $r_peringkat['nilai_preferensi']; ?></td>

																	</tr>
																<?php
																}
																?>
															</tbody>
														</table>



													</div>
													<hr>
												</div>
											</div>
										</div>

										<br>
									</div>

								</div>