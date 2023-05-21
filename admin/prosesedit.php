<?php
include 'config.php';

$id= $_POST['id'];
$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$kelamin= $_POST['kelamin'];
$nohp= $_POST['nohp'];
$agama= $_POST['agama'];


mysqli_query($dbconnect, "UPDATE `tbsiswa` SET `ID` = '$id', `NAMA` = '$nama', `ALAMAT` = '$alamat', `JENIS KELAMIN` = '$kelamin', `NO HP` = '$nohp', `AGAMA` = '$agama' WHERE `tbsiswa`.`ID` =$id;");
header('location:data-siswa.php');




?>