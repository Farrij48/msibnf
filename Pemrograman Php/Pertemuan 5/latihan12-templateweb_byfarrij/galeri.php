<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }
        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .gallery-item:hover {
            transform: scale(1.05);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px 10px 0 0;
        }
        .gallery-item .caption {
            padding: 15px;
            background-color: #fff;
        }
        .caption h3 {
            margin-top: 0;
            color: #333;
        }
        .caption p {
            margin-bottom: 0;
            color: #666;
        }
    </style>
</head>
<body>

<?php
$musik = "musik/I Love You.m4a";
?>

<audio autoplay loop>
    <source src="<?php echo $musik; ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>


    <div class="container">
        <h1>Galeri</h1>
        <div class="gallery">
            <div class="gallery-item">
                <img src="gambar/Nishino_Kana_-_Dear_Bride_promo.jpg" alt="Gambar 1">
                <div class="caption">
                    <h3>Dear Bride</h3>
                    <p>Deskripsi singkat tentang gambar ini.</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="gambar/Nishino_Kana_-_Te_wo_Tsunagu_Riyuu_promo.jpg" alt="Gambar 2">
                <div class="caption">
                    <h3>Te wo Tsunagu Riyuu</h3>
                    <p>Deskripsi singkat tentang gambar ini.</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="gambar/Kana_Nishino_-_Sayonara_(Promotional).jpg" alt="Gambar 3">
                <div class="caption">
                    <h3>Sayonara</h3>
                    <p>Deskripsi singkat tentang gambar ini.</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="gambar/Nishino_Kana_-_Dear_Bride_promo.jpg" alt="Gambar 1">
                <div class="caption">
                    <h3>Dear Bride</h3>
                    <p>Deskripsi singkat tentang gambar ini.</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="gambar/Nishino_Kana_-_Dear_Bride_promo.jpg" alt="Gambar 1">
                <div class="caption">
                    <h3>Dear Bride</h3>
                    <p>Deskripsi singkat tentang gambar ini.</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="gambar/Nishino_Kana_-_Dear_Bride_promo.jpg" alt="Gambar 1">
                <div class="caption">
                    <h3>Dear Bride</h3>
                    <p>Deskripsi singkat tentang gambar ini.</p>
                </div>
            </div>
            <!-- Tambahkan lebih banyak div.gallery-item di sini sesuai dengan jumlah gambar yang ingin Anda tampilkan -->
        </div>
    </div>
</body>
</html>
