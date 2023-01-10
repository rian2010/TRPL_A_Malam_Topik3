<?php

include "config.php";
include "session.php";

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Peminjaman</title>
  <script src="https://kit.fontawesome.com/f8a09ade68.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="homestyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.2.slim.min.js" integrity="sha256-E3P3OaTZH+HlEM7f1gdAT3lHAn4nWBZXuYe89DFg2d0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--Navbar START-->
  <nav class="navbar navbar-expand-lg bg-secondary fw-bolder sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-xl-4" href="#"><img class="logo" src="assets/poltek3.png" style="height: 70px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
                <a href="index2.php"><img src="logo1.png" alt="logo" width="35" height="28"></a>
            </li>       
            <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboardadmin.php">DASHBOARD</a>
            </li>
            <?php } else { ?>
              
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboarduser.php">DASHBOARD</a>
            </li>

            <?php } ?>
            <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="stocks.php">STOK</a>
            </li>
            <?php } ?>

            <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
                <li class="nav-item">
                <a class="nav-link text-white" href="historyadmin.php">RIWAYAT</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="historyuser.php">RIWAYAT</a>
            </li>
            <?php } ?>               
        </ul>

        <form class="logout d-flex mt-3" role="submit">
          <p class="me-2 text-white"><i class="fa-solid fa-user" ></i> Halo, <?php echo $_SESSION['username']; ?></p>
          <p class="me-2 text-white">|</p>
          <a href="logout.php" role="button"><i class="fa-solid fa-arrow-up-left-from-circle">Keluar</i></a>
        </form>
      </div>
    </div>
  </nav>

<?php include("footer.php") ?>