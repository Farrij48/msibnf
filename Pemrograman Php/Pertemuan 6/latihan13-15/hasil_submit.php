<?php

require_once 'Mahasiswa.php';

// Validasi jika tidak ada data yang dikirimkan
if (!isset($_POST['nim']) || !isset($_POST['nama']) || !isset($_POST['kuliah']) || !isset($_POST['nilai']) || !isset($_POST['matakuliah'])) {
    header("Location: objMahasiswa.php");
    exit;
}

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$nilai = $_POST['nilai'];
$matakuliah = $_POST['matakuliah'];

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Submit</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Page Navbar -->
<nav class="colornav navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Farrij</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="objMahasiswa.php">Form Nilai Ujian</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Breadcrump -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bread">
  <ol class="breadcrumb bread">
    <li class="breadcrumb-item"><a href="objMahasiswa.php">Form Nilai Ujian</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hasil Nilai</li>
  </ol>
</nav>

<!--  -->
<h1 class="judul">Hasil Nilai Ujian Mahasiswa</h1>
<div class="result">
    <table class="table table-striped table-hover margintab">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kuliah</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><?php echo $mahasiswa->nim; ?></td>
            <td><?php echo $mahasiswa->nama; ?></td>
            <td><?php echo $mahasiswa->kuliah; ?></td>
            <td><?php echo $mahasiswa->matakuliah; ?></td>
            <td><?php echo $mahasiswa->nilai; ?></td>
            <td><?php echo $mahasiswa->grade; ?></td>
            <td><?php echo $mahasiswa->predikat; ?></td>
            <td><?php echo $mahasiswa->status; ?></td>
        </tr>
    </table>
</div>


<a href="objMahasiswa.php" class="btn btn-primary buttonkem">Kembali ke Form</a>

<!-- Footer -->
<footer class="footer bg-light text-center ">
        <div class="container-fluid color alignfooter">
            <span class="text-muted d-inline-block mx-auto">© 2024 Moh Farrij Wajdi</span>
        </div>
    </footer>

</body>
</html>
