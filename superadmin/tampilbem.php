 <div class="title-left">
      <h3>Data Calon Presiden</h3>
  </div>
<div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p class="text-muted font-13 m-b-30">
          
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No Urut</th>
              <th>Calon Presiden</th>
              <th>Wakil Presiden</th>
              <th>Sebagai</th>
              <th>Jurusan</th>
              <th>Rekam Jejak</th>
              <th>Foto</th>
              <th>Pilihan</th>
            </tr>
          </thead>

          <?php 
            $data = mysql_query("select * from ca_bem where no_urut") or die(mysql_error());
            while ($cek = mysql_fetch_array($data)) {
          ?>


          <tbody>
            <tr>
              <td><?php echo $cek['no_urut']; ?></td>
              <td><?php echo $cek['capres']; ?></td>
              <td><?php echo $cek['cawapres']; ?></td>
              <td><?php echo $cek['sbg']; ?> </td>
              <td><?php echo $cek['jurusan']; ?></td>
              <td><?php echo $cek['rekamjejak']; ?> </td>
              <td><img src="images/<?php echo $cek['foto']; ?>" width="120px"></td>
              <td align="center">
                <a href="?page=edit_bem&no_urut=<?php echo $cek['no_urut'];?>">
                  <button class="btn btn-round btn-primary">Edit</button>
                </a>
                <a onclick="return confirm('Yakin Ingin Menghapus')" href="?page=hapusbem&no_urut=<?php echo $cek['no_urut']; ?>">
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