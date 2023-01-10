<?php include("headeradmin.php") ;?>
<?php include('proses_liststock_equipment.php') ;?>   

<div class="p-5 pt-5">
    <h3><i class="fa-solid fa-shop"></i> STOK </a><hr class="bg-secondary"></h3>

    <div class="nav row justify-content-evenly text-center align-items-center">
      <div class="col-sm-8">
        <div class="card text-bg-secondary mb-3">
          <div class="card-body">
            <h3 class="card-title fw-bold">DAFTAR PERALATAN</h3>
          </div>
        </div>
      </div>
    </div>

<!-- Button trigger modal -->
<div class="row">
    <div class="col-md-5">
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-square-plus"></i></button>
    </div>
</div>


<div class="col-sm-13 pt-3">
    <div class="row">
      <div class="col-sm-13 pt-3">
        <div class="card bg-light text-dark">
        <div class="card-body">
        <table class="table pt-4 text-dark">
        <thead class="table-dark">
        <tr>
          <td scope="col">No</td>
          <td scope="col">ID  </td>
          <td scope="col">Kategori</td>
          <td scope="col">Nama</td>
          <td scope="col">Jumlah</td>
          <td scope="col">Kondisi</td>
          <td scope="col">Status</td>
          <td class="col-md-2 text-center">Tindakan</td>
        </tr>
      </thead>
      <tbody>
    </div>  
  </div>
</div>

<!-- Modal add -->

<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Data Alat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <form action="./proses_stock.php" method="POST">
    
      <div class="text-dark">
        <div class="modal-body"> 
        <div class="text-dark">
          
          <div class="row mt-2">
            <div class="col-md-2">
              <label>ID</label>
            </div>
            <div class="col-md-10">
              <input type="number" class="form-control" id="ID" name="ID">
            </div>
          </div>
        </div>
      

        <div class="row mt-2" id="category">      
          <div class="col-md-2">
            <label for="category">Kategori </label>
          </div>
            <div class="col-md-10">
              <select class="form-select form-select-mb" aria-label="Default select example" id="category" name="Category">
                <option>Teknik Informatika</option>
                <option>Teknik Multimedia dan Jaringan</option>
                <option>Teknologi Geomatika</option>
                <option>Animasi</option>
                <option>Rekayasa Keamanan Siber</option>
                <option>Teknologi Rekayasa Perangkat Lunak</option>
              </select>
            </div> 
        <div>    
          
          <div class="row mt-2">
            <div class="col-md-2">
              <label>Nama</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control" id="name" name="Name">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-2">
              <label>Jumlah</label>
            </div>
            <div class="col-md-10">
              <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
          </div>
      
          <div class="row mt-2 text">
            <div class="col-md-2">
              <label>Kondisi</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control" id="condition" name="Condition">
            </div>
          </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
        </div>
        </div>
      

      </form>
    </div>

    <?php     
      include "config.php";
      $query = mysqli_query($db,"SELECT * FROM stock;")or die(mysqli_error());                    
      $nomor = 1;
      while ($stock = mysqli_fetch_array($query)) { ?>
        <tr>
          <th scope="row"><?php echo $nomor ?></th>
          <td><?php echo $stock['ID']?></td>
          <td><?php echo $stock['Category']?></td>
          <td><?php echo $stock['Name']?></td>
          <td><?php echo $stock['jumlah']?></td>
          <td><?php echo $stock['Condition']?></td>
          <td><?php echo $stock['status']?></td>

        <td>
          <a class="btn btn-warning" href="halaman-edit.php?ID=<?php echo $stock['ID']?>"role="button"><i class="fa-solid fa-pen"></i></a>
          
          <a class="btn btn-danger" href="#" onclick="hapus('<?php echo $stock['ID']?>')" role="button"><i class="fa-solid fa-trash" data-bs-toggle="modal"data-bs-target="#staticBackdrop"></i>
        </td>

    <?php 
    $nomor++;
    } 
    ?>

    </div>
  </div>
</div>
 


<script type="text/javascript">
function hapus(ID){
  if (confirm("Anda yakin akan menghapus data tersebut?")) {
    let alamat = "<?php echo $_SERVER["REQUEST_URI"] ?>";
    location.href = alamat.replace("stocks","hapus") + "?ID=" + ID;
  }

}
</script>

<?php include("footer.php"); ?>





