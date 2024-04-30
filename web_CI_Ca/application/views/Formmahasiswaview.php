<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Input Mahasiswa</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url()."index.php/Mahasiswacontroller/insert";?>" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap"required>
                    </div>
                    <div class="form-group">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Telp"required>
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


