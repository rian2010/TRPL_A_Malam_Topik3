<?php

include "config.php";
include "session.php";

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PELA</title>
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-secondary fw-bolder">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index2.php">BERANDA</a>
          </li>

			<?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
			<li><a class="nav-link active" href="dashboardadmin.php">DASHBOARD</a></li>
			<?php } else { ?>
        
			<li><a class="nav-link active" href="dashboarduser.php">DASHBOARD</a></li>
			<?php } ?>
          
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">KONTAK</a>
          </li>
        </ul>    
      </div>
    </div>
  </nav>
 

 
  <div class="container-fluid text-light" style="height: 100vh;">
   
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="poltek.jpg" class="d-block w-100" alt="..." style="height: 700px;">
          <div class="carousel-caption">
            <h5>Selamat Datang di Aplikasi Peminjaman Alat Praktikum  Politeknik Negeri Batam</h5>
            <p>Jurusan Informatika | Program Studi Teknologi Rekayasa Perangkat Lunak.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="tekno.jpg" class="d-block w-100" alt="..." style="height: 700px;">
          <div class="carousel-caption">
            <h5>Selamat Datang di Aplikasi Peminjaman Alat Praktikum Politeknik Negeri Batam</h5>
            <p>Jurusan Informatika | Program Studi Teknologi Rekayasa Perangkat Lunak.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="ta.jpg" class="d-block w-100" alt="..." style="height: 700px;">
          <div class="carousel-caption">
            <h5>Selamat Datang di Aplikasi Peminjaman Alat Praktikum Politeknik Negeri Batam</h5>
            <p>Jurusan Informatika | Program Studi Teknologi Rekayasa Perangkat Lunak</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    
          </div>
        </div>
      </div>
    </div>
    
  </div>
 


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/picker.js"></script>
  <script src="js/picker.date.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>