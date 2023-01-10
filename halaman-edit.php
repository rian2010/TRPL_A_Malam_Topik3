<?php include("headeradmin.php") ;?>
   

<div class="p-5 pt-5">
  <h3><i class="fas fa-tachometer-alt mr-3"></i> EDIT DATA </a><hr class="bg-secondary"></h3>
  

  <div class="row">   
  <?php
    include "config.php";
	  $ID = $_GET['ID'];
	  $ambildata = mysqli_query($db,"SELECT * FROM stock WHERE ID='$ID'")or die(mysqli_error());
    while ($stock = mysqli_fetch_array($ambildata)){
  ?>

  <form action="proses_editstock.php" method="POST">
        <div class="row mt-2" id="category">
          <div class="col-md-2">
            <label for="category">Kategori </label>
          </div>
          <div class="col-md-10">
            <select class="form-select form-select-mb" aria-label="Default select example" id="category" name="Category">
                <option <?php if($stock['Category'] == "Teknik Informatika"){echo "selected"; } ?>>Teknik Informatika</option>
                <option <?php if($stock['Category'] == "Teknik Mesin"){echo "selected"; } ?>>Teknik Multimedia dan Jaringan</option>
                <option <?php if($stock['Category'] == "Teknik Elektro"){echo "selected"; } ?>>Teknologi Geomatika</option>
                <option <?php if($stock['Category'] == "Teknik Mesin"){echo "selected"; } ?>>Animasi</option>
                <option <?php if($stock['Category'] == "Teknik Mesin"){echo "selected"; } ?>>Rekayasa Keamanan Siber</option>
                <option <?php if($stock['Category'] == "Manajemen Bisnis"){echo "selected"; } ?>>Teknologi Rekayasa Perangkat Lunak</option>
            </select>
          </div> 
        </div>
 
        <div class="row mt-2">
          <div class="col-md-2">
            <label>Nama Alat</label>
          </div>
          <div class="col-md-10">
            <input type="text" class="form-control" id="name" name="Name" value="<?php echo $stock['Name'] ?>">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-md-2">
            <label>Jumlah</label>
          </div>
          <div class="col-md-10">
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $stock['jumlah'] ?>">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-md-2">
            <label>Kondisi</label>
          </div>
          <div class="col-md-10">
            <input type="text" class="form-control" id="Condition" name="Condition" value="<?php echo $stock['Condition'] ?>">
          </div>
        </div>

        <input type="hidden" name="ID" value="<?php echo $stock['ID'] ?>">

        
      <div class="modal-footer mt-4">
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
      </div>

    </form>
    <?php } ?>
  </div>
  </div>
</div>




<?php include ("footer.php") ;?>
    