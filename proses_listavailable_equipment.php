<?php

include("config.php");

// baca database dan tampilkan
$sql_selectall = "SELECT `Category`, `Name`, `ID`, `Condition` FROM `stock` where `status`='Di Gudang' or `status`=''";
$query = mysqli_query($db, $sql_selectall);

?>
