<?php $waNum = $company['whatsapp'] ?? '6281329996003'; ?>
<footer class="site-footer">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <img src="<?= base_url('assets/images/astasaka.png') ?>" alt="" class="footer-logo" width="38" height="38">
                    <span><?= esc($company['company_name'] ?? 'Asta Gina Saka') ?></span>
                </div>
                <p class="footer-desc">Produsen dan eksportir resmi komoditas alami unggulan asal Magelang, Jawa Tengah. Kami memasok Gula Nira Kristal murni dan Vanilla Beans Gourmet Grade A dengan standar mutu internasional dan legalitas ekspor lengkap.</p>
                <div class="footer-social">
                    <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode('Halo Asta Gina Saka Magelang, saya ingin berkonsultasi mengenai pemesanan produk.') ?>" target="_blank" rel="noopener noreferrer" aria-label="Hubungi kami melalui WhatsApp"><i class="bi bi-whatsapp" aria-hidden="true"></i></a>
                    <a href="mailto:<?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?>" aria-label="Kirim email ke <?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?>"><i class="bi bi-envelope" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h2 class="footer-heading h6">Navigasi Cepat</h2>
                <ul class="footer-links">
                    <li><a href="<?= base_url('/') ?>">Beranda</a></li>
                    <li><a href="<?= base_url('/about') ?>">Tentang Kami</a></li>
                    <li><a href="<?= base_url('/products') ?>">Produk</a></li>
                    <li><a href="<?= base_url('/catalog') ?>">Katalog</a></li>
                    <li><a href="<?= base_url('/contact') ?>">Kontak Kami</a></li>
                </ul>
            </div>

            <!-- Products (2 Jenis Saja) -->
            <div class="col-lg-3 col-md-6 col-6">
                <h2 class="footer-heading h6">Komoditas Utama</h2>
                <ul class="footer-links">
                    <li><a href="<?= base_url('/products/gula-nira-kristal-premium') ?>">Gula Nira Kristal Premium</a></li>
                    <li><a href="<?= base_url('/products/vanilla-beans-premium') ?>">Vanilla Beans (Grade A)</a></li>
                    <li><a href="<?= base_url('/catalog') ?>">Katalog & Spesifikasi</a></li>
                    <li><a href="<?= base_url('/contact') ?>">Permintaan Penawaran (RFQ)</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h2 class="footer-heading h6">Kantor & Gudang</h2>
                <ul class="footer-contact">
                    <li><i class="bi bi-geo-alt" aria-hidden="true"></i> <span><?= esc($company['address'] ?? 'Jl. Mayor Human No. 15, Pakelan, Mertoyudan, Magelang, Jawa Tengah') ?></span></li>
                    <li><i class="bi bi-envelope" aria-hidden="true"></i> <span><a href="mailto:<?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?>" class="text-reset text-decoration-none"><?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?></a></span></li>
                    <li><i class="bi bi-whatsapp" aria-hidden="true"></i> <span><a href="https://wa.me/<?= esc($waNum) ?>" class="text-reset text-decoration-none" target="_blank" rel="noopener noreferrer">+62 813-2999-6003</a></span></li>
                </ul>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <?= esc($company['company_name'] ?? 'Asta Gina Saka') ?>. Magelang, Jawa Tengah, Indonesia. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </div>
</footer>
