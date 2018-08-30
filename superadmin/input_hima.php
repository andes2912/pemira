<div class="page-title">
           <div class="title-left">
                <h3>Input Calon HIMA</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small><font style="" color="red"><b>NOTE :</b></font> Kolom "ID" diisi sesuai dengan kode jurusan. <b>"1:TI, 2:MISI, 3:AK, 4:MA, 5:STEKOM".</b></small></h2>
             	 <div class="clearfix"></div>
             </div>
			<form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" >
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Jurusan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="id" class="form-control">
                            <option value="">-Kode Jurusan -</option>
                            <option >1 - Teknik Informatika</option>
                            <option >2 - Sistem Informasi</option>
                            <option >3 - Akuntansi</option>
                            <option >4 - Manajemen</option>
                            <option >5 - STEKOM</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Jurusan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="Jurusan" class="form-control">
                            <option value="">-Pilih Jurusan -</option>
                            <option value="TI">Teknik Informatika</option>
                            <option value="MISI">Sistem Informasi</option>
                            <option value="AK">Akuntansi</option>
                            <option value="MA">Manajemen</option>
                            <option value="STEKOM">Sistem Komputer</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Urut</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="no" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="Alamat" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Calon HIMA</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="calon_hima" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Visi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="visi" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="100" data-parsley-validation-threshold="15">
                          </textarea>
                        </div>
                       </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Misi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="misi" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="100" data-parsley-validation-threshold="15">
                          </textarea>
                        </div>
                       </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengalaman</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="pengalaman" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="100" data-parsley-validation-threshold="15">
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
                  $id               = @$_POST['id'];
                  $Jurusan          = @$_POST['Jurusan'];
                  $no               = @$_POST['no'];
                  $Alamat           = @$_POST['Alamat'];
                  $calon_hima       = @$_POST['calon_hima'];
                  $visi             = @$_POST['visi'];
                  $misi             = @$_POST['misi'];
                  $pengalaman       = @$_POST['pengalaman'];
                  $foto             = $_FILES['foto']['name'];
                  move_uploaded_file($_FILES['foto']['tmp_name'],"images/$foto");
                 

                  if($id == "" || $Jurusan == "" || $no == ""|| $Alamat == "" || $calon_hima == "" || $visi == "" || $misi == "" || $pengalaman == "" || $foto == "" ){
                    echo "Tidak ada boleh yang kosong";
                  } 
                            else  {
                            $sql_input = mysql_query("insert into ca_hima values('$id','$Jurusan','$no','$Alamat','$calon_hima','$visi','$misi','$pengalaman','$foto') ") or die(mysql_error());
                            if ($sql_input) {
                              echo "Berhasil";
                        } 


                    }
                  }
                

                ?>
                <!-- end Script Input Presiden -->


 </div>
            </div>
            </div>
            </div>