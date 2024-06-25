<div class="container">

    <div class="card ">

        <div class="card">
            <div class="container">


                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-10">

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Calon Pegawai<strong> Berhasil </strong>
                                <?php echo $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>


                <h3 style="color: black;font-family: 'Times New Roman', Times, serif; ">Preferensi Penilaian Kinerja
                    Calon Pegawai</h3>



                <div class="row mt-3">
                    <div class="col-md-10">
                        <div class="card ">
                            <div class="table-responsive ">
                                <table class="table" class="table-error" id="employee_table" style="font-family: 'Times New Roman', Times, serif;">
                                    <thead class="table-info" style="color: black;">

                                        <tr>
                                            <th>Nama Calon Pegawai</th>
                                            <th>Nilai Preferensi</th>
                                            <th>Ranking</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: black;">

                                        <?php $no = 0;
                                        foreach ($penilaian as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->nama ?></td>
                                                <td><?php echo $row->nilai_preferensi;
                                                    ?></td>
                                                <td> <?php echo ++$no; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </body>

                            </div>
                        </div>
                    </div>
                </div>