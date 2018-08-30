<div class="page-title">
           <div class="title-left">
                <h3>Input Calon Presiden</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Isikan data-data yang diperlukan sebelum melakukan pemilihan</small></h2>
             	 <div class="clearfix"></div>
             </div>
			<form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" >

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Urut</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="no_urut" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Calon Presiden</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="capres" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Wakil Presiden</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cawapres" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Calon Sebagai</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sbg" class="form-control">
                          	<option value="">-Pilih Calon -</option>
                            <option value="BEM">Presiden BEM</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" name="alamat" data-parsley-maxlength="100" >
                          </textarea>
                        </div>
                       </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jurusan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jurusan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rekam Jejak</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" name="rekamjejak" data-parsley-maxlength="100" >
                          </textarea>
                        </div>
                       </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Visi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" name="visi" data-parsley-maxlength="100">
                          </textarea>
                        </div>
                       </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Misi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" name="misi" data-parsley-maxlength="100" >
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
                          <button type="submit" name="simpan" value="regis" class="btn btn-success">Input</button>	
                          <button type="reset" name="reset" value="Reset" class="btn btn-primary">Reset</button>
                         
                        </div>
                      </div>

                </form>

                <!-- Script Input Presiden-->
                <?php
                include"../koneksi.php";
                if(@$_POST['simpan']){
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
                 

                  if($no_urut == "" || $capres == "" || $cawapres == "" || $sbg == "" || $alamat == "" || $jurusan == "" || $rekamjejak == "" || $visi == "" || $misi == ""|| $foto == "" ){
                    ?> 
                      <script type="text/javascript">
                        alert("Gagal, Data Tidak Boleh Kosong !!");
                      </script>
                    <?php
                  } 
                            else  {
                            $sql_input = mysql_query("insert into ca_bem values('$no_urut','$capres','$cawapres','$sbg','$alamat','$jurusan','$rekamjejak','$visi','$misi','$foto') ") or die(mysql_error());
                            if ($sql_input) {
                              ?> <script type="text/javascript">
                                  alert("Input Data Hima Berhasil");
                                  window.location.href="?page=tampilbem";
                                </script>
                              <?php
                        } 


                    }
                  }
                

                ?>
                <!-- end Script Input Presiden -->


 </div>
            </div>
            </div>
            </div>