<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle; ?></H1>


    <div class="row">
        <div class="col-lg-4">
            <?php echo $this->session->flashdata('pesan'); ?>


            <form action="<?php echo base_url('Home/gantiPassword'); ?>" method="post">


                <div class="form-group">
                    <label for="current_password">Password Saat Ini</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="new_password1">Password Baru</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="new_password2">Ulangi Password Baru</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Ganti</button>
                </div>
        </div>




        </form>
    </div>
</div>
</div>