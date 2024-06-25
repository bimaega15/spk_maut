<div class="card">
	<div class="container">


		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="row mt-3">
				<div class="col-md-10">

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Kriteria<strong> Berhasil </strong> <?php echo $this->session->flashdata('flash'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

				</div>
			</div>
		<?php endif; ?>


		<center>
			<h3 style="color: black; font-family: 'Times New Roman', Times, serif">Kriteria Penilaian Guru</h3>
		</center>

		<br>
		<div class="col-md-10">
			<div class="card ">
				<div class="table-responsive ">
					<table class="table" id="employee_table">
						<thead class="thead-dark" style="font-family: 'Times New Roman', Times, serif">
							<tr>

								<th>Kode</th>
								<th>Kriteria</th>
								<th>Bobot</th>

							</tr>
						</thead>

						<tbody id="myTable" style="color: black; font-family: 'Times New Roman', Times, serif">

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
					<a href="<?php echo base_url(); ?>kriteria/ubah/<?php echo $k['id']; ?>" class="btn btn-success btn-icon-split">
						<span class="icon text-white-50">
							<i class="fas fa-edit"></i>
						</span>
						<span class="text">Ubah Data</span>
					</a>
				</div>
			</div>

		</div>




		<div class="row mt-6 ">
			<div class="col-md-6 ">
				<div class="col-mr-5">






				</div>
			</div>
		</div>
	</div>

</div>

</div>