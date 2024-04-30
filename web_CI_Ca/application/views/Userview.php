<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
        </div>
        <div class="box-body">
            <div class="row" style="margin-bottom:10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('../index.php/Usercontroller/form_input'),'Input','class="btn btn-primary"');?>
            </div>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>level</th>
                    <th>Nama Lengkap</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no =1;
                foreach($user as $usr)
                {
                    ?>
                    <tr>
                        <td width="80px"><?php echo $no++ ?></td>
                        <td><?php echo $usr->username ?></td>
                        <td><?php echo $usr->level ?></td>
                        <td><?php echo $usr->nama_lengkap ?></td>
                        <td><?php echo $usr->foto ?></td>
                        <td>
                            <?php
                            echo anchor(site_url('../index.php/Mahasiswacontroller/form_update/'.$usr->username),'<button type="button" class="btn btn-warning btn-xs">Update</button>');
                            echo '&nbsp';
                            echo anchor(site_url('../index.php/Mahasiswacontroller/delete/'.$usr->username),'<button type="button" class="btn btn-danger btn-xs">Delete</button>','onclick="javascript: return confirm(\'Are You Sure?\')"');
                            ?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section> 