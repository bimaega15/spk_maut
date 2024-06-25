<div class="container">

    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header" style="background-color:darkseagreen; color : black;">
                    Form Ubah Data Kriteria
                </div>
                <div class="card-body">


                    <form action="" method="post" style="color:black">
                        <input type="hidden" name="id" value="<?php echo $kriteria['id']; ?>">

                        <div class="form-group">
                            <label for="kr1">PADAGOGIK</label>
                            <input type="text" name="kr1" class="form-control" id="kr1"
                                value="<?php echo $kriteria['kr1']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('kr1'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kr2">KEPRIBADIAN</label>
                            <input type="text" name="kr2" class="form-control" id="kr2"
                                value="<?php echo $kriteria['kr2']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('kr2'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kr1">SOSIAL</label>
                            <input type="text" name="kr3" class="form-control" id="kr3"
                                value="<?php echo $kriteria['kr3']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('kr3'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kr1">PROFESIONAL</label>
                            <input type="text" name="kr4" class="form-control" id="kr4"
                                value="<?php echo $kriteria['kr4']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('kr4'); ?></small>
                        </div>



                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>

                </div>

                <p style="color:orange;"> Keterangan : angka desimal menggunakan tanda baca titik (.) </p>
            </div>

        </div>
    </div>
</div>