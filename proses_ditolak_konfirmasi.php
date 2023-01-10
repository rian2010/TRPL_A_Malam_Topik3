<?php

include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($db,"UPDATE peminjaman SET peminjaman.status = 'Ditolak' WHERE peminjaman.id = '$id';");

if ($result) {
    echo"<script>
    alert('Pengajuan ditolak');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='dashboardadmin.php'>";
}
?>