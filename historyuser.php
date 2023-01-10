<?php include("headeradmin.php") ;?>
<?php include('proses_listverify_equipment.php') ;?>        

<div class="p-5 pt-5">
        <h3><i class="fa-solid fa-clock-rotate-left"></i> RIWAYAT </a><hr class="bg-secondary"></h3>
    <div class="container-fluid text-light" style="height: 100vh;">
        
    <div class="nav row justify-content-evenly text-center align-items-center">
      <div class="col-sm-8">
        <div class="card text-bg-secondary mb-3">
          <div class="card-body">
            <h3 class="card-title fw-bold">DAFTAR HASIL VERIFIKASI</h3>
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
                      <td scope="col">ID Barang</td>
                      <td scope="col">Jumlah</td>
                      <td scope="col">Nama Barang</td>
                      <td scope="col">Nama Peminjam</td>
                      <td scope="col">Tanggal Peminjaman</td>
                      <td scope="col">Tanggal Pengembalian</td>
                      <td scope="col">Persetujuan</td>
                  </tr>
                </thead>
                <tbody>


<?php     
$nama=$_SESSION['fullname'];
include "config.php";
$nomor = 1;
$query = mysqli_query($db,"SELECT peminjaman.id, peminjaman.id_barang, peminjaman.jumlah, peminjaman.nama_barang, peminjaman.nama_peminjam,peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian, peminjaman.status FROM peminjaman WHERE nama_peminjam ='$nama' ");                  

while ($stock = mysqli_fetch_array($query)) { ?>
  <tr>
    <th scope="row"><?php echo $nomor ?></th>
    <td><?php echo $stock['id_barang']?></td>
    <td><?php echo $stock['jumlah']?></td>
    <td><?php echo $stock['nama_barang']?></td>
    <td><?php echo $stock['nama_peminjam']?></td>
    <td><?php echo $stock['tanggal_peminjaman']?></td>
    <td><?php echo $stock['tanggal_pengembalian']?></td>
    <td><?php echo $stock['status']?></td>
    
    

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