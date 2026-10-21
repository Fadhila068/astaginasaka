<?php $waNum = $company['whatsapp'] ?? '6281234567890'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-badge">Katalog Komoditas</span>
        <h1 class="page-title">Produk Ekspor Unggulan Magelang</h1>
        <p class="page-subtitle">Diproduksi secara alami dari perkebunan Magelang, Jawa Tengah dengan standar kualitas ekspor dan kepatuhan uji laboratorium</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <!-- Category Filter Bar (2 Kategori: Gula Nira & Vanilla) -->
        <div class="catalog-filter-wrapper mb-5 text-center">
            <div class="btn-group filter-btn-group" role="group" aria-label="Filter Kategori Komoditas">
                <button type="button" class="btn btn-filter active" data-filter="all" aria-pressed="true">Semua Komoditas</button>
                <button type="button" class="btn btn-filter" data-filter="gula-nira" aria-pressed="false">Gula Nira</button>
                <button type="button" class="btn btn-filter" data-filter="vanilla" aria-pressed="false">Vanilla</button>
            </div>
        </div>

        <h2 class="visually-hidden">Daftar Produk Komoditas Ekspor</h2>

        <div class="row g-4 justify-content-center" id="productsGrid">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                <?php 
                    $catSlug = ($product['id_category'] == 1 || stripos($product['nama_category'], 'nira') !== false || stripos($product['nama_category'], 'sugar') !== false) ? 'gula-nira' : 'vanilla';
                ?>
                <div class="col-lg-6 col-md-6 product-item-filter" data-category="<?= $catSlug ?>">
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
                                    <span class="spec-val"><?= esc(mb_substr($product['packaging'] ?? 'Standar Ekspor', 0, 25)) ?></span>
                                </div>
                            </div>

                            <div class="product-card-actions mt-auto pt-3">
                                <a href="<?= base_url('/products/' . esc($product['slug'])) ?>"
                                   class="btn btn-outline-custom"
                                   aria-label="Lihat spesifikasi lengkap <?= esc($product['nama_product']) ?>">
                                    <i class="bi bi-file-earmark-text me-1" aria-hidden="true"></i>Lihat Spesifikasi
                                </a>
                                <?php
                                    $msg = "Halo Asta Gina Saka Magelang, saya tertarik dengan produk " . $product['nama_product'] . ". Mohon informasi harga, MOQ, dan lembar spesifikasi mutu (COA).";
                                ?>
                                <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode($msg) ?>"
                                   class="btn btn-wa" target="_blank" rel="noopener noreferrer"
                                   aria-label="Konsultasi harga <?= esc($product['nama_product']) ?> via WhatsApp (Membuka di tab baru)">
                                    <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>Konsultasi WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <i class="bi bi-box-seam display-1 text-muted" aria-hidden="true"></i>
                    <h3 class="mt-3 text-muted">Belum Ada Produk</h3>
                    <p class="text-muted">Silakan kembali lagi nanti atau hubungi tim penjualan kami.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Custom Requirements Callout -->
        <div class="custom-req-banner mt-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="h4 text-white"><i class="bi bi-gear-wide-connected me-2 text-warning" aria-hidden="true"></i> Butuh Spesifikasi Kustom, Mesh Khusus, atau Maklon Private Label?</h2>
                    <p class="mb-0 text-white-50">Kami melayani pengemasan khusus, penyesuaian ukuran mesh kristal gula nira, sortir panjang polong vanili, serta penyediaan sampel uji lab.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode('Halo Asta Gina Saka Magelang, saya ingin berkonsultasi mengenai pesanan kustom / maklon OEM untuk produk Gula Nira / Vanilla.') ?>"
                       class="btn btn-primary-custom" target="_blank" rel="noopener noreferrer"
                       aria-label="Diskusikan kebutuhan pesanan kustom via WhatsApp (Membuka di tab baru)">
                        <i class="bi bi-chat-dots me-2" aria-hidden="true"></i>Diskusikan Kebutuhan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>