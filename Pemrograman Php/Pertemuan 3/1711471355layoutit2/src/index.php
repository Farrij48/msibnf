

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
				</button> <a class="navbar-brand" href="#">Form Belanja by Farrij</a>
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
								 <a class="dropdown-item" href="#">Web Profile</a> <a class="dropdown-item" href="#">Form Belanja</a> <a class="dropdown-item" href="#">Something else here</a>
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
		<div class="col-md-12 spasi">
			<h4 class="ratatengah">
				Form Belanja
			</h4>
			<form role="form" action="" method="post">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Nama Pelanggan
					</label>
					<input type="text" class="form-control" name="nama_pelanggan" placeholder="Isi nama" required />
				</div>
				<div class="form-group">

					<label>
						Produk
					</label>
					<select class="form-control"  name="produk" required onchange="getHargaSatuan(this.value)">
						<option value="">Pilih Produk</option>
           				<option value="Es Boba">Es Boba</option>
           				<option value="Mie Gacoan">Mie Gacoan</option>
           				<option value="Pisang Goreng">Pisang Goreng</option>
					</select>
				</div>
				<div class="form-group">
					 
					<label>
						Jumlah Beli
					</label>
					<input type="number" name="jumlah_beli" placeholder="Isi jumlah barang" class="form-control" />
				</div>
				<input type="submit" class="btn btn-primary print" name="submit" value="Print" >
			</form>
		</div>
	</div>
</div>

<?php
    // Daftar harga satuan per produk
    $daftar_harga = [
        "Es Boba" => 15000, 
        "Mie Gacoan" => 12000,  
        "Pisang Goreng" => 10000 
    ];

    if (isset($_POST['submit'])) {
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $produk = $_POST['produk'];
        $jumlah_beli = $_POST['jumlah_beli'];

        // Mendapatkan harga satuan berdasarkan produk yang dipilih
        $harga_satuan = $daftar_harga[$produk];

        $total_belanja = $jumlah_beli * $harga_satuan;
        $diskon = 0.2 * $total_belanja;
        $ppn = 0.1 * ($total_belanja - $diskon);
        $harga_bersih = ($total_belanja - $diskon) + $ppn;

        // Menampilkan alert dengan detail pembelian
        echo "<script>";
        echo "alert('Detail Pembelian:\\nNama Pelanggan: $nama_pelanggan\\nProduk: $produk\\nJumlah Beli: $jumlah_beli\\nHarga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "\\nTotal Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "\\nDiskon: Rp " . number_format($diskon, 0, ',', '.') . "\\nPPN: Rp " . number_format($ppn, 0, ',', '.') . "\\nHarga Bersih: Rp " . number_format($harga_bersih, 0, ',', '.') . "');";
        echo "</script>";
    }
    ?>

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