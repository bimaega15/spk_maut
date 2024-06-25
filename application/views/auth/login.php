<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">

                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white-900 mb-4">WELCOME!</h1>
                                    <link rel="shortcut icon" href="assets/image/ikasari.png">
                                    <img src="assets/image/ikasari.png" alt="image" height="150px" width="170px">
                                </div>
                                <br>

                                <?php echo $this->session->flashdata('pesan'); ?>



                                <form class="user" method="post" action="<?php echo base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            id="username" placeholder="masukkan username..."
                                            value="<?php echo set_value('username'); ?>"> <?php echo form_error('username', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password"> <?php echo form_error('password', '<small
                                     class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>

                                <center>

                                    <!--   <hr>    <div class="text-center">
                                </div>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div> 
-->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>