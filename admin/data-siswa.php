<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Aplikasi Manajemen | Data Siswa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 " href="index.html">NOPARU SCHOOL</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 " href="login/logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="data-siswa.php">
              <span data-feather="file"></span>
             Data Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak.php">
              <span data-feather="shopping-cart"></span>
              Kontak Person
            </a>
          </li>
         
        </ul>

       </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="title">Data Siswa</h1></div>
       
<h2>Selamat Datang di Halaman Data Siswa</h2>
<br>
<a href="inputdatasiswa.php" class="btn btn-primary">Input Data Siswa</a>
<br>
<br>
<table class="table  table-responsive-xxl  table-bordered table-sm a  text-center  ">
<tr class="table-primary" >
<th>NO</th>
<th>ID</th>
<th>NAMA</th>
<th>ALAMAT</th>
<th>JENIS KELAMIN</th>
<th>NO. HP</th>
<th> AGAMA</th>
<th>AKSI</th>
</tr>

<?php

include 'config.php';
$query = mysqli_query($dbconnect, "SELECT * FROM tbsiswa");
$no = 1;

while ($tampil = mysqli_fetch_assoc($query)){
?>
<tr class="table-hover">
<td><?php echo $no++;?></td>
<td><?php echo $tampil['ID'];?></td>
<td><?php echo $tampil['NAMA'];?></td>
<td><?php echo $tampil['ALAMAT'];?></td>
<td><?php echo $tampil['JENIS KELAMIN'];?></td>
<td><?php echo $tampil['NO HP'];?></td>
<td><?php echo $tampil['AGAMA'];?></td>
<td><a  onclick="return confirm('APAKAH ANDA YAKIN MENGHAPUS DATA INI DENGAN ID=<?php echo $tampil['ID']?>?')" href="proseshapus.php?id=<?php echo $tampil['ID']?>" class=" btn btn-danger ">HAPUS</a> ||
<a href="editdata.php?id=<?php echo $tampil['ID']?>" class=" btn btn-primary">EDIT</a>

</tr>
<?php

}






?>



 


        </table>



      </div>
    </main>
  </div>
</div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
