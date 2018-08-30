 <div class="title-left">
      <h3>Data Calon HIMA</h3>
  </div>
<div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Jurusan</th>
                          <th>Nomor</th>
                          <th>Alamat</th>
                          <th>Calon Hima</th>
                          <th>Visi</th>
                          <th>Misi</th>
                          <th>Pengalaman</th>
                          <th>Foto</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>

                      <?php 
                        $data = mysql_query("select * from ca_hima where id") or die(mysql_error());
                        while ($cek = mysql_fetch_array($data)) {
                      ?>


                      <tbody>
                        <tr>
                          <td><?php echo $cek['id']; ?></td>
                          <td><?php echo $cek['jurusan']; ?></td>
                          <td><?php echo $cek['no']; ?></td>
                          <td><?php echo $cek['Alamat'];?></td>
                          <td><?php echo $cek['calon_hima']; ?> </td>
                          <td><?php echo $cek['visi']; ?></td>
                          <td><?php echo $cek['misi']; ?></td>
                          <td><?php echo $cek['pengalaman']; ?> </td>
                          <td align="center">
                            <img src="images/<?php echo $cek['foto']; ?>" width="120px">
                          </td>
                          <td align="center">
                              <a href="?page=edit_hima&no=<?php echo $cek['no']; ?>">
                                <button class="btn btn-round btn-primary">Edit</button>
                              </a>
                              <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=hapus_hima&no=<?php echo $cek['no']; ?>">
                                <button class="btn btn-round btn-success">Hapus</button>
                              </a>
                          </td>
                        </tr>
                      </tbody>
                      <?php
                        }
                        ?>

                      </table>
</div>