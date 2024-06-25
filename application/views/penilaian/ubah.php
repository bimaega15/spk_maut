<div class="container">

	<div class="row-mt-3">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header" style="background-color: darkseagreen; color : black;">
					Form Ubah Data Penilaian Kinerja Guru
				</div>
				<div class="card-body">


					<form action="" method="post" style="color: black; ">
						<input type="hidden" name="id" value="<?php echo $penilaian['id']; ?>">

						<div class="form-group" style="font-family: Times New Roman">
							<label for="nama">Nama Calon Pegawai</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $penilaian['nama']; ?>">
							<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						</div>

						<div class="form-group" style="font-family: Times New Roman">
							<label for="nip">NIP</label>
							<input type="numeric" name="nip" class="form-control" id="nip" value=" <?php echo $penilaian['nip']; ?>">
							<small class="form-text text-danger"><?php echo form_error('nip'); ?></small>
						</div>
						<div class="form-group" style="font-family: Times New Roman">
							<label for="posisi">Posisi Lamaran</label>
							<input type="text" name="posisi" class="form-control" id="posisi" value=" <?php echo $penilaian['posisi']; ?>">
							<small class="form-text text-danger"><?php echo form_error('posisi lamaran'); ?></small>
						</div>
						<div class="form-group" style="font-family: Times New Roman">
							<label for="nomor">Nomor HP</label>
							<input type="numeric" name="nomor" class="form-control" id="nomor" value=" <?php echo $penilaian['nomor']; ?>">
							<small class="form-text text-danger"><?php echo form_error('nomor hp'); ?></small>
						</div>



						<div class="table-responsive ">
							<table class="table" border="2" style="color: black; font-family: Times New Roman"">
                                <thead>
                                    <tr>
                                        <td><strong>
                                                <center>KRITERIA PENILAIAN </center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 1</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 2</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 3</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 4</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 5</center>
                                            </strong></td>

                                    </tr>
                                </thead>
                                <th colspan=" 6">KRITERIA PADAGOGIK</th>

								<tbody>
									<tr>

										<td>Menyampaikan bahan</td>
										<!--menampilkan checkbox -->
										<?php
										if (isset($penilaian_detail['p1'])) {
											$dP1Nol = explode(',', $penilaian_detail['p1']);
											$p1Nol = null;
											if (in_array(0, $dP1Nol)) {
												$p1Nol = 'checked';
											}
											$dP1Satu = explode(',', $penilaian_detail['p1']);
											$p1Satu = null;
											if (in_array(1, $dP1Satu)) {
												$p1Satu = 'checked';
											}
											$dP1Dua = explode(',', $penilaian_detail['p1']);
											$p1Dua = null;
											if (in_array(2, $dP1Dua)) {
												$p1Dua = 'checked';
											}
											$dP1Tiga = explode(',', $penilaian_detail['p1']);
											$p1Tiga = null;
											if (in_array(3, $dP1Tiga)) {
												$p1Tiga = 'checked';
											}
											$dP1Empat = explode(',', $penilaian_detail['p1']);
											$p1Empat = null;
											if (in_array(4, $dP1Empat)) {
												$p1Empat = 'checked';
											}
										}

										?>
										<td> <input type="checkbox" name="p1[0]" alt="Checkbox" value="1" <?= @$p1Nol; ?>>Guru
											menjelaskan
											alasan pelaksanaan kegiatan/aktivitas yang akan dilakukan</td>
										<td><input type="checkbox" name="p1[1]" alt="Checkbox" value="1" <?= @$p1Satu ?>> Guru merancang
											rencana pembelajaran yang sesuai dengan silabus</td>
										<td><input type="checkbox" name="p1[2]" alt="Checkbox" value="1" <?= @$p1Dua ?>>
											Guru memahami
											materi atau bahan yang akan disampaikan</td>
										<td><input type="checkbox" name="p1[3]" alt="Checkbox" value="1" <?= @$p1Tiga ?>> Guru
											menyampaikan materi dengan baik agar mencapai kompetensi dasar</td>
										<td><input type="checkbox" name="p1[4]" alt="Checkbox" value="1" <?= @$p1Empat ?>> Guru memastikan
											tingkat pemahaman peserta didik terhadap materi yang disampaikan</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p2'])) :
										$dp2Nol = explode(',', $penilaian_detail['p2']);
										$p2Nol = null;
										if (in_array(0, $dp2Nol)) {
											$p2Nol = 'checked';
										}
										$dp2Satu = explode(',', $penilaian_detail['p2']);
										$p2Satu = null;
										if (in_array(1, $dp2Satu)) {
											$p2Satu = 'checked';
										}
										$dp2Dua = explode(',', $penilaian_detail['p2']);
										$p2Dua = null;
										if (in_array(2, $dp2Dua)) {
											$p2Dua = 'checked';
										}
										$dp2Tiga = explode(',', $penilaian_detail['p2']);
										$p2Tiga = null;
										if (in_array(3, $dp2Tiga)) {
											$p2Tiga = 'checked';
										}
										$dp2Empat = explode(',', $penilaian_detail['p2']);
										$p2Empat = null;
										if (in_array(4, $dp2Empat)) {
											$p2Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Menggunakan alat bantu atau media pembelajaran </td>
										<td> <input type="checkbox" name="p2[0]" alt="Checkbox" value="1" <?= @$p2Nol; ?>>>Guru
											menggunakan alat bantu
											mengajar, seperti alat peraga </td>
										<td><input type="checkbox" name="p2[1]" alt="Checkbox" value="1" <?= @$p2Satu; ?>>Guru menggunakan
											audiovisual
											termasuk (TIK) untuk mencapai tujuan pembelajaran</td>
										<td><input type="checkbox" name="p2[2]" alt="Checkbox" value="1" <?= @$p2Dua ?>>Guru memilih
											alat bantu yang sesuai
											dengan materi pembelajaran</td>
										<td><input type="checkbox" name="p2[3]" alt="Checkbox" value="1" <?= @$p2Tiga ?>> Guru
											memastikan peserta didik
											paham terhadap kegunaan alat bantu</td>
										<td> <input type="checkbox" name="p2[4]" alt="Checkbox" value="1" <?= @$p2Empat ?>> Guru
											menggunakan alat bantu atau
											media pembelajaran dengan baik</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p3'])) :
										$dp3Nol = explode(',', $penilaian_detail['p3']);
										$p3Nol = null;
										if (in_array(0, $dp3Nol)) {
											$p3Nol = 'checked';
										}
										$dp3Satu = explode(',', $penilaian_detail['p3']);
										$p3Satu = null;
										if (in_array(1, $dp3Satu)) {
											$p3Satu = 'checked';
										}
										$dp3Dua = explode(',', $penilaian_detail['p3']);
										$p3Dua = null;
										if (in_array(2, $dp3Dua)) {
											$p3Dua = 'checked';
										}
										$dp3Tiga = explode(',', $penilaian_detail['p3']);
										$p3Tiga = null;
										if (in_array(3, $dp3Tiga)) {
											$p3Tiga = 'checked';
										}
										$dp3Empat = explode(',', $penilaian_detail['p3']);
										$p3Empat = null;
										if (in_array(4, $dp3Empat)) {
											$p3Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Melaksanakan kegiatan pembelajaran dalam urutan yang logis </td>

										<td><input type="checkbox" name="p3[0]" alt="Checkbox" value="1" <?= @$p3Nol ?>>
											Guru
											melaksanakan aktivitas
											pembelajaran sesuai dengan rancangan yang telah disusun</td>
										<td> <input type="checkbox" name="p3[1]" alt="Checkbox" value="1" <?= @$p3Satu ?>>Guru
											melaksanakan kegiatan
											pembelajaran secara lengkap dan berurutan</td>
										<td><input type="checkbox" name="p3[2]" alt="Checkbox" value="1" <?= @$p3Dua ?>>Guru memastikan
											bahwa guru mengerti
											tentang tujuan pembelajaran</td>
										<td> <input type="checkbox" name="p3[3]" alt="Checkbox" value="1" <?= @$p3Tiga ?>>Guru
											melaksanakan aktivitas
											bertujuan untuk membantu proses belajar peserta didik</td>
										<td> <input type="checkbox" name="p3[4]" alt="Checkbox" value="1" <?= @$p3Empat; ?>>Guru
											melaksanakan jegiatan
											pembelajaran sesuai isi kurikulum</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p4'])) :
										$dp4Nol = explode(',', $penilaian_detail['p4']);
										$p4Nol = null;
										if (in_array(0, $dp4Nol)) {
											$p4Nol = 'checked';
										}
										$dp4Satu = explode(',', $penilaian_detail['p4']);
										$p4Satu = null;
										if (in_array(1, $dp4Satu)) {
											$p4Satu = 'checked';
										}
										$dp4Dua = explode(',', $penilaian_detail['p4']);
										$p4Dua = null;
										if (in_array(2, $dp4Dua)) {
											$p4Dua = 'checked';
										}
										$dp4Tiga = explode(',', $penilaian_detail['p4']);
										$p4Tiga = null;
										if (in_array(3, $dp4Tiga)) {
											$p4Tiga = 'checked';
										}
										$dp4Empat = explode(',', $penilaian_detail['p4']);
										$p4Empat = null;
										if (in_array(4, $dp4Empat)) {
											$p4Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Penguasaan materi pembelajaran </td>

										<td> <input type="checkbox" name="p4[0]" alt="Checkbox" value="1" <?= @$p4Nol; ?>> Guru menguasi
											materi pembelajaran
											yang disampaikan</td>
										<td> <input type="checkbox" name="p4[1]" alt="Checkbox" value="1" <?= @$p4Satu; ?>>Guru mengikuti
											urutan materi
											pembelajan dengan memperhatikan tujuan pembelajaran</td>
										<td><input type="checkbox" name="p4[2]" alt="Checkbox" value="1" <?= @$p4Dua; ?>>Guru memilih
											materi pembelajaran
											yang sesuai dengan tujuan pembelajaran</td>
										<td><input type="checkbox" name="p4[3]" alt="Checkbox" value="1" <?= @$p4Tiga; ?>>Guru memastikan
											materi
											pembelajaran sesuai dengan kemampuan peserta didik</td>
										<td> <input type="checkbox" name="p4[4]" alt="Checkbox" value="1" <?= @$p4Empat; ?>>Guru memili
											materi sesuai dengan
											konteks kehidupan sehari-hari</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p5'])) :

										$dp5Nol = explode(',', $penilaian_detail['p5']);
										$p5Nol = null;
										if (in_array(0, $dp5Nol)) {
											$p5Nol = 'checked';
										}
										$dp5Satu = explode(',', $penilaian_detail['p5']);
										$p5Satu = null;
										if (in_array(1, $dp5Satu)) {
											$p5Satu = 'checked';
										}
										$dp5Dua = explode(',', $penilaian_detail['p5']);
										$p5Dua = null;
										if (in_array(2, $dp5Dua)) {
											$p5Dua = 'checked';
										}
										$dp5Tiga = explode(',', $penilaian_detail['p5']);
										$p5Tiga = null;
										if (in_array(3, $dp5Tiga)) {
											$p5Tiga = 'checked';
										}
										$dp5Empat = explode(',', $penilaian_detail['p5']);
										$p5Empat = null;
										if (in_array(4, $dp5Empat)) {
											$p5Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Melakukan apersepsi (Kegiatan sebelum memulai pembelajaran) </td>

										<td> <input type="checkbox" name="p5[0]" alt="Checkbox" value="1" <?= @$p5Nol; ?>>Guru mengulang
											materi sebelumnya
											sebelum memulai pembelajaran </td>
										<td> <input type="checkbox" name="p5[1]" alt="Checkbox" value="1" <?= @$p5Satu; ?>>Guru memastikan
											peserta didik
											mencapai tujuan pembelajaran sebelumnya</td>
										<td><input type="checkbox" name="p5[2]" alt="Checkbox" value="1" <?= @$p5Dua; ?>>Guru memberikan
											kesempatan bertanya
											kepada peserta didik terkait materi sebelumnya</td>
										<td> <input type="checkbox" name="p5[3]" alt="Checkbox" value="1" <?= @$p5Tiga; ?>>Guru
											menjelaskan mengenai
											pelaksanaan kegiatan pembelajaran</td>
										<td> <input type="checkbox" name="p5[4]" alt="Checkbox" value="1" <?= @$p5Empat; ?>>Guru
											menganalisis hasil belajar
											peserta didik pada materi sebelumnya</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p6'])) :

										$dp6Nol = explode(',', $penilaian_detail['p6']);
										$p6Nol = null;
										if (in_array(0, $dp6Nol)) {
											$p6Nol = 'checked';
										}
										$dp6Satu = explode(',', $penilaian_detail['p6']);
										$p6Satu = null;
										if (in_array(1, $dp6Satu)) {
											$p6Satu = 'checked';
										}
										$dp6Dua = explode(',', $penilaian_detail['p6']);
										$p6Dua = null;
										if (in_array(2, $dp6Dua)) {
											$p6Dua = 'checked';
										}
										$dp6Tiga = explode(',', $penilaian_detail['p6']);
										$p6Tiga = null;
										if (in_array(3, $dp6Tiga)) {
											$p6Tiga = 'checked';
										}
										$dp6Empat = explode(',', $penilaian_detail['p6']);
										$p6Empat = null;
										if (in_array(4, $dp6Empat)) {
											$p6Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Mengerjakan tugas rutin kelas </td>

										<td> <input type="checkbox" name="p6[0]" alt="Checkbox" value="1" <?= @$p6Nol ?>>Guru memastikan
											persiapan mengajar yang akan dilakukan</td>
										<td> <input type="checkbox" name="p6[1]" alt="Checkbox" value="1" <?= @$p6Satu ?>>Guru sudah
											membuat tugas-tugas sebelum kelas dimulai</td>
										<td><input type="checkbox" name="p6[2]" alt="Checkbox" value="1" <?= @$p6Dua ?>>Guru memastikan
											papan tulis sudah dibersihkan sebelum pelajaran dimulai</td>
										<td> <input type="checkbox" name="p6[3]" alt="Checkbox" value="1" <?= @$p6Tiga ?>>Guru
											mempersiapkan tutor untuk membantu murid lain </td>
										<td> <input type="checkbox" name="p6[4]" alt="Checkbox" value="1" <?= @$p6Empat ?>>Guru memeriksa
											persediaan alat tulis dan alat peraga sudah disiapka</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p7'])) :

										$dp7Nol = explode(',', $penilaian_detail['p7']);
										$p7Nol = null;
										if (in_array(0, $dp7Nol)) {
											$p7Nol = 'checked';
										}
										$dp7Satu = explode(',', $penilaian_detail['p7']);
										$p7Satu = null;
										if (in_array(1, $dp7Satu)) {
											$p7Satu = 'checked';
										}
										$dp7Dua = explode(',', $penilaian_detail['p7']);
										$p7Dua = null;
										if (in_array(2, $dp7Dua)) {
											$p7Dua = 'checked';
										}
										$dp7Tiga = explode(',', $penilaian_detail['p7']);
										$p7Tiga = null;
										if (in_array(3, $dp7Tiga)) {
											$p7Tiga = 'checked';
										}
										$dp7Empat = explode(',', $penilaian_detail['p7']);
										$p7Empat = null;
										if (in_array(4, $dp7Empat)) {
											$p7Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Memberikan kesempatan kepada siswa untuk terlibat aktif</td>

										<td> <input type="checkbox" name="p7[0]" alt="Checkbox" value="1" <?= @$p7Nol ?>>Guru memberi
											kesempatan kepada peseta didik untuk menguasai materi pembelajaran</td>
										<td> <input type="checkbox" name="p7[1]" alt="Checkbox" value="1" <?= @$p7Satu ?>>Guru dapat
											mengatur kelas untuk memberikan kesempatan belajar yang sama</td>
										<td><input type="checkbox" name="p7[2]" alt="Checkbox" value="1" <?= @$p7Dua ?>>Guru
											memperhatikan respon peserta didik untuk bertanya</td>
										<td> <input type="checkbox" name="p7[3]" alt="Checkbox" value="1" <?= @$p7Tiga ?>>Guru memberikan
											kesempatan kepada peserta didik untuk bertanya terkait materi yang
											disampaikan</td>
										<td> <input type="checkbox" name="p7[4]" alt="Checkbox" value="1" <?= @$p7Empat ?>>Guru memberikan
											kesempatan untuk peserta didik berinteraksi dengan peserta didik lainnya
										</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p8'])) :

										$dp8Nol = explode(',', $penilaian_detail['p8']);
										$p8Nol = null;
										if (in_array(0, $dp8Nol)) {
											$p8Nol = 'checked';
										}
										$dp8Satu = explode(',', $penilaian_detail['p8']);
										$p8Satu = null;
										if (in_array(1, $dp8Satu)) {
											$p8Satu = 'checked';
										}
										$dp8Dua = explode(',', $penilaian_detail['p8']);
										$p8Dua = null;
										if (in_array(2, $dp8Dua)) {
											$p8Dua = 'checked';
										}
										$dp8Tiga = explode(',', $penilaian_detail['p8']);
										$p8Tiga = null;
										if (in_array(3, $dp8Tiga)) {
											$p8Tiga = 'checked';
										}
										$dp8Empat = explode(',', $penilaian_detail['p8']);
										$p8Empat = null;
										if (in_array(4, $dp8Empat)) {
											$p8Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Melaksanakan penilaian selama proses berlangsung </td>

										<td> <input type="checkbox" name="p8[0]" alt="Checkbox" value="1" <?= @$p8Nol; ?>>Guru melakukan
											penilaian sebagai bahan pembelajaran selanjutnya</td>
										<td> <input type="checkbox" name="p8[1]" alt="Checkbox" value="1" <?= @$p8Satu; ?>>Guru menyusun
											alat penilaian yang sesuai dengan tujuan pembelajaran</td>
										<td><input type="checkbox" name="p8[2]" alt="Checkbox" value="1" <?= @$p8Dua; ?>>Guru melakukan
											penilaian kepada peserta didik selama proses pembelajaran berlangsung</td>
										<td> <input type="checkbox" name="p8[3]" alt="Checkbox" value="1" <?= @$p8Tiga ?>>Guru melakukan
											penilaian berdasarkan tingkat pemahaman peserta didik</td>
										<td> <input type="checkbox" name="p8[4]" alt="Checkbox" value="1" <?= @$p8Empat ?>>Guru melakukan
											penilaian sesuai RPP</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p9'])) :

										$dp9Nol = explode(',', $penilaian_detail['p9']);
										$p9Nol = null;
										if (in_array(0, $dp9Nol)) {
											$p9Nol = 'checked';
										}
										$dp9Satu = explode(',', $penilaian_detail['p9']);
										$p9Satu = null;
										if (in_array(1, $dp9Satu)) {
											$p9Satu = 'checked';
										}
										$dp9Dua = explode(',', $penilaian_detail['p9']);
										$p9Dua = null;
										if (in_array(2, $dp9Dua)) {
											$p9Dua = 'checked';
										}
										$dp9Tiga = explode(',', $penilaian_detail['p9']);
										$p9Tiga = null;
										if (in_array(3, $dp9Tiga)) {
											$p9Tiga = 'checked';
										}
										$dp9Empat = explode(',', $penilaian_detail['p9']);
										$p9Empat = null;
										if (in_array(4, $dp9Empat)) {
											$p9Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Melaksanakan penilaian pada akhir pembelajaran</td>

										<td> <input type="checkbox" name="p9[0]" alt="Checkbox" value="1" <?= @$p9Nol; ?>>Guru
											memanfaatkan masukan dari peserta didik untuk meningkatkan pembelajaran
											selanjutnya</td>
										<td> <input type="checkbox" name="p9[1]" alt="Checkbox" value="1" <?= @$p9Satu; ?>>Guru
											menganalisi hasil penilaian untuk mengidentifikasi topik yang sulit</td>
										<td><input type="checkbox" name="p9[2]" alt="Checkbox" value="1" <?= @$p9Dua ?>>Guru
											melaksanakan penilaian sesuai isi kurikulum</td>
										<td> <input type="checkbox" name="p9[3]" alt="Checkbox" value="1" <?= @$p9Tiga ?>>Guru
											menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap
											peserta didik</td>
										<td> <input type="checkbox" name="p9[4]" alt="Checkbox" value="1" <?= @$p9Empat ?>>Guru melakukan
											evaluasi terhadap pembelajaran</td>
									</tr>
									<?php
									if (isset($penilaian_detail['p10'])) :

										$dp10Nol = explode(',', $penilaian_detail['p10']);
										$p10Nol = null;
										if (in_array(0, $dp10Nol)) {
											$p10Nol = 'checked';
										}
										$dp10Satu = explode(',', $penilaian_detail['p10']);
										$p10Satu = null;
										if (in_array(1, $dp10Satu)) {
											$p10Satu = 'checked';
										}
										$dp10Dua = explode(',', $penilaian_detail['p10']);
										$p10Dua = null;
										if (in_array(2, $dp10Dua)) {
											$p10Dua = 'checked';
										}
										$dp10Tiga = explode(',', $penilaian_detail['p10']);
										$p10Tiga = null;
										if (in_array(3, $dp10Tiga)) {
											$p10Tiga = 'checked';
										}
										$dp10Empat = explode(',', $penilaian_detail['p10']);
										$p10Empat = null;
										if (in_array(4, $dp10Empat)) {
											$p10Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Menyimpulkan pelajaran atau rangkuman </td>

										<td> <input type="checkbox" name="p10[0]" alt="Checkbox" value="1" <?= @$p10Nol ?>>Guru
											menyimpulkan materi pembelajaran yang disampaikan</td>
										<td> <input type="checkbox" name="p10[1]" alt="Checkbox" value="1" <?= @$p10Satu ?>>Guru mencatat
											ide-ide pokok materi pembelajaran</td>
										<td><input type="checkbox" name="p10[2]" alt="Checkbox" value="1" <?= @$p10Dua ?>>Guru melakukan
											rangkuman untuk pembelajaran selanjutnya</td>
										<td> <input type="checkbox" name="p10[3]" alt="Checkbox" value="1" <?= @$p10Tiga ?>>Guru memberi
											petunjuk pelajaran atau topik berikutnya</td>
										<td> <input type="checkbox" name="p10[4]" alt="Checkbox" value="1" <?= @$p10Empat ?>>Guru membuat
											rangkuman pembelajaran guna untuk evaluasi diakhir pelajaran</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="table-responsive ">
							<table class="table" border="2" style="color: black;font-family: Times New Roman"">
                                <thead>
                                    <tr>
                                        <td><strong>
                                                <center>KRITERIA PENILAIAN </center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 1</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 2</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 3</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 4</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 5</center>
                                            </strong></td>

                                    </tr>
                                </thead>
                                <th colspan=" 6">KRITERIA KEPRIBADIAN</th>

								<tbody>
									<?php
									if (isset($penilaian_detail['k1'])) :

										$dk1Nol = explode(',', $penilaian_detail['k1']);
										$k1Nol = null;
										if (in_array(0, $dk1Nol)) {
											$k1Nol = 'checked';
										}
										$dk1Satu = explode(',', $penilaian_detail['k1']);
										$k1Satu = null;
										if (in_array(1, $dk1Satu)) {
											$k1Satu = 'checked';
										}
										$dk1Dua = explode(',', $penilaian_detail['k1']);
										$k1Dua = null;
										if (in_array(2, $dk1Dua)) {
											$k1Dua = 'checked';
										}
										$dk1Tiga = explode(',', $penilaian_detail['k1']);
										$k1Tiga = null;
										if (in_array(3, $dk1Tiga)) {
											$k1Tiga = 'checked';
										}
										$dk1Empat = explode(',', $penilaian_detail['k1']);
										$k1Empat = null;
										if (in_array(4, $dk1Empat)) {
											$k1Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Interaksi guru dengan siswa, siswa dengan siswa dan teman sejawat </td>

										<td> <input type="checkbox" name="k1[0]" alt="Checkbox" value="1" <?= @$k1Nol ?>> Guru
											mengembangkan kerjasama yang baik sesama teman sejawat, dengan siswa</td>
										<td> <input type="checkbox" name="k1[1]" alt="Checkbox" value="1" <?= @$k1Satu ?>>Guru bertingkah
											laku sopan selama interaksi</td>
										<td><input type="checkbox" name="k1[2]" alt="Checkbox" value="1" <?= @$k1Dua ?>>Guru
											mengembangkan hubungan yang baik antara peserta didik dengan peserta didik
											lainnya</td>
										<td> <input type="checkbox" name="k1[3]" alt="Checkbox" value="1" <?= @$k1Tiga ?>>Guru mampu
											mengelola pembelajaran agar guru dihormati oleh peserta didik</td>
										<td> <input type="checkbox" name="k1[4]" alt="Checkbox" value="1" <?= @$k1Empat ?>>Guru mampu
											membuat peserta didik berpatisipasi dalam proses pembelajaran</td>
									</tr>
									<?php
									if (isset($penilaian_detail['k2'])) :

										$dk2Nol = explode(',', $penilaian_detail['k2']);
										$k2Nol = null;
										if (in_array(0, $dk2Nol)) {
											$k2Nol = 'checked';
										}
										$dk2Satu = explode(',', $penilaian_detail['k2']);
										$k2Satu = null;
										if (in_array(1, $dk2Satu)) {
											$k2Satu = 'checked';
										}
										$dk2Dua = explode(',', $penilaian_detail['k2']);
										$k2Dua = null;
										if (in_array(2, $dk2Dua)) {
											$k2Dua = 'checked';
										}
										$dk2Tiga = explode(',', $penilaian_detail['k2']);
										$k2Tiga = null;
										if (in_array(3, $dk2Tiga)) {
											$k2Tiga = 'checked';
										}
										$dk2Empat = explode(',', $penilaian_detail['k2']);
										$k2Empat = null;
										if (in_array(4, $dk2Empat)) {
											$k2Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Menunjukkan sikap terbuka terhadap pendapat siswa </td>

										<td> <input type="checkbox" name="k2[0]" alt="Checkbox" value="1" <?= @$k2Nol ?>>Guru mampu
											bersikap terbuka terhadap masukan dan pendapat peserta didik</td>
										<td> <input type="checkbox" name="k2[1]" alt="Checkbox" value="1" <?= @$k2Satu ?>>Guru dapat
											menerima masukan dari peserta didik</td>
										<td><input type="checkbox" name="k2[2]" alt="Checkbox" value="1" <?= @$k2Dua ?>>Guru
											mendengarkan semua jawaban peserta didik baik yang benar atau yang salah
										</td>
										<td> <input type="checkbox" name="k2[3]" alt="Checkbox" value="1" <?= @$k2Tiga ?>>Guru menanggapi
											pendapat peserta didik dengan tepat dan benar</td>
										<td> <input type="checkbox" name="k2[4]" alt="Checkbox" value="1" <?= @$k2Empat ?>>Guru memberikan
											kesempatan kepada peserta didik untuk bertanya</td>
									</tr>
									<?php
									if (isset($penilaian_detail['k3'])) :

										$dk3Nol = explode(',', $penilaian_detail['k3']);
										$k3Nol = null;
										if (in_array(0, $dk3Nol)) {
											$k3Nol = 'checked';
										}
										$dk3Satu = explode(',', $penilaian_detail['k3']);
										$k3Satu = null;
										if (in_array(1, $dk3Satu)) {
											$k3Satu = 'checked';
										}
										$dk3Dua = explode(',', $penilaian_detail['k3']);
										$k3Dua = null;
										if (in_array(2, $dk3Dua)) {
											$k3Dua = 'checked';
										}
										$dk3Tiga = explode(',', $penilaian_detail['k3']);
										$k3Tiga = null;
										if (in_array(3, $dk3Tiga)) {
											$k3Tiga = 'checked';
										}
										$dk3Empat = explode(',', $penilaian_detail['k3']);
										$k3Empat = null;
										if (in_array(4, $dk3Empat)) {
											$k3Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Mengembangkan hubungan antarpribadi yang sehat dan serasi</td>

										<td> <input type="checkbox" name="k3[0]" alt="Checkbox" value="1" <?= @$k3Nol; ?>> Guru
											mengembangkan kerjasama dan membina kebersamaan dengan peserta didik</td>
										<td> <input type="checkbox" name="k3[1]" alt="Checkbox" value="1" <?= @$k3Satu; ?>>Guru menghargai
											prinsip-prinsip pancasila sebagai ideologi dan etika bagi semua orang</td>
										<td><input type="checkbox" name="k3[2]" alt="Checkbox" value="1" <?= @$k3Dua ?>>Guru mempunyai
											pandangan yang luas tentang perbedaan</td>
										<td> <input type="checkbox" name="k3[3]" alt="Checkbox" value="1" <?= @$k3Tiga ?>>Guru saling
											menghormati dan menghargai teman sejawat dan peserta didik</td>
										<td> <input type="checkbox" name="k3[4]" alt="Checkbox" value="1" <?= @$k3Empat ?>>Guru memiliki
											rasa persatuan dan kesatuan yang baik</td>
									</tr>
									<?php
									if (isset($penilaian_detail['k4'])) :

										$dk4Nol = explode(',', $penilaian_detail['k4']);
										$k4Nol = null;
										if (in_array(0, $dk4Nol)) {
											$k4Nol = 'checked';
										}
										$dk4Satu = explode(',', $penilaian_detail['k4']);
										$k4Satu = null;
										if (in_array(1, $dk4Satu)) {
											$k4Satu = 'checked';
										}
										$dk4Dua = explode(',', $penilaian_detail['k4']);
										$k4Dua = null;
										if (in_array(2, $dk4Dua)) {
											$k4Dua = 'checked';
										}
										$dk4Tiga = explode(',', $penilaian_detail['k4']);
										$k4Tiga = null;
										if (in_array(3, $dk4Tiga)) {
											$k4Tiga = 'checked';
										}
										$dk4Empat = explode(',', $penilaian_detail['k4']);
										$k4Empat = null;
										if (in_array(4, $dk4Empat)) {
											$k4Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Memotivasi siswa untuk terlibat dalam kegiatan pembelajaran</td>

										<td> <input type="checkbox" name="k4[0]" alt="Checkbox" value="1" <?= @$k4Nol ?>> Guru
											memberikan motivasi atau dorongan agar peserta didik berperan aktif dalam
											pembelajaran</td>
										<td> <input type="checkbox" name="k4[1]" alt="Checkbox" value="1" <?= @$k4Satu ?>>Guru membantu
											mengembangkan potensi dan mengatasi kelemahan peserta didik</td>
										<td><input type="checkbox" name="k4[2]" alt="Checkbox" value="1" <?= @$k4Dua ?>>Guru menggunakan
											berbagai teknik untuk memotivasi kemauan belajar peserta didik</td>
										<td><input type="checkbox" name="k4[3]" alt="Checkbox" value="1" <?= @$k4Tiga ?>>Guru memberikan
											apresiasi kepada peserta didik sebagai motivasi</td>
										<td> <input type="checkbox" name="k4[4]" alt="Checkbox" value="1" <?= @$k4Empat; ?>>Guru
											menyampaikan kisah-kisah inspirasi sebagai motivasi peserta didik</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="table-responsive ">
							<table class="table" border="2" style="color: black; font-family: Times New Roman"">
                                <thead>
                                    <tr>
                                        <td><strong>
                                                <center>KRITERIA PENILAIAN </center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 1</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 2</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 3</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 4</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 5</center>
                                            </strong></td>

                                    </tr>
                                </thead>
                                <th colspan=" 6">KRITERIA SOSIAL</th>

								<tbody>
									<?php
									if (isset($penilaian_detail['s1'])) :

										$ds1Nol = explode(',', $penilaian_detail['s1']);
										$s1Nol = null;
										if (in_array(0, $ds1Nol)) {
											$s1Nol = 'checked';
										}
										$ds1Satu = explode(',', $penilaian_detail['s1']);
										$s1Satu = null;
										if (in_array(1, $ds1Satu)) {
											$s1Satu = 'checked';
										}
										$ds1Dua = explode(',', $penilaian_detail['s1']);
										$s1Dua = null;
										if (in_array(2, $ds1Dua)) {
											$s1Dua = 'checked';
										}
										$ds1Tiga = explode(',', $penilaian_detail['s1']);
										$s1Tiga = null;
										if (in_array(3, $ds1Tiga)) {
											$s1Tiga = 'checked';
										}
										$ds1Empat = explode(',', $penilaian_detail['s1']);
										$s1Empat = null;
										if (in_array(4, $ds1Empat)) {
											$s1Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Pengorganisasian siswa</td>

										<td> <input type="checkbox" name="s1[0]" alt="Checkbox" value="1" <?= @$s1Nol ?>>
											Guru dapat mengatur kelas dan peserta didik untuk mengikuti
											pembelajaran</td>
										<td> <input type="checkbox" name="s1[1]" alt="Checkbox" value="1" <?= @$s1Satu ?>>Guru mampu
											menyesuaikan aktivitas pembelajaran dengan tepat
										</td>
										<td><input type="checkbox" name="s1[2]" alt="Checkbox" value="1" <?= @$s1Dua ?>>Guru
											mengaktifkan siswa dengan produktif mengikuti pembelajaran</td>
										<td> <input type="checkbox" name="s1[3]" alt="Checkbox" value="1" <?= @$s1Tiga ?>>Guru mengawali
											dan mengakhiri pembelajaran dengan tepat waktu</td>
										<td><input type="checkbox" name="s1[4]" alt="Checkbox" value="1" <?= @$s1Empat ?>>Guru
											memanfaatkan waktu pembelajaran dengan baik agar peseta didik teratur</td>
									</tr>
									<?php
									if (isset($penilaian_detail['s2'])) :

										$ds2Nol = explode(',', $penilaian_detail['s2']);
										$s2Nol = null;
										if (in_array(0, $ds2Nol)) {
											$s2Nol = 'checked';
										}
										$ds2Satu = explode(',', $penilaian_detail['s2']);
										$s2Satu = null;
										if (in_array(1, $ds2Satu)) {
											$s2Satu = 'checked';
										}
										$ds2Dua = explode(',', $penilaian_detail['s2']);
										$s2Dua = null;
										if (in_array(2, $ds2Dua)) {
											$s2Dua = 'checked';
										}
										$ds2Tiga = explode(',', $penilaian_detail['s2']);
										$s2Tiga = null;
										if (in_array(3, $ds2Tiga)) {
											$s2Tiga = 'checked';
										}
										$ds2Empat = explode(',', $penilaian_detail['s2']);
										$s2Empat = null;
										if (in_array(4, $ds2Empat)) {
											$s2Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Menggunakan bahasa yang baik, benar, dan efektif </td>

										<td> <input type="checkbox" name="s2[0]" alt="Checkbox" value="1" <?= @$s2Nol; ?>> Guru
											menyampaikan materi menggunakan bahasa yang baik dan benar</td>
										<td> <input type="checkbox" name="s2[1]" alt="Checkbox" value="1" <?= @$s2Satu ?>>Guru
											menggunakan bahasa yang baik dan benar dalam beinteraksi</td>
										<td><input type="checkbox" name="s2[2]" alt="Checkbox" value="1" <?= @$s2Dua ?>>Guru memastikan
											peserta didik menggunakan bahasa yang baik selama berkomunikasi</td>
										<td><input type="checkbox" name="s2[3]" alt="Checkbox" value="1" <?= @$s2Tiga ?>>Guru menggunakan
											bahasa yang baik, benar, efektif agar mudah dipahami</td>
										<td><input type="checkbox" name="s2[4]" alt="Checkbox" value="1" <?= @$s2Empat; ?>>Guru memastikan
											penyampaian materi pembelajaran dapat dimengerti oleh peserta didik</td>
									</tr>

								</tbody>
							</table>
						</div>

						<div class="table-responsive ">
							<table class="table" border="2" style="color: black; font-family: Times New Roman"">
                                <thead>
                                    <tr>
                                        <td><strong>
                                                <center>KRITERIA PENILAIAN </center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 1</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 2</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 3</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 4</center>
                                            </strong></td>
                                        <td><strong>
                                                <center>Indikator 5</center>
                                            </strong></td>

                                    </tr>
                                </thead>
                                <th colspan=" 6">KEPRIBADIAN</th>

								<tbody>
									<?php
									if (isset($penilaian_detail['pr1'])) :

										$dpr1Nol = explode(',', $penilaian_detail['pr1']);
										$pr1Nol = null;
										if (in_array(0, $dpr1Nol)) {
											$pr1Nol = 'checked';
										}
										$dpr1Satu = explode(',', $penilaian_detail['pr1']);
										$pr1Satu = null;
										if (in_array(1, $dpr1Satu)) {
											$pr1Satu = 'checked';
										}
										$dpr1Dua = explode(',', $penilaian_detail['pr1']);
										$pr1Dua = null;
										if (in_array(2, $dpr1Dua)) {
											$pr1Dua = 'checked';
										}
										$dpr1Tiga = explode(',', $penilaian_detail['pr1']);
										$pr1Tiga = null;
										if (in_array(3, $dpr1Tiga)) {
											$pr1Tiga = 'checked';
										}
										$dpr1Empat = explode(',', $penilaian_detail['pr1']);
										$pr1Empat = null;
										if (in_array(4, $dpr1Empat)) {
											$pr1Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Menggunakan metode pembelajaran bervariasi </td>

										<td> <input type="checkbox" name="pr1[0]" alt="Checkbox" value="1" <?= @@$pr1Nol; ?>>Guru dapat
											menyusun silabus yang sesuai dengan kurikulum</td>
										<td> <input type="checkbox" name="pr1[1]" alt="Checkbox" value="1" <?= @@$pr1Satu; ?>>Guru melakukan
											pemetaan standar kompetensi dan kompetensi dasar untuk mata pelajaran yang
											diampu</td>
										<td><input type="checkbox" name="pr1[2]" alt="Checkbox" value="1" <?= @@$pr1Dua; ?>>Guru dapat
											mengidentifikasi materi pembelajaran yang dianggap sulit, melakukan
											perancangan pembelajaran</td>
										<td> <input type="checkbox" name="pr1[3]" alt="Checkbox" value="1" <?= @@$pr1Tiga; ?>>Guru menyusun
											materi pembelajaran yang membantu peserta didik memahami materi pembelajaran
										</td>
										<td> <input type="checkbox" name="pr1[4]" alt="Checkbox" value="1" <?= @@$pr1Empat ?>>Guru memilih
											materi pembelajaran sesuai dengan situasi, kondisi, dan konteks kehidupan
											sehari-hari</td>
									</tr>
									<?php
									if (isset($penilaian_detail['pr2'])) :

										$dpr2Nol = explode(',', $penilaian_detail['pr2']);
										$pr2Nol = null;
										if (in_array(0, $dpr2Nol)) {
											$pr2Nol = 'checked';
										}
										$dpr2Satu = explode(',', $penilaian_detail['pr2']);
										$pr2Satu = null;
										if (in_array(1, $dpr2Satu)) {
											$pr2Satu = 'checked';
										}
										$dpr2Dua = explode(',', $penilaian_detail['pr2']);
										$pr2Dua = null;
										if (in_array(2, $dpr2Dua)) {
											$pr2Dua = 'checked';
										}
										$dpr2Tiga = explode(',', $penilaian_detail['pr2']);
										$pr2Tiga = null;
										if (in_array(3, $dpr2Tiga)) {
											$pr2Tiga = 'checked';
										}
										$dpr2Empat = explode(',', $penilaian_detail['pr2']);
										$pr2Empat = null;
										if (in_array(4, $dpr2Empat)) {
											$pr2Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Menggunakan waktu pembelajaran secara efisien dan efektif</td>

										<td><input type="checkbox" name="pr2[0]" alt="Checkbox" value="1" <?= @$pr2Nol; ?>> Guru
											menyajikan kegiatan pembelajaran yang efektif</td>
										<td> <input type="checkbox" name="pr2[1]" alt="Checkbox" value="1" <?= @$pr2Satu; ?>>Guru
											menciptakan suasana kelas pembelajaran secara efisien dan efektif</td>
										<td><input type="checkbox" name="pr2[2]" alt="Checkbox" value="1" <?= @$pr2Dua; ?>>Guru memastikan
											perserta didik menggunakan waktu belajar dengan baik</td>
										<td> <input type="checkbox" name="pr2[3]" alt="Checkbox" value="1" <?= @$pr2Tiga; ?>>Guru menyusun
											rencana pembelajaran agar efisien dan efektif</td>
										<td> <input type="checkbox" name="pr2[4]" alt="Checkbox" value="1" <?= @$pr2Empat; ?>>Guru
											menyampaikan materi pembelajaran sesuai dengan kompetensi dasar</td>
									</tr>

									<?php
									if (isset($penilaian_detail['pr3'])) :

										$dpr3Nol = explode(',', $penilaian_detail['pr3']);
										$pr3Nol = null;
										if (in_array(0, $dpr3Nol)) {
											$pr3Nol = 'checked';
										}
										$dpr3Satu = explode(',', $penilaian_detail['pr3']);
										$pr3Satu = null;
										if (in_array(1, $dpr3Satu)) {
											$pr3Satu = 'checked';
										}
										$dpr3Dua = explode(',', $penilaian_detail['pr3']);
										$pr3Dua = null;
										if (in_array(2, $dpr3Dua)) {
											$pr3Dua = 'checked';
										}
										$dpr3Tiga = explode(',', $penilaian_detail['pr3']);
										$pr3Tiga = null;
										if (in_array(3, $dpr3Tiga)) {
											$pr3Tiga = 'checked';
										}
										$dpr3Empat = explode(',', $penilaian_detail['pr3']);
										$pr3Empat = null;
										if (in_array(4, $dpr3Empat)) {
											$pr3Empat = 'checked';
										}
									endif;
									?>
									<tr>
										<td>Melaksanakan tindak lanjut</td>

										<td> <input type="checkbox" name="pr3[0]" alt="Checkbox" value="1" <?= @$pr3Nol; ?>> Guru
											melakukan evaluasi diri secara spesifik lengkap</td>
										<td> <input type="checkbox" name="pr3[1]" alt="Checkbox" value="1" <?= @$pr3Satu; ?>>Guru memiliki
											catatan masukan atau hasil penialain proses pembelajaran</td>
										<td> <input type="checkbox" name="pr3[2]" alt="Checkbox" value="1" <?= @$pr3Dua; ?>> Guru memiliki
											jurnal pembelajaran sebagai bukti yang menggambarkan kinerjanya</td>
										<td> <input type="checkbox" name="pr3[3]" alt="Checkbox" value="1" <?= @$pr3Tiga; ?>>Guru
											memanfaatkan bukti gambaran kinerjanya untuk mengembangkan perencanaan
											pembelajaran selanjutnya</td>
										<td> <input type="checkbox" name="pr3[4]" alt="Checkbox" value="1" <?= @$pr3Empat; ?>>Guru dapat
											memanfaatkan TIK dalam berkomunikasi</td>
									</tr>

								</tbody>

							</table>
						</div>

						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

					</form>

				</div>
			</div>

		</div>
	</div>
</div>