<?php $waNum = $company['whatsapp'] ?? '6281234567890'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-badge">Katalog Produk</span>
        <h1 class="page-title">Katalog Komoditas Ekspor & Lembar Teknis</h1>
        <p class="page-subtitle">Spesifikasi standar mutu ekspor, minimum pemesanan (MOQ), dan opsi pengemasan untuk mitra industri dan importir</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h2 class="visually-hidden">Daftar Katalog Komoditas Pilihan</h2>

        <div class="row g-4 justify-content-center">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                <div class="col-lg-6">
                    <div class="catalog-card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-sm-5">
                                <div class="catalog-card-img-wrapper h-100">
                                    <img src="<?= base_url('assets/images/' . esc($product['primary_image'] ?? 'hero.jpg')) ?>"
                                         alt="<?= esc($product['nama_product']) ?> - Komoditas Ekspor Magelang"
                                         class="catalog-card-img" loading="lazy">
                                    <span class="catalog-cat-tag"><?= esc($product['nama_category']) ?></span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="catalog-card-body d-flex flex-column h-100">
                                    <h3 class="catalog-card-title"><?= esc($product['nama_product']) ?></h3>
                                    <p class="catalog-card-desc"><?= esc(mb_substr($product['description'], 0, 110) . '...') ?></p>
                                    
                                    <ul class="catalog-specs mb-3">
                                        <li><strong>Asal Daerah:</strong> <?= esc($product['origin'] ?? 'Magelang, Jawa Tengah') ?></li>
                                        <li><strong>Grade Mutu:</strong> Premium Export Grade</li>
                                        <li><strong>Kemasan:</strong> <?= esc($product['packaging'] ?? 'Standar Ekspor / Custom') ?></li>
                                        <li><strong>Min. Order (MOQ):</strong> <?= esc($product['moq'] ?? '-') ?></li>
                                    </ul>

                                    <div class="mt-auto d-flex gap-2">
                                        <a href="<?= base_url('/products/' . esc($product['slug'])) ?>"
                                           class="btn btn-outline-custom btn-sm flex-fill"
                                           aria-label="Lihat spesifikasi teknis <?= esc($product['nama_product']) ?>">
                                            <i class="bi bi-file-earmark-text me-1" aria-hidden="true"></i>Spesifikasi
                                        </a>
                                        <?php
                                            $msg = "Halo Asta Gina Saka Magelang, mohon kirimkan penawaran harga & lembar COA untuk: " . $product['nama_product'];
                                        ?>
                                        <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode($msg) ?>"
                                           class="btn btn-wa btn-sm flex-fill" target="_blank" rel="noopener noreferrer"
                                           aria-label="Tanya harga <?= esc($product['nama_product']) ?> via WhatsApp (Membuka di tab baru)">
                                            <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>Tanya Harga
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>