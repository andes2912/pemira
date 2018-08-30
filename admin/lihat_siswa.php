 <div class="title-left">
      <h3>Data Calon Pemilih</h3>
  </div>
<div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NPM</th>
                          <th>Password</th>
                          <th>Nama</th>
                          <th>Jurusan</th>
                          <th>Jenis Kelamin</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>

                      <?php 
                        $data = mysql_query("select * from user where NPM") or die(mysql_error());
                        while ($cek = mysql_fetch_array($data)) {
                      ?>


                      <tbody>
                        <tr>
                          <td><?php echo $cek['id']; ?></td>
                          <td><?php echo $cek['NPM']; ?></td>
                          <td><?php echo $cek['sandi']; ?></td>
                          <td><?php echo $cek['nama']; ?> </td>
                          <td><?php echo $cek['jurusan']; ?></td>
                          <td><?php echo $cek['gender']; ?> </td>
                          <td align="center">
                          <a href="?page=edit&NPM=<?php echo $cek['NPM'];?>"><button class="btn btn-round btn-primary">Edit</button></a>
                          <a onclick="return confirm('Yakin Ingin Hapus ?')" href="?page=hapus&NPM=<?php echo$cek['NPM'];?>"><button class="btn btn-round btn-success">Hapus</button></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php
                        }
                        ?>

                      </table>
</div>