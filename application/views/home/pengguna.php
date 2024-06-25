<div class="card">
    <div class="container">


        <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pengguna<strong> Berhasil </strong> <?php echo $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
        <?php endif; ?>

        <h3 style="font-family: 'Times New Roman', Times, serif;">Pengguna Sistem Penilaian Calon Pegawai SMK Ikasari
            Pekanbaru</h3>
        <br>

        <div class="row mt-6 ">
            <div class="col-md-6 ">
                <div class="col-mr-5">
                    <!-- searching -->
                    <input id="myInput" type="text" placeholder="Cari data.." autofocus>

                    <a href="<?php echo base_url(); ?>Auth/registration" class="btn btn-primary"><i class="fa fa-plus">
                            Tambah Pengguna</i><a>
                </div>
            </div>
        </div>

        <div class="row mt-3 ">
            <div class="col-md-8">


                <div class="card ">
                    <div class="table-responsive ">
                        <table class="table" id="employee_table">
                            <thead style="font-family: 'Times New Roman', Times, serif;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>username</th>
                                    <th>role</th>


                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody id="myTable" style="font-family: 'Times New Roman', Times, serif;">
                                <tr>
                                    <?php
                                    $start = 0;
                                    if (!empty($pengguna)) {
                                        foreach ($pengguna as $j) { ?>
                                    <td><?php echo ++$start; ?></td>
                                    <td><?php echo $j['nama']; ?></td>
                                    <td> <?php echo $j['username']; ?></td>
                                    <?php if ($j['role_id'] == 3) {
                                                $role['role'] = "Staff Madrasah";
                                            } else if ($j['role_id'] == 2) {
                                                $role['role'] =  "Kepala Madrasah";
                                            } else {
                                                $role['role'] = "Administrator";
                                            }; ?>
                                    <td> <?php
                                                    echo $role['role']; ?>
                                    </td>



                                    <td>
                                        <a href="<?php echo base_url(); ?>user/hapus/<?php echo $j['id']; ?>"
                                            class="btn btn-danger btn-circle" onclick="return confirm('yakin?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a href="<?php echo base_url(); ?>user/ubah/<?php echo $j['id']; ?>"
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
                    <!--  <php echo $this->pagination->create_links();
                    ?> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>