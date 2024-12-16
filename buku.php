<div class="card shadow mb-4">
   <div class="card-header py-3 text-center">
      <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
   </div>
   <br>
   <div class="col-md-6 mb-4 text-left">
      <a href="?page=fungsi/tambah_buku" class="btn btn-primary">Tambah Buku</a>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $i = 1;
               $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
               while ($data = mysqli_fetch_array($query)) {
               ?>
                  <tr>
                     <td><?php echo $i++; ?></td>
                     <td><?php echo $data['kategori']; ?></td>
                     <td><?php echo $data['judul']; ?></td>
                     <td><?php echo $data['penulis']; ?></td>
                     <td><?php echo $data['penerbit']; ?></td>
                     <td><?php echo $data['tahun_terbit']; ?></td>
                     <td>
                        <a class="fa fa-edit btn-info btn-circle" href="?page=fungsi/ubah_buku&&id=<?php echo $data['id_buku']; ?>"></a>
                         <a onclick="return confirm('asli bli pen diapus kuh?')" class="btn btn-danger btn-circle" href="?page=fungsi/hapus_buku&&id=<?php echo $data['id_buku']; ?>"><i class="fas fa-trash"></i></a>
                     </td>
                  </tr>
               <?php
               }
               ?>

               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>