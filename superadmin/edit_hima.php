<div class="page-title">
   <div class="title-left">
        <h3>Edit Calon HIMA</h3>
    </div>
     <div class="clearfix"></div>
     <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="x_panel">
     <div class="x_title">
     	<h2><small><font style="" color="red"><b>NOTE :</b></font> Kolom "ID" diisi sesuai dengan kode jurusan. <b>"1:TI, 2:MISI, 3:AK, 4:MA, 5:STEKOM".</b></small></h2>
     	 <div class="clearfix"></div>
     </div>

     <?php
     	$no = @$_GET['no'];
     	$data = mysql_query("select * from ca_hima where no = '$no'") or die(mysql_error());
     	$cek = mysql_fetch_array($data);
     ?>
		<form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" >
		          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Jurusan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="id" class="form-control">
                <option value="<?php echo $cek['jurusan']; ?>">- Kode Jurusan -</option>
                <option value="TI">1 - Teknik Informatika</option>
                <option value="MISI">2 - Sistem Informasi</option>
                <option value="AK">3 - Akuntansi</option>
                <option value="MA">4 - Manajemen</option>
                <option value="STEKOM">5 - STEKOM</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Jurusan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="jurusan" class="form-control">
                <option value="<?php echo $cek['jurusan']; ?>">-Pilih Jurusan -</option>
                <option value="TI">Teknik Informatika</option>
                <option value="MISI">Sistem Informasi</option>
                <option value="AK">Akuntansi</option>
                <option value="MA">Manajemen</option>
                <option value="STEKOM">STEKOM</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Urut</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="no" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $cek['no']; ?>">
            </div>
          </div>

          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="Alamat" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $cek['Alamat']; ?>">
                        </div>
                      </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Calon HIMA</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="calon_hima" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $cek['calon_hima']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Visi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="message" required="required" class="form-control" name="visi" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="100" data-parsley-validation-threshold="15"><?php echo $cek['visi']; ?>
              </textarea>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Misi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="message" required="required" class="form-control" name="misi" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="100" data-parsley-validation-threshold="15"><?php echo $cek['misi']; ?>"
              </textarea>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengalaman</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="message" required="required" class="form-control" name="pengalaman" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="100" data-parsley-validation-threshold="15"> <?php echo $cek['pengalaman']; ?>
              </textarea>
            </div>
           </div>
	           
	        <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	              <input type="file" name="foto" class="form-control col-md-7 col-xs-12">
	            </div>
	         </div>

	          <div class="form-group">
	            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	              <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>	
	              <a href="?page=tampilhima"><button type="batal" name="batal" value="batal" class="btn btn-success">Batal</a></button>
	             
	            </div>
	          </div>

		</form>

		<?php
		if (@$_POST['update']) {
			$id 		     = $_POST['id'];
			$jurusan 	   = $_POST['jurusan'];
			$no 		     = $_POST['no'];
      $Alamat      = $_POST['Alamat'];
			$calon_hima  = $_POST['calon_hima'];
			$visi 		   = $_POST['visi'];
			$misi 		   = $_POST['misi'];
			$pengalaman  = $_POST['pengalaman'];
			$foto 		   = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],"images/$foto");

			$update = mysql_query("update ca_hima set id ='$id', jurusan = '$jurusan', no = '$no', Alamat ='$Alamat', calon_hima = '$calon_hima',visi = '$visi', misi = '$misi', pengalaman = '$pengalaman', foto = '$foto' where no = '$no'") or die(mysql_error());
			if ($update) {
				?>
				<script type="text/javascript">
					alert("Data Berhasil di Update !");
					window.location.href="?page=tampilhima";
				</script>
				<?php
			}



		}
		?>
</div>
</div>
</div>