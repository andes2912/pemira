<!-- page content -->
 <?php
  $id = @$_GET['id'];
  $sql = mysql_query("select * from ca_hima where id = '$id'") or die(mysql_error());
  $tmpl = mysql_fetch_array($sql);
 
?>
            <div class="page-title">
              <div class="title">
                <h3>Tempat Pemilihan HIMA <?php echo$tmpl['jurusan']; ?></h3>
              </div>

              
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        
                          
                      </div>

                        <div class="clearfix"></div>

                       <?php

                          include "../koneksi.php";
                     
                          $id = @$_GET['id'];
                          $sql = mysql_query("select * from ca_hima where id = '$id'") or die(mysql_error());
                          while ( $tmpl = mysql_fetch_array($sql)) {
                         
                        ?>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><center>Calon HIMA <?php echo $tmpl['jurusan']; ?></center></h4>
                            </div> <br>
                              <div class="panel-body">
                                <img src="../admin/images/<?php echo $tmpl['foto']; ?>" class="img-responsive avatar-view">
                                <h2><center><?php echo $tmpl['calon_hima']; ?></center></h2>
                              </div>

                              <div class="col-xs-7">
                              </div>
                                <div class="col-xs-12 bottom text-center">
                                  <div style="float: left;" class="col-xs-12 col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-xs"> 
                                    
                                      <?php echo "<a href='vot_hima.php?no=$tmpl[no]'> <i class='fa fa-check-square-o'> Pilih </i> </a>";?> 
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs">
                                      <a href="?page=profile_hima&no=<?php echo $tmpl['no']; ?>"> Profile <i class="fa fa-user"> 
                                      </i></a>
                                    </button>
                              </div>
                            </div>
                          </div>
                        </div>
                 
                        <?php }
                        ?>
                      </div>
                      </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- Script Tampil Presiden -->
