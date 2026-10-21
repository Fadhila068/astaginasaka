<?php $waNum = $company['whatsapp'] ?? '6281329996003'; ?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <img src="<?= base_url('assets/images/hero.jpg') ?>" alt="Perkebunan alami dan panorama lereng pegunungan Magelang Jawa Tengah" class="hero-bg" fetchpriority="high">
    <div class="container hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <span class="hero-badge"><i class="bi bi-geo-alt-fill me-1 text-gold" aria-hidden="true"></i> Magelang, Jawa Tengah &bull; Produsen & Eksportir Alami</span>
                <h1 class="hero-title">Komoditas Gula Nira & Vanilla Alami Terbaik dari Tanah Magelang ke Pasar Dunia</h1>
                <p class="hero-subtitle">Memasok 100% Gula Nira Murni dan Vanilla Beans Gourmet Grade A langsung dari kemitraan petani binaan di lereng subur Magelang, Jawa Tengah. Kualitas terstandarisasi, uji laboratorium, dan kemasan ekspor terpercaya.</p>
                <div class="hero-cta">
                    <a href="<?= base_url('/products') ?>" class="btn btn-primary-custom btn-lg">
                        <i class="bi bi-box-seam me-2" aria-hidden="true"></i>Lihat Produk Kami
                    </a>
                    <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode('Halo Asta Gina Saka Magelang, saya ingin meminta katalog produk dan penawaran harga (RFQ).') ?>"
                       class="btn btn-wa btn-lg" target="_blank" rel="noopener noreferrer"
                       aria-label="Konsultasi dan penawaran harga via WhatsApp (Membuka di tab baru)">
                        <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Konsultasi & Penawaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="section-padding" id="about-preview">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="image-stack-wrapper">
                    <img src="<?= base_url('assets/images/about.jpg') ?>" alt="Perkebunan alami di wilayah Magelang Jawa Tengah" class="img-fluid rounded-custom shadow-lg" loading="lazy">
                    <div class="image-badge-floating">
                        <i class="bi bi-award-fill" aria-hidden="true"></i>
                        <div>
                            <strong>Hasil Bumi Magelang</strong>
                            <small class="text-muted">Panen Berkelanjutan</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-badge">Tentang Kami</span>
                <h2 class="section-title">Berakar dari Kesuburan Tanah Magelang, Dipercaya Berbagai Industri</h2>
                <p class="section-text"><?= esc($company['description'] ?? 'Kami adalah perusahaan produsen dan eksportir komoditas alami unggulan asal Magelang, Jawa Tengah, Indonesia.') ?></p>
                <div class="about-features">
                    <div class="about-feature-item">
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span>Kemitraan Langsung Petani Magelang & Sekitarnya</span>
                    </div>
                    <div class="about-feature-item">
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span>Pengemasan Kedap Udara & Higienis Standar Ekspor</span>
                    </div>
                    <div class="about-feature-item">
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span>Uji Kadar Air & Kadar Vanillin Terstandar</span>
                    </div>
                    <div class="about-feature-item">
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span>Kelengkapan Dokumen Fitosanitari & Sertifikasi Asal (SKA)</span>
                    </div>
                </div>
                <div class="mt-4 pt-2">
                    <a href="<?= base_url('/about') ?>" class="btn btn-outline-custom">Pelajari Profil Selengkapnya <i class="bi bi-arrow-right ms-1" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Preview (2 Produk Utama) -->
<section class="section-padding bg-light-custom" id="products-preview">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Komoditas Unggulan</span>
            <h2 class="section-title">2 Produk Utama Pilihan Ekspor</h2>
            <p class="section-subtitle">Dipanen dan diolah secara cermat untuk memenuhi kebutuhan industri makanan, minuman, perhotelan, farmasi, dan ritel global.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                <div class="col-lg-6 col-md-6">
                    <div class="product-card h-100">
                        <div class="product-card-img">
                            <img src="<?= base_url('assets/images/' . esc($product['primary_image'] ?? 'hero.jpg')) ?>"
                                 alt="<?= esc($product['nama_product']) ?> - Komoditas Ekspor Alami Magelang" loading="lazy">
                            <span class="product-badge"><?= esc($product['nama_category']) ?></span>
                        </div>
                        <div class="product-card-body d-flex flex-column">
                            <h3 class="product-card-title"><?= esc($product['nama_product']) ?></h3>
                            <p class="product-card-desc"><?= esc(mb_substr($product['description'], 0, 140) . '...') ?></p>
                            
                            <div class="product-card-specs-grid">
                                <div class="spec-mini-item">
                                    <span class="spec-label">Asal Daerah</span>
                                    <span class="spec-val"><?= esc($product['origin'] ?? 'Magelang, Jawa Tengah') ?></span>
                                </div>
                                <div class="spec-mini-item">
                                    <span class="spec-label">Min. Order (MOQ)</span>
                                    <span class="spec-val"><?= esc($product['moq'] ?? '-') ?></span>
                                </div>
                                <div class="spec-mini-item">
                                    <span class="spec-label">Kemasan</span>
                                    <span class="spec-val"><?= esc(mb_substr($product['packaging'] ?? 'Bulk / Custom', 0, 22)) ?></span>
                                </div>
                            </div>

                            <div class="product-card-actions mt-auto pt-3">
                                <a href="<?= base_url('/products/' . esc($product['slug'])) ?>"
                                   class="btn btn-outline-custom btn-sm"
                                   aria-label="Lihat spesifikasi lengkap <?= esc($product['nama_product']) ?>">
                                    <i class="bi bi-info-circle me-1" aria-hidden="true"></i>Spesifikasi Lengkap
                                </a>
                                <?php
                                    $msg = "Halo Asta Gina Saka Magelang, saya ingin menanyakan ketersediaan dan penawaran harga untuk produk: " . $product['nama_product'];
                                ?>
                                <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode($msg) ?>"
                                   class="btn btn-wa btn-sm" target="_blank" rel="noopener noreferrer"
                                   aria-label="Tanya harga <?= esc($product['nama_product']) ?> via WhatsApp (Membuka di tab baru)">
                                    <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>Tanya Harga via WA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="text-center mt-5">
            <a href="<?= base_url('/catalog') ?>" class="btn btn-primary-custom">
                <i class="bi bi-grid-3x3-gap me-2" aria-hidden="true"></i>Buka Katalog Lengkap & Dokumen Mutu
            </a>
        </div>
    </div>
</section>
