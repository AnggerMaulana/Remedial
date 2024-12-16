<div class="card shadow mb-4">
   <div class="card-header py-3 text-center">
      <h6 class="m-0 font-weight-bold text-primary">peminjaman Buku</h6>
   </div>
   <br>
   <div class="col-md-6 mb-4 text-left">
      <a href="?page=fungsi/tambah_peminjaman" class="btn btn-primary">Pinjam Buku</a>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>User</th>
                  <th>Buku</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Tanggal Pengembalian</th>
                  <th>Status Peminjaman</th>
                  <th>Denda</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $i = 1;
               $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
               while ($data = mysqli_fetch_array($query)) {
               ?>
                  <tr>
                     <td><?php echo $i++; ?></td>
                     <td><?php echo $data['nama']; ?></td>
                     <td><?php echo $data['judul']; ?></td>
                     <td><?php echo $data['tanggal_peminjaman']; ?></td>
                     <td><?php echo $data['tanggal_pengembalian']; ?></td>
                     <td><?php echo $data['status_peminjaman']; ?></td>
                     <td><?php echo $data['denda']; ?></td>
                     <td>
                        <?php
                        if ($data['status_peminjaman'] != 'dikembalikan') {
                        ?>
                           <a class="fa fa-edit btn-info btn-circle" href="?page=fungsi/ubah_peminjaman&&id=<?php echo $data['id_peminjam']; ?>"></a>
                           <a onclick="return confirm('asli bli pen diapus kuh?')" class="fa fa-trash btn-danger btn-circle" href="?page=fungsi/hapus_peminjaman&&id=<?php echo $data['id_peminjam']; ?>"></a>
                        <?php
                        }
                        ?>
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