<?php function setActiveLink($url)
{
    // get last part of url
    $server_url = explode('/', $_SERVER['REQUEST_URI']);
    if ($server_url[3] === $url) {
        return ' class="active"';
    } else {
        return '';
    }
} ?>

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= BASEURL ?>">NitipYuk</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= BASEURL ?>">NY</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <?php if ($_SESSION['role'] == 'distributor') : ?>
                <li <?= setActiveLink("barang") ?>><a class="nav-link" href="<?= BASEURL ?>/barang"><i class="fas fa-pencil-ruler"></i> <span>Barang</span></a></li>
                <li <?= setActiveLink("logProdusen") ?>><a class="nav-link" href="<?= BASEURL ?>/logProdusen"><i class="fas fa-pencil-ruler"></i> <span>Log Produsen</span></a></li>
                <li <?= setActiveLink("laporanPenjualan") ?>><a class="nav-link" href="<?= BASEURL ?>/laporanPenjualan"><i class="fas fa-pencil-ruler"></i> <span>Laporan Penjualan</span></a></li>
                <li <?= setActiveLink("historyBarang") ?>><a class="nav-link" href="<?= BASEURL ?>/historyBarang"><i class="fas fa-pencil-ruler"></i> <span>History Barang</span></a></li>
                <li <?= setActiveLink("verifikasiRetail") ?>><a class="nav-link" href="<?= BASEURL ?>/verifikasiRetail"><i class="fas fa-pencil-ruler"></i> <span>Verifikasi Retail</span></a></li>
                <li <?= setActiveLink("requestBarang") ?>><a class="nav-link" href="<?= BASEURL ?>/requestBarang"><i class="fas fa-pencil-ruler"></i> <span>Request Barang</span></a></li>
                <li <?= setActiveLink("retail") ?>><a class="nav-link" href="<?= BASEURL ?>/retail"><i class="fas fa-pencil-ruler"></i> <span>Retail</span></a></li>
            <?php else: ?>
                <li <?= setActiveLink("laporanPenjualan") ?>><a class="nav-link" href="<?= BASEURL ?>/laporanPenjualan"><i class="fas fa-pencil-ruler"></i> <span>Upload Penjualan</span></a></li>
                <li <?= setActiveLink("requestBarang") ?>><a class="nav-link" href="<?= BASEURL ?>/requestBarang"><i class="fas fa-pencil-ruler"></i> <span>Request Barang</span></a></li>
            <?php endif; ?>
    </aside>
</div>