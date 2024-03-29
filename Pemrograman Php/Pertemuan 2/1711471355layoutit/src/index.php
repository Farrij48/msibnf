<?php
// Variabel untuk data diri
$nama = "Moh Farrij Wajdi";
$email = "mohfarrijw48@gmail.com";
$no_telepon = "+6285645781386";
$pekerjaan = "Full stack web developer";
$alamat = "Jl Surabaya, Kecamatan Kalipuro, Kabupaten Banyuwangi";
$kampus = "Politeknik Negeri Jember";
?>

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
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 latar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Web Profile by Farrij</a>
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
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
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
	<div class="row">
		<div class="col-md-6 spasi">
			<img alt="Bootstrap Image Preview" src="./img/pngwing.com.png" class="img-thumbnail">
		</div>
		<div class="col-md-6 spasi">
			<h3>
				Profile Lengkap
			</h3>
			<dl>
				<dt>
					Nama
				</dt>
				<dd>
					<?php echo $nama; ?>
				</dd>
				<dt>
					Email
				</dt>
				<dd>
					<?php echo $email; ?>
				</dd>
				<dt>
					No Telepon
				</dt>
				<dd>
					<?php echo $no_telepon; ?>
				</dd>
				<dt>
					Pekerjaan
				</dt>
				<dd>
					<?php echo $pekerjaan; ?>
				</dd>
                <dt>
					Alamat
				</dt>
				<dd>
					<?php echo $alamat; ?>
				</dd>
                <dt>
					Kampus
				</dt>
				<dd>
					<?php echo $kampus; ?>
				</dd>
			</dl>
            
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 spasi">
			<p>
				Saya mahasiswa <strong><?php echo $kampus; ?></strong> yang sedang menjalani program studi D4 Teknik Informatika. Saya berfokus pendidikan menjadi Website Developer dan Qualiti Assurance.

Bekerja dalam kelompok yang kolaboratif adalah keunggulan saya, terutama saat memecahkan masalah code. Banyuwangi tempat tinggal saya saat ini.

Rencana saya lima tahun kedepan menjadi seorang Web Developer dan Quaility enginering dan saya telah mempersiapkan untuk menjalani karir dalam dunia kerja dengan sukses.
			</p>
		</div>
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
                    <strong>Address:</strong> <?php echo $alamat; ?><br>
                    <strong>Phone:</strong> <?php echo $no_telepon; ?><br>
                    <strong>Email:</strong> <?php echo $email; ?><br>
                </p>
            </div>
        </div>
    </div>

    <div class="container d-lg-flex py-4">
        <div class="me-lg-auto text-center text-lg-start">
            <div class="credits">
                © Copyright <strong><span><?php echo $nama; ?></span></strong>. All Rights
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