<?php

include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($db,"UPDATE peminjaman SET peminjaman.status = 'Diterima' WHERE peminjaman.id = '$id';");

if ($result) {
    echo"<script>
    alert('Pengajuan diterima');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='historyadmin.php'>";
}
?>