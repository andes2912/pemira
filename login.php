<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="css/flat-admin.css">

</head>
<body>
         
            <div class="app-container app-login">
            <div class="flex-center">
              
              <div class="app-body">
            
                <div class="app-block">
                <div class="app-form">
                  <div class="form-header">
                    <div class="app-brand">Silahkan Masuk</div>
                  </div>
                          <form action="" method="POST">
                            <div class="input-group">
                              
                              <input type="text" class="form-control" name="NPM" placeholder="NPM" aria-describedby="basic-addon1" require>
                            </div>
                              
                            <div class="input-group">
                              
                              <input type="Password" class="form-control" name="sandi" placeholder="Password" aria-describedby="basic-addon2" require>
                            </div>
                              
                            <div class="text-center">
                              <input type="submit" name="login" class="btn btn-primary btn-submit" value="Login">
                            </div>
                           <center>Kembali ke, <a href="index.php"> Home</a></center>
                          </form>


          


  <?php

include"koneksi.php";
@session_start();

if (@$_SESSION['NPM']) {
header("location:user/index.php");
}

if (@$_SESSION['username']) {
  header("location:admin/index.php");
}

if (@$_SESSION['iduser']){
  header("location:superadmin/index.php");
}

if (@$_POST['login']) {
  
  $npm = $_POST['NPM'];
  $sandi = $_POST['sandi'];

  $admin = mysql_query("select * from admin where username = '$npm' && password = '$sandi' ");
  $user = mysql_query("select * from user where NPM = '$npm' && sandi = '$sandi' ");
  $superadmin = mysql_query("select * from superadmin where iduser = '$npm' && pass = '$sandi' ");
  

  if (mysql_num_rows($admin)>0) {
    $_SESSION['username'] = "$npm";
    header("location: admin/index.php");

  } else if (mysql_num_rows($user)>0) {
    $_SESSION['NPM'] = "$npm";
    header("location: user/index.php");

  } else if (mysql_num_rows($superadmin)>0) {
    $_SESSION['iduser'] = "$npm";
    header("location: superadmin/index.php");
  }  else {

    echo "Masukkan Username & Password Dengan Benar";
    
  }
}

 ?>

 </div>
</div>
</body>
</html>

<?php ob_start(); ?>