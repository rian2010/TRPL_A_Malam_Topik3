<?php

include("config.php");

// baca database dan tampilkan
$sql_selectall = "SELECT `nama_barang`, `id_barang`, `nama_peminjam`,`tanggal_peminjaman`,`tanggal_pengembalian` FROM `stock` a ";
$sql_selectall .= "JOIN `peminjaman` b ON a.ID = b.id_barang and b.status = 'Menunggu';";

$query = mysqli_query($db, $sql_selectall);

?>
