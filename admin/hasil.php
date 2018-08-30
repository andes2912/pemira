           <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Presiden BEM</small></h2>
             	 <div class="clearfix"></div>
             </div>


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

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '1'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '2'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '3'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '4'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total4."%"; ?>">
					<?php echo $total4. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '5'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total5."%"; ?>">
					<?php echo $total5. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '6'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total6."%"; ?>">
					<?php echo $total6. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '7'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total7."%"; ?>">
					<?php echo $total7. ""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>


<!--Teknik Informatika-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Teknik Informatika</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql1 = mysql_query("select * from hasil_hima where no = '1' ");
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

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '1'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total1.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '2'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '3'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '4'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total4."%"; ?>">
					<?php echo $total4.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '5'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total5."%"; ?>">
					<?php echo $total5.""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>


<!-- Sistem Informasi -->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Sistem Informasi</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql6 = mysql_query("select * from hasil_hima where no = '6' ");
		          $sql7 = mysql_query("select * from hasil_hima where no = '7' ");
		          $sql8 = mysql_query("select * from hasil_hima where no = '8' ");
		          $sql9 = mysql_query("select * from hasil_hima where no = '9' ");
		          $sql10 = mysql_query("select * from hasil_hima where no = '10' ");
		          
		          $urut6 = mysql_num_rows($sql6);
		          $urut7 = mysql_num_rows($sql7);
		          $urut8 = mysql_num_rows($sql8);
		          $urut9 = mysql_num_rows($sql9);
		          $urut10 = mysql_num_rows($sql10);
		          

		          $total6 = $urut6*100/100;
		          $total7 = $urut7*100/100;
		          $total8 = $urut8*100/100;
		          $total9 = $urut9*100/100;
		          $total10 = $urut10*100/100;
		          

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '6'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total6."%"; ?>">
					<?php echo $total6.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '7'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total7."%"; ?>">
					<?php echo $total7.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '8'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total8.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '9'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total9."%"; ?>">
					<?php echo $total9.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '10'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total10."%"; ?>">
					<?php echo $total10.""; ?>
				</div>
			</div>
			</div>



</div>
</div>
</div>


<!-- Akuntansi-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Akuntansi</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql11 = mysql_query("select * from hasil_hima where no = '11' ");
		          $sql12 = mysql_query("select * from hasil_hima where no = '12' ");
		          $sql13 = mysql_query("select * from hasil_hima where no = '13' ");
		          $sql14 = mysql_query("select * from hasil_hima where no = '14' ");
		          $sql15 = mysql_query("select * from hasil_hima where no = '15' ");
		          
		          $urut11 = mysql_num_rows($sql11);
		          $urut12 = mysql_num_rows($sql12);
		          $urut13 = mysql_num_rows($sql13);
		          $urut14 = mysql_num_rows($sql14);
		          $urut15 = mysql_num_rows($sql15);
		          

		          $total11 = $urut11*100/100;
		          $total12 = $urut12*100/100;
		          $total13 = $urut13*100/100;
		          $total14 = $urut14*100/100;
		          $total15 = $urut15*100/100;
		          

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '11'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total11."%"; ?>">
					<?php echo $total11.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '12'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total12."%"; ?>">
					<?php echo $total12.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '13'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total13."%"; ?>">
					<?php echo $total13.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '14'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total14."%"; ?>">
					<?php echo $total14.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '15'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total15."%"; ?>">
					<?php echo $total15.""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>


<!-- Manajemen -->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Manajemen </small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql16 = mysql_query("select * from hasil_hima where no = '16' ");
		          $sql17 = mysql_query("select * from hasil_hima where no = '17' ");
		          $sql18 = mysql_query("select * from hasil_hima where no = '18' ");
		          $sql19 = mysql_query("select * from hasil_hima where no = '19' ");
		          $sql20 = mysql_query("select * from hasil_hima where no = '20' ");
		          
		          $urut16 = mysql_num_rows($sql16);
		          $urut17 = mysql_num_rows($sql17);
		          $urut18 = mysql_num_rows($sql18);
		          $urut19 = mysql_num_rows($sql19);
		          $urut20 = mysql_num_rows($sql20);
		          

		          $total16 = $urut16*100/100;
		          $total17 = $urut17*100/100;
		          $total18 = $urut18*100/100;
		          $total19 = $urut19*100/100;
		          $total20 = $urut20*100/100;
		          

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '16'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total16."%"; ?>">
					<?php echo $total16.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '17'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total17."%"; ?>">
					<?php echo $total17.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '18'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total18."%"; ?>">
					<?php echo $total18.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '19'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total19."%"; ?>">
					<?php echo $total19.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '20'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total20."%"; ?>">
					<?php echo $total20.""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>

<!-- STEKOM-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan STEKOM </small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql21 = mysql_query("select * from hasil_hima where no = '21' ");
		          $sql22 = mysql_query("select * from hasil_hima where no = '22' ");
		          $sql23 = mysql_query("select * from hasil_hima where no = '23' ");
		          $sql24 = mysql_query("select * from hasil_hima where no = '24' ");
		          $sql25 = mysql_query("select * from hasil_hima where no = '25' ");
		          
		          $urut21 = mysql_num_rows($sql21);
		          $urut22 = mysql_num_rows($sql22);
		          $urut23 = mysql_num_rows($sql23);
		          $urut24 = mysql_num_rows($sql24);
		          $urut25 = mysql_num_rows($sql25);
		          

		          $total21 = $urut21*100/100;
		          $total22 = $urut22*100/100;
		          $total23 = $urut23*100/100;
		          $total24 = $urut24*100/100;
		          $total25 = $urut25*100/100;
		          

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '21'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total21."%"; ?>">
					<?php echo $total21.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '22'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total22."%"; ?>">
					<?php echo $total22.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '23'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total23."%"; ?>">
					<?php echo $total23.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '24'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total24."%"; ?>">
					<?php echo $total24.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '25'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total25."%"; ?>">
					<?php echo $total25.""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>