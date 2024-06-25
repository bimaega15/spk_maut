<?php
function radioCell($name, $value, $label)
{
	$checked = set_radio($name, $value);
	$uniqId = uniqid();
	return "<td>
		<div class='d-flex align-items-center'>
			<input type='radio' id='$uniqId' name='$name' value='$value' $checked>
			<label for='$uniqId' style='margin-bottom: 0;margin-left: 4px;'>$label</label>
		</div>
	</td>";
}

function radioRow($label, $name)
{
	$params = [
		['tidak sesuai', 1],
		['kurang sesuai', 2],
		['cukup sesuai', 3],
		['sesuai', 4],
		['sangat sesuai', 5]
	];
	echo "<tr>
		<td>$label</td>";
	foreach ($params as $param) {
		echo radioCell($name, $param[1], $param[0]);
	}
	echo "</tr>";
}
?>

<div class="container">

	<div class="row-mt-3">
		<div class="col-md-12">

			<div class="card">
				<?php
				if (validation_errors()) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Fail! </strong> <?= validation_errors(); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php
				endif;
				?>
				<div class="card-header" style="background-color:darkseagreen; color : black;">
					Tambah Data Penilaian Calon Pegawai
				</div>
				<div class="card-body">

					<form action="" method="post" style="color: black; font-family: Times New Roman"">
                        <!--
                        <div class=" form-group">
						<label>guru</label>
						<select name="guru" class="form-control">

							<php foreach ($guru as $g) : ?>
								<option valuae="<php echo $g->id_guru ?>">
									<php echo $g->nama ?>
								</option>
								<php endforeach; ?>
						</select>
						<input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Masukkan nama lengkap guru" value="<php echo set_value('nama'); ?>">
						<php echo form_error('nama', '<small
                                     class="text-danger pl-3">' , '</small>' ); ?>
				</div>

				-->



				<div class="form-group">
					<input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Masukkan nama lengkap guru" value="<?php echo set_value('nama'); ?>">
					<?php echo form_error('nama', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<input type="text" name="nip" class="form-control form-control-user" id="nip" placeholder="Masukkan NIK guru" value="<?php echo set_value('nip'); ?>">
					<?php echo form_error('nip', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<input type="text" name="posisi" class="form-control form-control-user" id="posisi" placeholder="Masukkan posisi lamaran" value="<?php echo set_value('posisi'); ?>">
					<?php echo form_error('posisi lamaran', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<input type="numeric" name="nomor" class="form-control form-control-user" id="nomor" placeholder="Masukkan Nomor HP" value="<?php echo set_value('nomor'); ?>">
					<?php echo form_error('nomor HP', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
				</div>



				<!--pembahasan option select untuk pangkat di ngoding 10 16:25 -->


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
						<th colspan=" 6">Kriteria Pemberkasan dan Profesionalitas</th>

						<tbody>
							<?php radioRow('Kesesuaian Pendidikan', 'p1') ?>

							<!-- <tr>
								<td>Pengalaman Kerja Sesuai dengan Posisi yang dipilih</td>
								<td> <input type="checkbox" name="p2[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p2[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p2[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p2[3]" alt="Checkbox" value="4"> sesuai</td>
								<td><input type="checkbox" name="p2[4]" alt="Checkbox" value="5"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Pengalaman Kerja Sesuai dengan Posisi yang dipilih', 'p2') ?>

							<!-- <tr>
								<td>Merupakan alumni, pernah magang, atau
									<br>pernah bergabung di SMK Ikasari
								</td>

								<td> <input type="checkbox" name="p3[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p3[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p3[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p3[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p3[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Merupakan alumni, pernah magang, atau pernah bergabung di SMK Ikasari', 'p3') ?>

							<!-- <tr>
								<td>Penguasaan materi pembelajaran </td>

								<td> <input type="checkbox" name="p4[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p4[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p4[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p4[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p4[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Penguasaan materi pembelajaran', 'p4') ?>

							<!-- <tr>
								<td>Melakukan apersepsi <br>(Kegiatan sebelum memulai pembelajaran) </td>

								<td> <input type="checkbox" name="p5[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p5[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p5[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p5[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p5[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Melakukan apersepsi (Kegiatan sebelum memulai pembelajaran)', 'p5') ?>

							<!-- <tr>
								<td>Mengerjakan tugas rutin kelas </td>

								<td> <input type="checkbox" name="p6[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p6[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p6[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p6[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p6[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Mengerjakan tugas rutin kelas', 'p6') ?>

							<!-- <tr>
								<td>Memberikan kesempatan kepada siswa untuk terlibat aktif</td>

								<td> <input type="checkbox" name="p7[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p7[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p7[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p7[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p7[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Memberikan kesempatan kepada siswa untuk terlibat aktif', 'p7') ?>

							<!-- <tr>
								<td>Melaksanakan penilaian selama proses berlangsung </td>

								<td> <input type="checkbox" name="p8[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p8[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p8[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p8[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p8[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Melaksanakan penilaian selama proses berlangsung', 'p8') ?>

							<!-- <tr>
								<td>Melaksanakan penilaian pada akhir pembelajaran</td>

								<td> <input type="checkbox" name="p9[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p9[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p9[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p9[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p9[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Melaksanakan penilaian pada akhir pembelajaran', 'p9') ?>

							<!-- <tr>
								<td>Menyimpulkan pelajaran atau rangkuman </td>

								<td> <input type="checkbox" name="p10[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="p10[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="p10[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="p10[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="p10[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Menyimpulkan pelajaran atau rangkuman', 'p10') ?>
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
							<!-- <tr>
								<td>Interaksi dengan pewawancara baik dan sopan </td>

								<td> <input type="checkbox" name="k1[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="k1[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="k1[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="k1[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="k1[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Interaksi dengan pewawancara baik dan sopan', 'k1') ?>

							<!-- <tr>
								<td>Menggunakan bahasa yang efektif dan terarah</td>

								<td> <input type="checkbox" name="k2[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="k2[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="k2[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="k2[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="k2[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Menggunakan bahasa yang efektif dan terarah', 'k2') ?>
							<!-- <tr>
								<td>sikap dan pola pikir sesuai dengan <br>visi dan misi SMK Farmasi Ikasari</td>

								<td> <input type="checkbox" name="k3[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="k3[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="k3[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="k3[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="k3[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('sikap dan pola pikir sesuai dengan visi dan misi SMK Farmasi Ikasari', 'k3') ?>
							<!-- <tr>
								<td>Berpenampilan menarik</td>

								<td> <input type="checkbox" name="k4[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="k4[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="k4[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="k4[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="k4[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Berpenampilan menarik', 'k4') ?>
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

							<!-- <tr>
								<td>Bersikap saat wawancara dan micro teaching</td>

								<td> <input type="checkbox" name="s1[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="s1[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="s1[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="s1[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="s1[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Bersikap saat wawancara dan micro teaching', 's1') ?>
							<!-- <tr>
								<td>memiliki pengalaman sosial atau organisasi yang baik</td>
								<td> <input type="checkbox" name="s2[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="s2[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="s2[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="s2[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="s2[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('memiliki pengalaman sosial atau organisasi yang baik', 's2') ?>

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
                                <th colspan=" 6">KRITERIA REKOMENDASI</th>

						<tbody>
							<!-- <tr>
								<td>Rekomendasi dari pegawai atau guru </td>

								<td> <input type="checkbox" name="pr1[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="pr1[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="pr1[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="pr1[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="pr1[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Rekomendasi dari pegawai atau guru', 'pr1') ?>
							<!-- <tr>
								<td>Rekomendasi dari Kepala Sekolah</td>

								<td> <input type="checkbox" name="pr2[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="pr2[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="pr2[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="pr2[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="pr2[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Rekomendasi dari Kepala Sekolah', 'pr2') ?>
							<!-- <tr>
								<td>Rekomendasi dari Yayasan</td>

								<td> <input type="checkbox" name="pr3[0]" alt="Checkbox" value="1">tidak sesuai</td>
								<td><input type="checkbox" name="pr3[1]" alt="Checkbox" value="1"> kurang sesuai</td>
								<td><input type="checkbox" name="pr3[2]" alt="Checkbox" value="1"> cukup sesuai</td>
								<td><input type="checkbox" name="pr3[3]" alt="Checkbox" value="1"> sesuai</td>
								<td><input type="checkbox" name="pr3[4]" alt="Checkbox" value="1"> sangat sesuai</td>
							</tr> -->
							<?php radioRow('Rekomendasi dari Yayasan', 'pr3') ?>

						</tbody>

					</table>
				</div>

				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

				</form>

				<!--  <  if (isset($_POST['p1']))
              {
                $value =$_POST['p1'];
                $total = 0;
                for ($i=0;$i<count($value); $i++)
                {
                    $total = $value[$i];
                }

              }
              ?> -->

			</div>








		</div>

	</div>
</div>
</div>