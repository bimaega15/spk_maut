<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <link rel="shortcut icon" href="assets/image/pondok.jpg">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                        </div>
                        <?php echo $this->session->flashdata('pesan'); ?>

                        <form class="user" method="post" action="<?php echo base_url('auth/registration'); ?> ">


                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-user" id="nama"
                                    placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>">
                                <?php echo form_error('nama', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user" id="username"
                                    placeholder="username" value="<?php echo set_value('username'); ?>">
                                <?php echo form_error('username', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" id="password1" name="password1"
                                        class="form-control form-control-user" name="password1"
                                        id="exampleInputPassword" placeholder="Password"><?php echo form_error('password1', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="password2"
                                        id="password2" id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role_id">Pengguna sebagai :</label>
                                <select class="form-control" id="role_id" name="role_id">
                                    <option value="1">Administrator</option>
                                    <option value="2">Kepala Madrasah</option>
                                    <option value="3">Staff Madrasah</option>

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                            <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>