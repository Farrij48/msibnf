<div style="height:1330px">
    <!-- Halaman Depan -->
    <?php
    include_once 'webmenu.php';

    if(isset($_GET['hal']) && !empty($_GET['hal']) && isset($menu_bawah[$_GET['hal']])) {
        $hal = $_GET['hal'];
        include_once $menu_bawah[$hal];
    }
    else {
        // Tindakan fallback jika nilai 'hal' tidak valid atau tidak ada
        include_once "home.php";
    }
    ?>
</div>
