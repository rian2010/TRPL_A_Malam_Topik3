<?php

include("config.php");

// baca database dan tampilkan
$sql_selectall = "SELECT `Category`, `Name`, `jumlah`, `Status`, `ID`, `Condition` FROM `stock`";
$query = mysqli_query($db, $sql_selectall);

?>
