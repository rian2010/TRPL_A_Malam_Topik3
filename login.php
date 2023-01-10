<?php
$koneksi = mysqli_connect('127.0.0.1','root','','PELA_MINI_PBL') ;
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="login1.css">
</head>

<body>
  <div class="login_card">
    <h1>Welcome to PELA</h1>
  <form action="" method="post">
    <div class="input_field">
    <input type="text" name="username" id="username" required />
      <span></span>
      <label>Username</label>
    </div>
    <div class="input_field">
    <input type="password" name="password" id="password" required />
      <span></span>
      <label>Password</label>
    </div>
    <input type="submit" name="submit" value="Submit" /><br><br>
  </form>
 
  </div>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
    $query = "select * from user where username = '".$_POST['username']."' and password = '".$_POST['password']."' limit 1";
    
     $ambildata = mysqli_query($koneksi,$query);
     $loginsukses = false;
     while ($data = mysqli_fetch_array($ambildata)){
         $_SESSION ['username'] = $data['username'];
         $_SESSION ['fullname'] = $data['nama'];
         $_SESSION ['jurusan'] = $data['jurusan'];
         $_SESSION ['type'] = $data['type'];

        $loginsukses = true;
     }

     if ($loginsukses){
         echo "<meta http-equiv=refresh content=0,url='index2.php'>";
     }else{
         echo '<script type ="text/JavaScript">';  
         echo 'alert("Silahkan periksa kembali username atau sandi anda    ")';  
         echo '</script>'; 

     }
 }
 

?>