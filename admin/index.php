<?php 
  @session_start();
  include"../koneksi.php";

  if(@$_SESSION['username'] ){

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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendors/nprogress.css">
  
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/pemira/admin" class="site_title"><i class="fa fa-paw"></i> <span>Halaman Admin</span></a>
            </div>

            <div class="clearfix"></div>
            <?php
              
              $sql = mysql_query("select * from admin where ID") or die(mysql_error());
              $data = mysql_fetch_array($sql);
            ?>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/admin.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $data['nama']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i>Input Data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=registrasi">Input Mahasiswa/i</a></li>
                        <li><a href="?page=siswa">Lihat Pemilih</a></li>
                    </ul>
<li><a href="?page=hasil"><i class="fa fa-clone"></i>Hasil Suara</a></li>                  </li>
                  
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
                    <img src="images/admin.jpg" alt="Admin"><?php echo $data['nama'] ;?>
                    <span class=" fa fa-angle-down"></span>
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
              if($page == "registrasi"){
                include"registrasi.php";
              } elseif ($page == "siswa") {
                include"lihat_siswa.php";
              }elseif ($page == "edit") {
                include"edit.php";
              } elseif ($page == "hapus") {
                include"hapus.php";
              } elseif ($page == "hasil") {
                include "hasil.php";
              } elseif ($page == "hasilvot") {
                include "hasilvot.php";
              } else if ($page == ""){
                include"welcome.php";
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
     <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/Chart.min.js"></script>
    <script src="vendors/Chart.js"></script>
    <script src="vendors/nprogress.js"></script>
    <!-- Chart.js -->

    <?php 

		          include '../koneksi.php';
		          $bem1 = mysql_query("select * from hasil_bem where no_urut = '1' ");
		          $bem2 = mysql_query("select * from hasil_bem where no_urut = '2' ");
		          $bem3 = mysql_query("select * from hasil_bem where no_urut = '3' ");
		          $bem4 = mysql_query("select * from hasil_bem where no_urut = '4' ");
		          $bem5 = mysql_query("select * from hasil_bem where no_urut = '5' ");
		          $bem6 = mysql_query("select * from hasil_bem where no_urut = '6' ");
		          $bem7 = mysql_query("select * from hasil_bem where no_urut = '7' ");
		          $urut1 = mysql_num_rows($bem1);
		          $urut2 = mysql_num_rows($bem2);
		          $urut3 = mysql_num_rows($bem3);
		          $urut4 = mysql_num_rows($bem4);
		          $urut5 = mysql_num_rows($bem5);
		          $urut6 = mysql_num_rows($bem6);
		          $urut7 = mysql_num_rows($bem7);


		          $total1 = $urut1*100/100;
		          $total2 = $urut2*100/100;
		          $total3 = $urut3*100/100;
		          $total4 = $urut4*100/100;
		          $total5 = $urut5*100/100;
		          $total6 = $urut6*100/100;
		          $total7 = $urut7*100/100;

		?>

    <script>
      Chart.defaults.global.legend = {
        enabled: false
      };

      // Bar chart
      var ctx = document.getElementById("mybarChart");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Andri & Liana", "Agung & Rina", "Komang & Andiro", "Raka & Ganda", "Ekky & Wike"],
          datasets: [{
            label: 'Total Suara ',
            backgroundColor: "#26B99A",
            data: [
                    <?php echo $total1. ""; ?>, 
                    <?php echo $total2. ""; ?>,
                    <?php echo $total3. ""; ?>,
                    <?php echo $total4. ""; ?>,
                    <?php echo $total5. ""; ?>,
                    <?php echo $total6. ""; ?>
                  ]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });


<?php 

		          include '../koneksi.php';
		          $sql1 = mysql_query("select * from hasil_hima where no = '11' ");
		          $sql2 = mysql_query("select * from hasil_hima where no = '2' ");
		          $sql3 = mysql_query("select * from hasil_hima where no = '3' ");
		          $sql4 = mysql_query("select * from hasil_hima where no = '4' ");
		          $sql5 = mysql_query("select * from hasil_hima where no = '5' ");
		          
		          $urut1 = mysql_num_rows($sql1);
		          $urut2 = mysql_num_rows($sql2);
		          $urut3 = mysql_num_rows($sql3);
		          $urut4 = mysql_num_rows($sql4);
		          $urut5 = mysql_num_rows($sql5);
		          

		          $total1 = $urut1*100/100;
		          $total2 = $urut2*100/100;
		          $total3 = $urut3*100/100;
		          $total4 = $urut4*100/100;
		          $total5 = $urut5*100/100;
		          

		?>

      <?php
              
              $sql = mysql_query("select * from ca_hima where jurusan ='AK' ") or die(mysql_error());
              $ak = mysql_fetch_array($sql);
      ?>

      <?php
              
              $sql1 = mysql_query("select * from hasil_hima where jurusan ='AK' ") or die(mysql_error());
              $ak1 = mysql_fetch_array($sql1);
      ?>

      // Bar chart Hima
      var ctx = document.getElementById("hasilhimaTI");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
                    "<?php echo $ak['calon_hima'] ;?>", 
                  ],
          datasets: [{
            label: '# of Votes',
            backgroundColor: "#26B99A",
            data: [<?php echo $total1.""; ?>, 30, 40, 28, 92, 50, 45]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });


            // Bar chart Hima AK
      var ctx = document.getElementById("hasilhimaAK");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [{
            label: '# of Votes',
            backgroundColor: "#26B99A",
            data: [51, 30, 40, 28, 92, 50, 45]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });

    </script>
  </body>
</html>
<?php  
  } else {
    header("location: ../index.php");
  }
?>