<div class="container">


    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <link rel="shortcut icon" href="assets/image/pondok.jpg">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Form Ubah Alternatif</h1>
                        </div>


                        <div class="card-body">


                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $guru['id_guru']; ?>">


                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="nama"
                                        placeholder="Masukkan nama lengkap guru"
                                        value="<?php echo $guru['nama']; ?><?php echo set_value('nama'); ?>">
                                    <?php echo form_error('nama', '<small
             class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nip" class="form-control form-control-user" id="nip"
                                        placeholder="Masukkan NIP guru"
                                        value=" <?php echo $guru['nip']; ?><?php echo set_value('nip'); ?>">
                                    <?php echo form_error('nip', '<small
             class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mapel" class="form-control form-control-user" id=mapel"
                                        placeholder="Masukkan mata pelajaran"
                                        value=" <?php echo $guru['mapel']; ?><?php echo set_value('mapel'); ?>">
                                    <?php echo form_error('mapel', '<small
             class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kelas" class="form-control form-control-user" id="kelas"
                                        placeholder="Masukkan kelas guru"
                                        value="  <?php echo $guru['kelas']; ?><?php echo set_value('kelas'); ?>">
                                    <?php echo form_error('kelas', '<small
             class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="ki" class="form-control form-control-user" id="ki"
                                        placeholder="Masukkan kompetensi inti"
                                        value=" <?php echo $guru['ki']; ?><?php echo set_value('ki'); ?>">
                                    <?php echo form_error('kompetensi inti', '<small
             class="text-danger pl-3">', '</small>'); ?>
                                </div>




                                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>