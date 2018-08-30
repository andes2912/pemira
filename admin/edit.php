<div class="page-title">
<div class="title-left">
<h3>Form Registrasi Pemilih</h3>
</div>
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2><small>Isikan data-data yang diperlukan sebelum melakukan pemilihan</small></h2>
 <div class="clearfix"></div>
</div>

    <?php
    $NPM = $_GET['NPM'];
    $sql = mysql_query("select * from user where NPM = '$NPM' ") or die(mysql_error());
    $data = mysql_fetch_array($sql);
    ?>
        <form action="" method="POST" class="form-horizontal form-label-left">

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ID :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="id" class="form-control col-md-7 col-xs-12" value="<?php echo $data['id']; ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NPM :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="NPM" class="form-control col-md-7 col-xs-12" value="<?php echo $data['NPM']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sandi :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sandi" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $data['sandi']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama : </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="nama" class="form-control col-md-7 col-xs-12" value="<?php echo $data['nama']; ?>">
                </div>
               </div>

                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="jurusan" class="form-control" ">
                    <option value="<?php echo $data['jurusan']; ?>">-Pilih Jurusan-</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="MISI">Sistem Informasi</option>
                    <option value="AK">Akuntansi</option>
                    <option value="MA">Manajemen</option>
                  </select>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="gender" class="form-control">
                    <option value="<?php echo $data['gender']; ?>">-Pilih Jenis Kelamin-</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>  
                  <a href="?page=siswa"><button type="reset" name="reset" value="reset" class="btn btn-success">Batal</a>
                  </button>
                </div>
              </div>

        </form>

    <?php
        include"../koneksi.php";
        if(@$_POST['update']){
        $id       = @$_POST['id'];
        $NPM      = @$_POST['NPM'];
        $sandi    = @$_POST['sandi'];
        $nama     = @$_POST['nama'];
        $jurusan  = @$_POST['jurusan'];
        $gender   = @$_POST['gender'];


        $update = mysql_query("update user set id = '$id', NPM = '$NPM', sandi = '$sandi', nama = '$nama', jurusan = '$jurusan', gender = '$gender' where NPM ='$NPM' ") or die(mysql_error());
        if($update){
            ?> 
                <script type="text/javascript">
                    alert("Data Berhasil di Update");
                    window.location.href="?page=siswa";
                </script>
            <?php

                }

            }

    ?>
</div>
</div>
</div>