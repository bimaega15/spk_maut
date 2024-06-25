<div class="card">
	<div class="container">


		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="row mt-3">
				<div class="col-md-12">

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
			<h3 style="font-family: 'Times New Roman', Times, serif;">Penilaian Kinerja Guru MA Pondok Pesantren
				Muallimin
				Bangkinang</h3>
		</center>
		<div class="row mt-3 ">
			<div class="col-md-12">

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
									<th>NIK</th>
									<th>Posisi dilamar</th>
									<th>Nomor HP</th>
									<th>Jumlah Skor</th>


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

											<?php
											$jumlah = ($j['p1'] + $j['p2'] + $j['p3'] + $j['p4'] + $j['p5'] + $j['p6'] + $j['p7'] + $j['p8'] + $j['p9'] + $j['p10'] +
												$j['k1'] + $j['k2'] + $j['k3'] + $j['k4'] + $j['s1'] + $j['s2']
												+ $j['pr1'] + $j['pr2'] + $j['pr3']);


											?>


											<td> <?php echo $jumlah; ?></td>






											</a>
											<a href="<?php echo base_url(); ?>penilaian/cetak/<?php echo $j['id']; ?>" class="btn btn-warning btn-circle">
												<i class="fas fa-print"></i>
											</a>


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