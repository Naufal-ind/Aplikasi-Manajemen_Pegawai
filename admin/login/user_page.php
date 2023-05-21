<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])){
header('location:login_form.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page| Noparu Store</title>
    <!----- css file ------>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="kontoiner">
<div class="konten">
<h3>Halo, <span>Nopakers</span></h3>
<h1>Selamat Datang <span><?php echo $_SESSION['user_name']?></span></h1>
<p>Ini adalah Halaman Pengguna</p>
<a href="login_form.php" class="tmbl">Login</a>
<a href="register_form.php" class="tmbl">Register</a>
<a href="logout.php" class="tmbl">Logout</a>

</div>




    </div>



    
        
        <hr>
        <p class="copyright">Copyright 2022 - Muhammad Naufal Indiarto/21/XI RPL 3 </p>
        
            </div>
        </div>



        <!--------------------js for toggle menu-------------------->
        <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
        
        
        </script>
        
    </div>

</body>
</html>