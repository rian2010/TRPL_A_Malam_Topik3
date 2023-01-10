<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    var_dump($_POST);

    // ambil data dari formulir
    $category = $_POST['Category'];
    $nama = $_POST['Name'];
    $jumlah = $_POST['jumlah'];
    $id = $_POST['ID'];
    $condition = $_POST['Condition'];

    // buat query
    $sql = "INSERT INTO `stock` (`Category`,`Name`,`jumlah`,`ID`,`Condition`) VALUES ('$category', '$nama', '$jumlah', '$id', '$condition');";
    echo $sql;
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: stocks.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: stocks.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>