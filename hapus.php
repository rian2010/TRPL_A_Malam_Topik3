<?php
	include "config.php";

	$sql_hapus = "DELETE FROM stock where ID =('$_GET[ID]')";
    $query = mysqli_query($db, $sql_hapus);

    if ($query) {
        echo 
        "<script>
        alert('Barang berhasil dihapus');
        </script>";
        echo 
        "<meta http-equiv=refresh content=0,url='stocks.php'>";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    
?>
