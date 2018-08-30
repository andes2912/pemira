<?php 
  @session_start();
  include"../koneksi.php";

  if(@$_SESSION['iduser'] ){

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN - E-Votting DARMAJAYA</title>

    <!-- Bootstrap -->
    <link href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
    <!-- Custom Theme Style -->
    <link href="../admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/pemira/superadmin" class="site_title"><i class="fa fa-paw"></i> <span>Halaman Admin</span></a>
            </div>

            <div class="clearfix"></div>
            <?php
              
              $sql = mysql_query("select * from superadmin where iduser") or die(mysql_error());
              $data = mysql_fetch_array($sql);
            ?>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/super.jpg" alt="Super Admin" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $data['name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Super Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i>Input Data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=pres">Input BEM</a></li>
                      <li><a href="?page=hima">Input HIMA</a></li>
                       <li><a href="?page=add_admin">Input Admin</a></li>
                      
                    </ul>
                  </li>

                   <li><a><i class="fa fa-clone""></i>Tampil Data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=tampilbem">Lihat Data BEM</a></li>
                      <li><a href="?page=tampilhima">Luhat Data HIMA</a></li>
                    </ul>
                  </li>
                  <li><a href="?page=hasil"><i class="fa fa-clone""></i>Hasil Suara</a></li>
                </ul>
                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/super.jpg" alt="">Super Admin
                    <span class="fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li><a href="../keluar.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
          <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">

		 <?php
              $page = @$_GET['page'];
              if($page == ""){
                include"welcome.php";
              } else if($page =="pres"){
                include"input_bem.php";
              } else if ($page == "hima"){
                include"input_hima.php";
              } else if ($page == "hasil") {
                include"../admin/hasil.php";
              } else if ($page == "tampilbem") {
                include"tampilbem.php";
              } else if ($page == "tampilhima") {
                include"tampilhima.php";
              } else if ($page == "edit_bem") {
                include"edit_bem.php";
              } else if ($page == "hapusbem") {
                include"hapus_bem.php";
              } else if ($page == "edit_hima") {
                include"edit_hima.php";
              } elseif ($page == "hapus_hima") {
                include"hapus_hima.php";
              } elseif ($page == "add_admin") {
                include"add_admin.php";
              }
             
            ?>
            </div>
            </div>
            </div>
 

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="../admin/build/js/custom.min.js"></script>
     <!-- Bootstrap -->
    <script src="../admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>
<?php  
  } else {
    header("location: ../index.php");
  }
?>