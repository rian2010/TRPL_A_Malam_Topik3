<?php
// include database connection file
include 'config.php';
$ID= $_POST['ID'];
$category=$_POST['Category'];
$nama=$_POST['Name'];
$jumlah = $_POST['jumlah'];
$Condition=$_POST['Condition'];

$query = mysqli_query($db,"UPDATE `stock` SET `Category`='$category', `Name` ='$nama', `jumlah` ='$jumlah', `Condition`='$Condition' WHERE `ID`='$ID'");
// Redirect to homepage to display updated user in list

if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Yey!,..Fasilitas Berhasil Diubah');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='stocks.php'>";
}
?>