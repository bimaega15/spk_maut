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

        <h3> Data Alternatif</h3>

        <div class="row mt-3 ">
            <div class="col-md-6">



                <?php if (empty('guru')) : ?>
                <div class="alert alert-danger" role="alert">Data tidak ditemukan.</div>
                <?php endif; ?>


            </div>
        </div>



        <div class="row mt-6 ">
            <div class="col-md-6 ">
                <div class="col-mr-5">
                    <!-- searching -->
                    <input id="myInput" type="text" placeholder="Search.." autofocus>

                    <a href="<?php echo base_url(); ?>guru/tambah" class="btn btn-primary"><i class="fa fa-plus">
                            Tambah Data</i><a>






                </div>
            </div>
        </div>

        <div class="row mt-3 ">
            <div class="col-md-10">


                <div class="card ">
                    <div class="table-responsive ">
                        <table class="table" id="employee_table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Posisi Lamaran</th>
                                    <th>nomor HP</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <?php if (!empty($guru)) {
                                        foreach ($guru as $guru) { ?>
                                    <td><?php echo ++$start; ?></td>
                                    <td><?php echo $guru['nama']; ?></td>
                                    <td> <?php echo $guru['nip']; ?></td>
                                    <td> <?php echo $guru['mapel']; ?></td>
                                    <td> <?php echo $guru['kelas']; ?></td>
                                    <td> <?php echo $guru['ki']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>guru/hapus/<?php echo $guru['id_guru']; ?>"
                                            class="btn btn-danger btn-circle" onclick="return confirm('yakin?');">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <a href="<?php echo base_url(); ?>guru/ubah/<?php echo $guru['id_guru']; ?>"
                                            class="btn btn-success btn-circle">
                                            <i class="fas fa-edit"></i>
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
                    <?php echo $this->pagination->create_links();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>