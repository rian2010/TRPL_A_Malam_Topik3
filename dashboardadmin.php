<?php include("headeradmin.php") ;?>

    <div class="p-5 pt-5">
        <h3><i class="fas fa-tachometer-alt mr-3"></i> DASHBOARD </a><hr class="bg-secondary"></h3>
    <div class="container-fluid text-light" style="height: 100vh;">
        
    <div class="nav row justify-content-evenly text-center align-items-center">
      <div class="col-sm-8">
        <div class="card text-bg-secondary mb-3">
          <div class="card-body">
            <h3 class="card-title fw-bold">DAFTAR VERIFIKASI PERALATAN</h3>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-sm-13 pt-3">
          <div class="card bg-light text-black">
            <div class="card-body">
                
                <table class="table pt-4 text-dark">
                    <thead class="table-dark">
                      <tr>
                        <td scope="col">No</td>
                        <td scope="col">Id_Barang</td>
                        <td scope="col">Nama Barang</td>
                        <td scope="col">Jumlah</td>
                        <td scope="col">Peminjam</td>
                        <td scope="col">Tanggal Peminjaman</td>
                        <td scope="col">Tanggal Pengembalian</td>
                        <td scope="col">Status</td>
                        <td scope="col">Tindakan</td>
                      </tr>
                    </thead>
                  <tbody>


<?php     
include "config.php";
$nomor = 1;
$query = mysqli_query($db,"SELECT peminjaman.id, peminjaman.id_barang, peminjaman.nama_barang, peminjaman.jumlah, peminjaman.nama_peminjam,peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian, peminjaman.status FROM peminjaman WHERE peminjaman.status='menunggu'");                  
while ($stock = mysqli_fetch_array($query)) { ?>
  <tr>
    <th scope="row"><?php echo $nomor ?></th>
    <td><?php echo $stock['id_barang']?></td>
    <td><?php echo $stock['nama_barang']?></td>
    <td><?php echo $stock['jumlah']?></td>
    <td><?php echo $stock['nama_peminjam']?></td>
    <td><?php echo $stock['tanggal_peminjaman']?></td>
    <td><?php echo $stock['tanggal_pengembalian']?></td>
    <td><?php echo $stock['status']?></td>
    
    <td> 
        <a class="btn btn-danger" href="proses_ditolak_konfirmasi.php?id=<?php echo $stock['id'];?>" role="button"><i class="fa-solid fa-square-xmark"></i></a>
        <a class="btn btn-success" href="proses_diterima_konfirmasi.php?id=<?php echo $stock['id'];?>" role="button"><i class="fa-solid fa-square-check"></i></a>        
    </td>

<?php 
      $nomor++;
} 
?>
</tbody>
</table>
</div>
</div>
</div>
</div>



<?php include ("footer.php") ;?>
    

