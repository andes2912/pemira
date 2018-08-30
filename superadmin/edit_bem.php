
<div class="page-title">
     <div class="title-left">
          <h3>Edit Calon Presiden</h3>
      </div>
       <div class="clearfix"></div>
       <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
       <div class="x_title">
       	<h2><small>Isikan data-data yang diperlukan sebelum melakukan pemilihan</small></h2>
       	 <div class="clearfix"></div>
       </div>

       <?php
          $no_urut = $_GET['no_urut'];
          $data = mysql_query("select * from ca_bem where no_urut = '$no_urut'") or die(mysql_error());
          $cek = mysql_fetch_array($data);
      ?>
			<form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" >

           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Urut</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="no_urut" class="form-control col-md-7 col-xs-12" value="<?php echo $cek['no_urut'];?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Calon Presiden</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="capres" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $cek['capres'];?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Wakil Presiden</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="cawapres" class="form-control col-md-7 col-xs-12" value="<?php echo $cek['cawapres'];?>">
            </div>
           </div>

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Calon Sebagai</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="sbg" class="form-control" >
              	<option value="<?php echo $cek['sbg'];?>">-Pilih Calon -</option>
                <option value="BEM">Presiden BEM</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" name="alamat" value="">
              <?php echo $cek['alamat'];?>"
              </textarea>
            </div>
           </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jurusan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="jurusan" class="form-control col-md-7 col-xs-12" value="<?php echo $cek['jurusan'];?>">
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Rekam Jejak</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" name="rekamjejak">
              <?php echo $cek['rekamjejak'];?>
              </textarea>
            </div>
           </div>

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Visi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" name="visi">
              <?php echo $cek['visi'];?>
              </textarea>
            </div>
           </div>

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Misi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" name="misi"> 
              <?php echo $cek['misi'];?>
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
              <a href="?page=tampilbem"><button type="reset" name="batal" value="batal" class="btn btn-success">Batal</a></button>
             
            </div>
          </div>

    </form>
     <!-- Script Input Presiden-->
        <?php
        include"../koneksi.php";
        if(@$_POST['update']){
          $no_urut    = @$_POST['no_urut'];
          $capres     = @$_POST['capres'];
          $cawapres   = @$_POST['cawapres'];
          $sbg        = @$_POST['sbg'];
          $alamat     = @$_POST['alamat'];
          $jurusan    = @$_POST['jurusan'];
          $rekamjejak = @$_POST['rekamjejak'];
          $visi       = @$_POST['visi'];
          $misi       = @$_POST['misi'];
          $foto        = $_FILES['foto']['name'];
          move_uploaded_file($_FILES['foto']['tmp_name'],"images/$foto");
         
              $update = mysql_query("update ca_bem set no_urut = '$no_urut', capres = '$capres', cawapres = '$cawapres', sbg = '$sbg', alamat = '$alamat', jurusan = '$jurusan', rekamjejak = '$rekamjejak', visi = '$visi', misi = '$misi', foto = '$foto' where no_urut = '$no_urut' ") or die(mysql_error());
              if ($update) {
                ?> 
                <script type="text/javascript">
                  alert("Data Berhasil di Update");
                  window.location.href="?page=tampilbem";  
                </script>  
                <?php
              }  
              } 
         ?>

</div>
</div>
</div>