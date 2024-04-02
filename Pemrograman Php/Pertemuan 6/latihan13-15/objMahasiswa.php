<?php

require_once 'Mahasiswa.php';

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $nilai = $_POST['nilai'];
    $matakuliah = $_POST['matakuliah'];

    // Validasi data
    if(empty($nim) || empty($nama) || empty($kuliah) || empty($nilai) || empty($matakuliah)) {
        $error = 'Semua field harus diisi.';
    } elseif (!is_numeric($nilai) || $nilai < 0 || $nilai > 100) {
        $error = 'Nilai harus berupa angka antara 0 dan 100.';
    } else {
        // Membuat objek Mahasiswa
        $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);

        // Redirect ke hasil_submit.php
        header("Location: hasil_submit.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
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
    <li class="breadcrumb-item"><a href="#">Form Nilai Ujian</a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
  </ol>
</nav>

<!-- Isi -->
<h1 class="judul">Form Nilai Ujian</h1>
<div class="form">
    <form method="post" action="hasil_submit.php"> <!-- Ubah action ke hasil_submit.php -->
        <label for="nim" class="form-label">NIM</label><br>
        <input type="text" id="nim" class="form-control" name="nim" placeholder="Masukkan Nim anda"><br>

        <label for="nama" class="form-label">Nama</label><br>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama anda"><br>

        <label for="kuliah" class="form-label">Kuliah</label><br>
        <select class="form-select" aria-label="Default select example" id="kuliah" name="kuliah">
        <option selected>--Pilih asal kuliah anda--</option>
        <option value="Politeknik Negeri Jember">Politeknik Negeri Jember</option>
        <option value="Universitas YUYU">Universitas YUYU</option>
        <option value="Universitas Yaya">Universitas Yaya</option>
        </select><br>

        <label for="matakuliah" class="form-label">Mata Kuliah</label><br>
        <select class="form-select" aria-label="Default select example" id="matakuliah" name="matakuliah">
        <option selected>--Pilih Mata Kuliah anda--</option>
        <option value="Pemrograman PHP">Pemrograman PHP</option>
        <option value="Pemrograman JAVA">Pemrograman JAVA</option>
        <option value="Softskill">Softskill</option>
        </select><br>

        <label for="nilai" class="form-label">Nilai</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100" class="form-control" placeholder="Masukkan nilai (0-100)"><br>

        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>

<!-- Footer -->
<footer class="footer bg-light text-center ">
        <div class="container-fluid color alignfooter">
            <span class="text-muted d-inline-block mx-auto">© 2024 Moh Farrij Wajdi</span>
        </div>
    </footer>

<?php if(!empty($error)): ?>
<div style="color: red;"><?php echo $error; ?></div>
<?php endif; ?>

</body>
</html>
