<div class="card">
	<div class="container">


		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="row mt-3">
				<div class="col-md-8">

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Guru<strong> Berhasil </strong> <?php echo $this->session->flashdata('flash'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

				</div>
			</div>
		<?php endif; ?>
		<center>
			<h3 style="font-family: 'Times New Roman', Times, serif;">Daftar Penilaian Calon Pegawai SMK Farmasi Ikasari
				Pekanbaru</h3>
		</center>
		<div class="row mt-3 ">
			<div class="col-md-8">

				<br>

				<?php if (empty('guru')) : ?>
					<div class="alert alert-danger" role="alert">Data tidak ditemukan.</div>
				<?php endif; ?>


			</div>
		</div>



		<div class="row mt-6 ">
			<div class="col-md-6 ">
				<div class="col-mr-5">
					<!-- searching -->
					<input id="myInput" type="text" placeholder="Cari data.." autofocus>

					<a href="<?php echo base_url(); ?>penilaian/tambah" class="btn btn-primary"><i class="fa fa-plus">
							Tambah Data</i><a>
				</div>
			</div>
		</div>

		<div class="row mt-3 ">
			<div class="col-md-12">


				<div class="card ">
					<div class="table-responsive ">
						<table class="table" id="employee_table">
							<thead style="font-family: 'Times New Roman', Times, serif;">
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>NIK/NIP</th>
									<th>Posisi Lamaran</th>
									<th>Nomor HP</th>



									<th scope="col">Aksi</th>
								</tr>
							</thead>

							<tbody id="myTable" style="font-family: 'Times New Roman', Times, serif;">
								<tr>
									<?php if (!empty($penilaian)) {
										foreach ($penilaian as $j) { ?>
											<td><?php echo ++$start; ?></td>
											<td><?php echo $j['nama']; ?></td>
											<td> <?php echo $j['nip']; ?></td>
											<td> <?php echo $j['posisi']; ?></td>
											<td> <?php echo $j['nomor']; ?></td>

											<!--</?php
											$jumlah = ($j['p1'] + $j['p2'] + $j['p3'] + $j['p4'] + $j['p5'] + $j['p6'] + $j['p7'] + $j['p8'] + $j['p9'] + $j['p10'] +
												$j['k1'] + $j['k2'] + $j['k3'] + $j['k4'] + $j['s1'] + $j['s2']
												+ $j['pr1'] + $j['pr2'] + $j['pr3']);


											?>

											</?php


											$rata = ($jumlah / 19);
											if ($jumlah >= 91) {
												$nilai['nilai'] =  'A';
											} else if ($jumlah >= 76) {
												$nilai['nilai'] = 'B';
											} else if ($jumlah >= 61) {
												$nilai['nilai'] = 'C';
											} else if ($jumlah >= 51) {
												$nilai['nilai'] = 'D';
											} else {
												$nilai['nilai'] = 'E';
											}
											?>
											<td> </?php echo $jumlah; ?></td>
												<td> </?php echo $nilai['nilai']; ?></td> -->
											<td>



												<a href="<?php echo base_url(); ?>penilaian/hapus/<?php echo $j['id']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('yakin?');">
													<i class="fas fa-trash"></i>
												</a>
												<!--<a href="</?php echo base_url(); ?>penilaian/cetak/<?php echo $j['id']; ?>" class="btn btn-warning btn-circle">
													<i class="fas fa-print"></i>
												</a> 
												<a href="</?php echo base_url(); ?>penilaian/ubah/</?php echo $j['id']; ?>" class="btn btn-success btn-circle">
													<i class="fas fa-edit"></i>
												</a>-->

											</td>
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
					<br>
					<!--  <php echo $this->pagination->create_links();
                    ?> -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>