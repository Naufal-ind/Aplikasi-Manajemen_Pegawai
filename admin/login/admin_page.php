<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])){
header('location:login_form.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page| Noparu Store</title>
    <!----- css file ------>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontoiner">

<div class="konten">
<h3>Halo, <span>Admin</span></h3>
<h1>Selamat Datang  <span><?php echo $_SESSION['admin_name']?></span></h1>
<p>Ini adalah Halaman Admin</p>
<a href="login_form.php" class="tmbl">Login</a>
<a href="register_form.php" class="tmbl">Register</a>
<a href="logout.php" class="tmbl">Logout</a>

</div>




    </div>
</body>
</html>