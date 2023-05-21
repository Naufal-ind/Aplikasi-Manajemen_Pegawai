
<?php


@include 'config.php';

session_start();


if(isset($_POST['submit'])){


 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $pass = md5($_POST['password']);


 $select = " SELECT * FROM user_form WHERE email = '$email'&& password = '$pass' ";

 $result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

 $row = mysqli_fetch_array($result);

 if($row['user_type']== 'admin'){

     $_SESSION['admin_name'] = $row['name'];
     header('location:../index.php');

 }else if($row['user_type']== 'user'){

    $_SESSION['user_name'] = $row['name'];
    header('location:user_page.php');

}

}else{
    $error[] = 'incorrect email or password!';
}



};


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Noparu Store</title>
    <!------ css file ---->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
        

    <div class="form-kontainer">

<form action="" method="post">
<h3>Login Sekarang</h3>
<?php
if(isset($error)){
foreach($error as $error){
    echo '<span class="error-msg">' .$error. ' </span>';
}
}
?>
<input type="email" name="email" required placeholder="Email">
<input type="password" name="password" required placeholder="Password">
<input type="submit" name="submit" value="Login Sekarang" class="form-tmbl">
<p>Tidak Memiliki Akun? <a href="register_form.php">Register</a></p>
</form>
    </div>


    
</body>
</html>