<?php
include 'config.php';
$id=$_GET['id'];

mysqli_query($dbconnect, "DELETE FROM `tbsiswa` WHERE `tbsiswa`.`ID` = $id");

header('location:data-siswa.php');

?>