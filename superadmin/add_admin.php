<div class="page-title">
           <div class="title-left">
                <h3>Tambah Admin</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Form Untuk Menambahkan Admin</small></h2>
             	 <div class="clearfix"></div>
             </div>
			<form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" >

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ID" class="form-control col-md-7 col-xs-12" placeholder="ID Admin">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="username" class="date-picker form-control col-md-7 col-xs-12" type="text" placeholder="Username">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password" class="form-control col-md-7 col-xs-12" placeholder="Password">
                        </div>
                       </div>
                       
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" class="form-control col-md-7 col-xs-12" placeholder="Nama">
                        </div>
                       </div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="add" value="add" class="btn btn-success">Tambah</button>	
                          <button type="reset" name="reset" value="Reset" class="btn btn-primary">Reset</button>
                         
                        </div>
                      </div>

            </form>
            <?php
                include"../koneksi.php";
                if(@$_POST['add']){
                  $ID        = @$_POST['ID'];
                  $username  = @$_POST['username'];
                  $password  = @$_POST['password'];
                  $nama      = @$_POST['nama'];

                  if ($ID == "" || $username == "" || $password == "" || $nama == "") {
                    echo "Input Data Gagal !!";
                  } else {
                    $sql_add = mysql_query(" insert into admin values ('$ID','$username','$password','$nama') ") or die(mysql_error());
                    if ($sql_add) {
                      echo "Tambah admin berhasil";
                    }
                  }
                }

            ?>
</div>
</div>
</div>
