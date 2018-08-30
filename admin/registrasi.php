		<div class="page-title">
           <div class="title-left">
                <h3>Form Registrasi Pemilih</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             <h2><small><font style="" color="red"><b>NOTE :</b></font> Kolom "ID" diisi sesuai dengan kode jurusan. <b>"1:TI, 2:MISI, 3:AK, 4:MA, 5:STEKOM".</b></small></h2>
             	 <div class="clearfix"></div>
             </div>
				<form action="" method="POST" class="form-horizontal form-label-left">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="id" class="form-control">
                            <option >-Kode Jurusan-</option>
                            <option >1 - Teknik Informatika</option>
                            <option >2 - Sistem Informasi</option>
                            <option >3 - Akuntansi</option>
                            <option >4 - Manajemen</option>
                            <option >5 - STEKOM</option>
                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NPM :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="NPM" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sandi :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="sandi" class="date-picker form-control col-md-7 col-xs-12" type="password">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama : </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="jurusan" class="form-control">
                            <option value="">-Pilih Jurusan-</option>
                            <option value="TI">Teknik Informatika</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="AK">Akuntansi</option>
                            <option value="MA">Manajemen</option>
                            <option value="MA">STEKOM</option>
                          </select>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="gender" class="form-control">
                          	<option value="">-Pilih Jenis Kelamin-</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                       
                   

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="regis" value="regis" class="btn btn-success">Registrasi</button>	
                          <button type="reset" name="reset" value="Reset" class="btn btn-primary">Reset</button>
                         
                        </div>
                      </div>

                </form>

        <?php
            include"../koneksi.php";
            if(@$_POST['regis']){
              $id       = @$_POST['id'];
              $npm      = @$_POST['NPM'];
              $sandi    = @$_POST['sandi'];
              $nama     = @$_POST['nama'];
              $jurusan  = @$_POST['jurusan'];
              $gender   = @$_POST['gender'];


                if($id == '' || $npm == '' || $sandi == '' || $nama == '' || $jurusan == '' || $gender == '' ) {
                	?> <script type="text/javascript"> alert('Tidak Boleh Ada Yang Kosong !');</script> <?php
                	} else {
                		$sql_regis = mysql_query("insert into user values ('$id','$npm','$sandi', '$nama', '$jurusan', '$gender') ") or die(mysql_error());
                		if($sql_regis){
                			?> 
                        <script type="text/javascript">
                            alert("Data Berhasil di Tambahkan");
                            window.location.href="?page=siswa";
                        </script>
                      <?php

                	}

                		}

                		}
                	
                ?>

            </div>
            </div>
            </div>
            </div>



