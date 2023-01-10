<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontak</title>
  <script src="https://kit.fontawesome.com/f8a09ade68.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="homestyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <!--Navbar START-->
  <nav class="navbar navbar-expand-lg bg-secondary fw-bolder">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/poltek3.png" style="height: 70px;" alt=""></a>
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
    <div class="nav row justify-content-evenly text-center align-items-center">
      <div class="col-sm-6">
        <div class="card text-bg-secondary mb-3">
          <div class="card-body">
            <h3 class="card-title fw-bold">KONTAK</h3>
            <p class="card-text">Hubungi kontak berikut bila Anda mengalami kendala peminjaman : </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-evenly text-center align-items-center text-body">
      <div class="col-sm-6">
        <table class="table">
          <thead>
            <tr class="bg-secondary">
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">No. Telepon</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Hanna Priskila</td>
              <td>0857-6385-8549</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Fauzan Alwan</td>
              <td>0812-7568-0556</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Damarjati Abdullah</td>
              <td>0813-6481-6937</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Muhammad Topan</td>
              <td>0812-6814-0313</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Pieter Cristian</td>
              <td>0822-8513-2974</td>
            </tr>
          </tbody>
        </table>

        <br>
        <div style="margin-top:0px;" class="row no-margin">
          <h4><a href="https://www.polibatam.ac.id/"><i class="fa-solid fa-map-location-dot"></i> Politeknik Negeri Batam</a></h4>
          <h6>Jl. Ahmad Yani, Kota Batam Kepulauan Riau.</h6>
          <iframe class="peta" style="width:100%" src="https://www.google.com/maps/d/embed?mid=1Iu_VVcenQGxJH0qJL_sqmbbxE8Q&ehbc=2E312F" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <a id="back-to-top" href="#" class="btn btn-warning btn-md back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/picker.js"></script>
  <script src="js/picker.date.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="home.js"></script>
</body>

</html>