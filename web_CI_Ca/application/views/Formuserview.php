<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Input User</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url()."index.php/Usercontroller/insert";?>" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nim">User Name</label>
                        <input type="text" class="form-control" name="username" id="nim" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Password</label>
                        <input type="text" class="form-control" name="password" id="nama_lengkap" placeholder="Password"required>
                    </div>
                    <div class="form-group">
                        <label for="nama_panggilan">level</label>
                        <input type="text" class="form-control" name="level" id="nama_panggilan" placeholder="level">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama Lengkap</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">foto</label>
                        <input type="file" name="gambar" accept="image/*">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
            <div class="box-footer">
                &copy; Institut Teknologi dan Bisnis Bina Sarana Global
            </div>
        </div>
</section>


