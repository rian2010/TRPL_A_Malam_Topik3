<?php include("headeradmin.php") ;?>
<?php

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali= $_POST['tanggal_kembali'];
    $nama_barang= $_POST['Name'];
    $jumlah= $_POST['jumlah'];
    $id_barang= $_POST['ID'];
    $nama = $_SESSION['fullname'];
    $jurusan = $_SESSION['jurusan'];
    $status = "sedang di pinjam";
    
    // buat query
    $sql = "INSERT INTO `peminjaman` (`id_barang`, `nama_peminjam`, `nama_barang`, `jumlah`, `tanggal_peminjaman`, `tanggal_pengembalian`,`status`) VALUES ('$id_barang','$nama','$nama_barang', '$jumlah', '$tanggal_pinjam','$tanggal_kembali','menunggu');";
    $query = mysqli_query($db, $sql);
    
    $sql = "UPDATE `stock` SET `status`='sedang di pinjam' WHERE `ID`=$id_barang;";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: historyuser.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: stocks.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}


?>