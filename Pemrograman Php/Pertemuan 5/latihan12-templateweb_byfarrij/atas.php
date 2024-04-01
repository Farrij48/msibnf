<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Farrij</title>
    <link rel="stylesheet" href="css/styles_atas.css">
</head>
<body style="background-color:khaki">
    <h1 class="bk">WEB FARRIJ</h1>
    <div style="text-align:center; background-color:khaki; color:blue">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
            //looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>