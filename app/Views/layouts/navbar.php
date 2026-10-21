<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar" aria-label="Navigasi Utama">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>" aria-label="<?= esc($company['company_name'] ?? 'Asta Gina Saka') ?> - Beranda">
            <img src="<?= base_url('assets/images/astasaka.png') ?>" alt="" class="navbar-logo" width="40" height="40">
            <span class="brand-text"><?= esc($company['company_name'] ?? 'Asta Gina Saka') ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Buka menu navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/about') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/products') ?>">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/catalog') ?>">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/contact') ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
