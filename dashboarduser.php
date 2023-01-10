<?php include ('headeradmin.php')?>
<?php include('proses_listavailable_equipment.php') ;?>   

  <div class="p-5 pt-5">
        <h3><i class="fas fa-tachometer-alt mr-3"></i> DASHBOARD </a><hr class="bg-secondary"></h3>
    <div class="container-fluid text-light" style="height: 100vh;">
        
    <div class="nav row justify-content-evenly text-center align-items-center">
      <div class="col-sm-8">
        <div class="card text-bg-secondary mb-3">
          <div class="card-body">
            <h3 class="card-title fw-bold">DAFTAR PERALATAN YANG TERSEDIA</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">   
      <div class="col-sm-13 pt-3">
        <div class="card bg-light text-black">
          <div class="card-body">
            <table class="table pt-4 text-dark">
              <thead class="table-dark">
                <tr>
                  <td scope="col">No</td>
                  <td scope="col">ID</td>
                  <td scope="col">Kategori</td>
                  <td scope="col">Nama</td>
                  <td scope="col">Kondisi</td>
                  <td class="col">Tindakan</td>
                </tr>
              </thead>
            <tbody>

              <?php     
              $nomor = 1;                    
              while ($stock = mysqli_fetch_array($query)) { ?>
                <tr>
                  <th scope="row"><?php echo $nomor ?></th>
                  <td><?php echo $stock['ID']?></td>
                  <td><?php echo $stock['Category'] ?></td>
                  <td><?php echo $stock['Name']?></td>
                  <td><?php echo $stock['Condition']?></td>

                  <td>
                    <a class="btn btn-success col-sm-3" href="detail-barang.php?ID=<?php echo $stock['ID'];?>" role="button"><i class="fa-solid fa-eye"></i></a>                      
                    <button type="button" class="btn btn-primary col-sm-8 pinjam" data-bs-toggle="modal" data-ID="<?php echo $stock['ID']; ?>" data-namabarang="<?php echo $stock['Name'] ?>" data-bs-target="#exampleModal"> <b> <centre> Pinjam </centre> </b>  </button>
                  </td>   
                </tr>
                  
              <?php 
                    $nomor++;
              } 
              ?>         
          </div>
        </div>
      </div>
    </div>
</div>
   

<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="proses_pinjam.php" method="POST" id="form-pinjam">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Form Peminjaman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <div class="row mt-2">
          <div class="col-md-3">
            <label for="ID">ID</label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control" id="ID" name="ID" readonly="readonly">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-md-3">
            <label for="Name">Nama Barang</label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control" id="Name" name="Name" readonly="readonly">
          </div>
        </div>  
        
        <div class="row mt-2">
          <div class="col-md-3">
            <label for="Name">Jumlah</label>
          </div>
          <div class="col-md-8">
            <input type="number" class="form-control" id="jumlah" name="jumlah">
          </div>
        </div>  

        <div class="row mt-2">
          <div class="col-md-3">
            <label for="tanggal_pinjam"><i class="fa-solid fa-calendar-days"></i>Tanggal Pinjam</label>
          </div>
          <div class="col-md-8">
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="hh/bb/tt">
          </div>
        </div>          
        <div class="row mt-2">
          <div class="col-md-3">
            <label for="tanggal_kembali"><i class="fa-solid fa-calendar-days"></i>Tanggal Kembali</label>
          </div>
          <div class="col-md-8">
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" placeholder="hh/bb/tt">
          </div>
        </div>
        <br>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>  

<script>
$("button.pinjam").click(function(){
  var idbarang = $(this).data('id');
  var namabarang = $(this).data('namabarang');
  $("input#ID").val( idbarang );
  $("input#Name").val( namabarang );
});
</script>

<?php include ("footer.php") ; ?>

