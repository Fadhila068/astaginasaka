<?php $waNum = $company['whatsapp'] ?? '6281234567890'; ?>

<!-- Page Header / Breadcrumb -->
<section class="page-header page-header-sm">
    <div class="container">
        <nav aria-label="Navigasi rekam jejak">
            <ol class="breadcrumb-custom">
                <li><a href="<?= base_url('/') ?>"><i class="bi bi-house-door me-1" aria-hidden="true"></i>Beranda</a></li>
                <li><a href="<?= base_url('/products') ?>">Produk</a></li>
                <li class="active" aria-current="page"><?= esc($product['nama_product']) ?></li>
            </ol>
        </nav>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Image Gallery -->
            <div class="col-lg-6">
                <div class="product-gallery">
                    <?php if (!empty($images)): ?>
                        <div class="gallery-main position-relative">
                            <img src="<?= base_url('assets/images/' . esc($images[0]['image'])) ?>"
                                 alt="<?= esc($images[0]['caption'] ?? $product['nama_product'] . ' - Komoditas Ekspor Alami Magelang') ?>"
                                 id="galleryMainImg" class="img-fluid rounded-custom shadow">
                            <span class="gallery-zoom-hint" aria-hidden="true"><i class="bi bi-arrows-fullscreen"></i></span>
                        </div>
                        <?php if (count($images) > 1): ?>
                        <div class="gallery-thumbs mt-3">
                            <?php foreach ($images as $i => $img): ?>
                            <button type="button" class="gallery-thumb <?= $i === 0 ? 'active' : '' ?>"
                                     onclick="changeGalleryImage(this, '<?= base_url('assets/images/' . esc($img['image'])) ?>')"
                                     aria-label="Pilih foto <?= esc($img['caption'] ?? ('produk ' . ($i + 1))) ?>">
                                <img src="<?= base_url('assets/images/' . esc($img['image'])) ?>"
                                     alt="" loading="lazy">
                            </button>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="gallery-main">
                            <img src="<?= base_url('assets/images/hero.jpg') ?>"
                                 alt="<?= esc($product['nama_product']) ?> - Komoditas Ekspor Alami Magelang" class="img-fluid rounded-custom">
                        </div>
                    <?php endif; ?>

                    <!-- Quality Assurance Badges -->
                    <div class="quality-badges-row mt-4 p-3 bg-light-custom rounded-custom d-flex justify-content-around text-center">
                        <div>
                            <i class="bi bi-shield-check text-success fs-4" aria-hidden="true"></i>
                            <div class="small fw-bold mt-1">100% Alami</div>
                        </div>
                        <div>
                            <i class="bi bi-clipboard2-pulse text-primary fs-4" aria-hidden="true"></i>
                            <div class="small fw-bold mt-1">Uji Lab (COA)</div>
                        </div>
                        <div>
                            <i class="bi bi-box2 text-warning fs-4" aria-hidden="true"></i>
                            <div class="small fw-bold mt-1">Kemasan Ekspor</div>
                        </div>
                        <div>
                            <i class="bi bi-file-earmark-check text-info fs-4" aria-hidden="true"></i>
                            <div class="small fw-bold mt-1">Fitosanitari</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="product-category-badge"><?= esc($product['nama_category']) ?></span>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">Siap Pasok Ekspor</span>
                </div>

                <h1 class="product-detail-title"><?= esc($product['nama_product']) ?></h1>
                <p class="product-detail-desc"><?= esc($product['description']) ?></p>

                <div class="product-quick-specs">
                    <div class="quick-spec">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <div>
                            <small class="text-muted">Asal Daerah</small>
                            <strong><?= esc($product['origin'] ?? 'Magelang, Jawa Tengah') ?></strong>
                        </div>
                    </div>
                    <div class="quick-spec">
                        <i class="bi bi-box-seam" aria-hidden="true"></i>
                        <div>
                            <small class="text-muted">Kemasan Ekspor</small>
                            <strong><?= esc($product['packaging'] ?? 'Standar Ekspor / Custom') ?></strong>
                        </div>
                    </div>
                    <div class="quick-spec">
                        <i class="bi bi-stack" aria-hidden="true"></i>
                        <div>
                            <small class="text-muted">Minimum Order (MOQ)</small>
                            <strong><?= esc($product['moq'] ?? '-') ?></strong>
                        </div>
                    </div>
                    <div class="quick-spec">
                        <i class="bi bi-clock-history" aria-hidden="true"></i>
                        <div>
                            <small class="text-muted">Masa Simpan</small>
                            <strong><?= esc($product['shelf_life'] ?? '24 - 36 Bulan') ?></strong>
                        </div>
                    </div>
                </div>

                <!-- Call to action buttons -->
                <div class="product-action-box p-4 rounded-custom border mt-4">
                    <h2 class="h5 fw-bold mb-2">Konsultasi Harga Grosir & Kontainer</h2>
                    <p class="small text-muted mb-3">Respon cepat dalam hitungan jam. Kami melayani pengiriman domestik ke seluruh Indonesia serta pengiriman ekspor FOB / CIF ke berbagai negara.</p>
                    
                    <div class="d-grid gap-2">
                        <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode("Halo Asta Gina Saka Magelang, saya ingin meminta informasi penawaran harga & spesifikasi lengkap untuk: " . $product['nama_product'] . ". Estimasi volume: [Jumlah Kg/Ton], Tujuan: [Kota/Pelabuhan].") ?>"
                           class="btn btn-wa btn-lg" target="_blank" rel="noopener noreferrer"
                           aria-label="Tanya penawaran harga <?= esc($product['nama_product']) ?> via WhatsApp (Membuka di tab baru)">
                            <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Tanya Harga via WhatsApp
                        </a>
                        <a href="<?= base_url('/contact') ?>" class="btn btn-outline-custom"
                           aria-label="Isi formulir permintaan harga untuk <?= esc($product['nama_product']) ?>">
                            <i class="bi bi-send me-2" aria-hidden="true"></i>Isi Formulir Permintaan Harga (RFQ)
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technical Specification Tabs -->
        <div class="row mt-5 pt-4">
            <div class="col-12">
                <h2 class="visually-hidden">Detail Spesifikasi Teknis dan Ketentuan Logistik</h2>

                <ul class="nav nav-pills custom-tabs mb-4" id="specTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs-pane" type="button" role="tab" aria-controls="specs-pane" aria-selected="true">
                            <i class="bi bi-list-check me-2" aria-hidden="true"></i>Spesifikasi Teknis
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping-pane" type="button" role="tab" aria-controls="shipping-pane" aria-selected="false">
                            <i class="bi bi-truck me-2" aria-hidden="true"></i>Ketentuan Logistik & Incoterms
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cert-tab" data-bs-toggle="tab" data-bs-target="#cert-pane" type="button" role="tab" aria-controls="cert-pane" aria-selected="false">
                            <i class="bi bi-patch-check me-2" aria-hidden="true"></i>Dokumen Legalitas & Sertifikasi
                        </button>
                    </li>
                </ul>

                <div class="tab-content border rounded-custom p-4 bg-white shadow-sm" id="specTabsContent">
                    <!-- Specifications Tab -->
                    <div class="tab-pane fade show active" id="specs-pane" role="tabpanel" aria-labelledby="specs-tab" tabindex="0">
                        <?php if (!empty($specs)): ?>
                        <div class="table-responsive">
                            <table class="table spec-table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 35%">Parameter / Karakteristik</th>
                                        <th scope="col">Nilai Standar Ekspor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($specs as $spec): ?>
                                    <tr>
                                        <td><strong><?= esc($spec['spec_name']) ?></strong></td>
                                        <td><?= esc($spec['spec_value']) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php else: ?>
                            <p class="text-muted">Lembar spesifikasi teknis lengkap tersedia berdasarkan permintaan.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Shipping & Incoterms Tab -->
                    <div class="tab-pane fade" id="shipping-pane" role="tabpanel" aria-labelledby="shipping-tab" tabindex="0">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-custom h-100">
                                    <h3 class="h6 fw-bold text-primary mb-3"><i class="bi bi-geo-alt-fill me-2" aria-hidden="true"></i>Pelabuhan & Terminal Muat</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><strong>Jalur Laut (Sea Freight):</strong> Pelabuhan Tanjung Emas (Semarang, IDSRG) / Tanjung Perak (Surabaya, IDSUB) / Tanjung Priok (Jakarta, IDJKT)</li>
                                        <li><strong>Jalur Udara (Air Cargo):</strong> Bandara Internasional Yogyakarta (YIA) / Soekarno-Hatta (CGK)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-custom h-100">
                                    <h3 class="h6 fw-bold text-primary mb-3"><i class="bi bi-currency-exchange me-2" aria-hidden="true"></i>Ketentuan Perdagangan</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><strong>Incoterms:</strong> FOB, CFR, CIF (Pelabuhan tujuan dunia) / Pengiriman Domestik Loco Gudang Magelang & Franco</li>
                                        <li><strong>Metode Pembayaran:</strong> T/T (Telegraphic Transfer) / L/C (Letter of Credit) at Sight</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Certifications Tab -->
                    <div class="tab-pane fade" id="cert-pane" role="tabpanel" aria-labelledby="cert-tab" tabindex="0">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="cert-item-card p-3 border rounded-custom text-center">
                                    <i class="bi bi-file-earmark-check text-success fs-2" aria-hidden="true"></i>
                                    <h3 class="h6 fw-bold mt-2">Sertifikat Fitosanitari</h3>
                                    <p class="small text-muted mb-0">Diterbitkan resmi oleh Badan Karantina Pertanian Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cert-item-card p-3 border rounded-custom text-center">
                                    <i class="bi bi-file-earmark-text text-primary fs-2" aria-hidden="true"></i>
                                    <h3 class="h6 fw-bold mt-2">Surat Keterangan Asal (SKA / COO)</h3>
                                    <p class="small text-muted mb-0">Form D / Form AK / General COO untuk kemudahan tarif bea masuk negara tujuan</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cert-item-card p-3 border rounded-custom text-center">
                                    <i class="bi bi-award text-warning fs-2" aria-hidden="true"></i>
                                    <h3 class="h6 fw-bold mt-2">Certificate of Analysis (COA)</h3>
                                    <p class="small text-muted mb-0">Hasil uji laboratorium independen terakreditasi per lot pengiriman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>