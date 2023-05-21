<?php
include 'config.php';

$id= $_POST['id'];
$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$kelamin= $_POST['kelamin'];
$nohp= $_POST['nohp'];
$agama= $_POST['agama'];

mysqli_query($dbconnect," INSERT INTO `tbsiswa` (`ID`, `NAMA`, `ALAMAT`, `JENIS KELAMIN`, `NO HP`, `AGAMA`) VALUES ('$id', '$nama', '$alamat', '$kelamin', '$nohp', '$agama');");


header('location:data-siswa.php');


?>


