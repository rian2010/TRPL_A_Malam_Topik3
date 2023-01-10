<?php include ('headeradmin.php')?>
<?php include('proses_listavailable_equipment.php') ;?> 

<div class="container mt-5">
    <h2>Detail Barang</h2>
    <hr>

    <a href="dashboarduser.php" class="btn btn-primary btn-sm float-right">&larr; Kembali</a>
    <div class="clearfix"></div>

    <?php 
	include "config.php";
	$id = $_GET['ID'];
	$query_mysql = mysqli_query($db,"SELECT * FROM stock WHERE ID ='$id'")or die(mysqli_error());
	$nomor = 1;
	while($stock = mysqli_fetch_array($query_mysql)){
	?>

    <div class="card mt-3">
        <div class="card-header">
            <b><?php= $stock['stock']; ?></b>
        </div>
        <div class="card-body">
            <p>Kategori : <?php echo $stock['Category']; ?></p>
            <p>Nama : <?= $stock['Name']; ?></p>
            <p>Jumlah : <?= $stock['jumlah']; ?></p>
            <p>ID    : <?= $stock['ID']; ?></p>
            <p>Kondisi : <?= $stock['Condition']; ?></p>
            

        <?php } ?>


</div