

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 latar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Tabel Nilai Mahasiswa by Farrij</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">About us</a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Web Profile</a> <a class="dropdown-item" href="#">Form Belanja</a> <a class="dropdown-item" href="#">Tabel Nilai Mahasiswa</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text"> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">More</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>

    <h2 class="ratatengah h2">Tabel Nilai Mahasiswa</h2>
	<div class="row">
		<div class="col-md-12">
			<table class="table tabel">
            <thead class="bk">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody class="bk2">
            <?php
            // Data Mahasiswa
            $mahasiswa = [
                ["Moh Farrij Wajdi", "E41210223", 80],
                ["Sabina Nur", "T12345678", 30],
                ["Elizabeth Novi", "B12345678", 68],
                ["Rima", "F12345678", 96],
                ["Eka Lania", "A12345678", 76],
                ["Ria Suryani", "G12345678", 20],
                ["Syahiba Saufa", "L12345678", 50],
                ["Mei Diamita", "F12345678", 95],
                ["Taylor Swift", "S12345678", 30],
                ["Nishino Kana", "Y12345678", 55]
            ];

            // Menampilkan data
            foreach ($mahasiswa as $key => $mhs) {
                $nama = $mhs[0];
                $nim = $mhs[1];
                $nilai = $mhs[2];

                // Menentukan Grade
                if ($nilai >= 85) {
                    $grade = 'A';
                } elseif ($nilai >= 75) {
                    $grade = 'B';
                } elseif ($nilai >= 65) {
                    $grade = 'C';
                } elseif ($nilai >= 55) {
                    $grade = 'D';
                } else {
                    $grade = 'E';
                }

                // Menentukan Predikat
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    default:
                        $predikat = 'Buruk';
                }

                // Menentukan Keterangan
                $keterangan = $nilai >= 65 ? 'Lulus' : 'Gagal';

                // Menampilkan data dalam tabel
                echo "<tr>
                        <td>".($key+1)."</td>
                        <td>$nama</td>
                        <td>$nim</td>
                        <td>$nilai</td>
                        <td>$grade</td>
                        <td>$predikat</td>
                        <td>$keterangan</td>
                    </tr>";
            }
            ?>
        </tbody>
        <tfoot class="tengahtebal bk">
            <tr>
                <td colspan="7">Agregat Nilai</td>
            </tr>
            <?php
            // Data agregat
            $nilai_all = array_column($mahasiswa, 2);
            $jumlah_mahasiswa = count($mahasiswa);
            $nilai_tertinggi = max($nilai_all);
            $nilai_terendah = min($nilai_all);
            $total_nilai = array_sum($nilai_all);
            $rata_rata = $total_nilai / $jumlah_mahasiswa;
            ?>
            <tr>
                <td colspan="7">Nilai Tertinggi: <?php echo $nilai_tertinggi; ?></td>
            </tr>
            <tr>
                <td colspan="7">Nilai Terendah: <?php echo $nilai_terendah; ?></td>
            </tr>
            <tr>
                <td colspan="7">Nilai Rata-rata: <?php echo number_format($rata_rata, 2); ?></td>
            </tr>
            <tr>
                <td colspan="7">Jumlah Mahasiswa: <?php echo $jumlah_mahasiswa; ?></td>
            </tr>
            <tr>
                <td colspan="7">Jumlah Keseluruhan Nilai: <?php echo $total_nilai; ?></td>
            </tr>
        </tfoot>
			</table>
		</div>
	</div>

<footer id="footer" class="latar">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 spasi">
                <h3>Company Name</h3>
                <p>Cobacoba adalah perusahaan teknologi terkemuka yang berfokus pada pengembangan solusi perangkat lunak inovatif untuk memenuhi kebutuhan bisnis di era digital.</p>
            </div>

            <div class="col-lg-3 col-md-6 spasi">
                <h4>Links</h4>
                <ul class="list-unstyled">
                    <li><i class="fas fa-angle-right"></i> <a href="#">Home</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">About us</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Services</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 spasi">
                <h4>Our Services</h4>
                <ul class="list-unstyled">
                    <li><i class="fas fa-angle-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 spasi">
                <h4>Contact Us</h4>
                <p>
                    <strong>Address:</strong> Jl Surabaya kec kalipuro kab banyuwangi <br>
                    <strong>Phone:</strong> 09090909090<br>
                    <strong>Email:</strong> mohfarrijw48@gmail.com<br>
                </p>
            </div>
        </div>
    </div>

    <div class="container d-lg-flex py-4">
        <div class="me-lg-auto text-center text-lg-start">
            <div class="credits">
                © Copyright <strong><span>Moh Farrij Wajdi</span></strong>. All Rights
                Reserved
            </div>
        </div>
        <div class="social-links text-center text-lg-end pt-3 pt-lg-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>