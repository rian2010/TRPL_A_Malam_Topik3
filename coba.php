<ul class="nav justify-content-center">
    <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
    <?php } else { ?>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
    <?php } ?>
    <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
    <?php } ?>
    <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
    <?php } else { ?>
  <li class="nav-item text-white">
    <a class="nav-link text-white" href="historyuser.php"><i class="fa-solid fa-envelope"></i>HISTORY</a><hr class="bg-secondary">
  </li>
    <?php } ?>    
  </ul>