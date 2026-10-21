<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-badge">Profil Perusahaan</span>
        <h1 class="page-title">Menghubungkan Kekayaan Hasil Bumi Magelang ke Pasar Global</h1>
        <p class="page-subtitle">Kemitraan petani lokal berkelanjutan, pengolahan higienis terstandarisasi, dan integritas perdagangan terpercaya</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="<?= base_url('assets/images/about.jpg') ?>" alt="Kemitraan Perkebunan Alami di Magelang Jawa Tengah" class="img-fluid rounded-custom shadow-lg" loading="lazy">
                    <div class="p-3 bg-white shadow rounded-custom position-absolute bottom-0 end-0 m-3 d-none d-md-block border">
                        <small class="text-uppercase text-muted fw-bold">Pusat Produksi</small>
                        <div class="fw-bold text-success"><i class="bi bi-geo-fill me-1" aria-hidden="true"></i> Magelang, Jawa Tengah</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-badge">Tentang Kami</span>
                <h2 class="section-title">Dedikasi untuk Mutu Gula Nira & Vanilla Alami</h2>
                <p class="section-text"><?= esc($company['description'] ?? 'Kami adalah perusahaan produsen dan eksportir komoditas alami unggulan asal Magelang, Jawa Tengah, Indonesia.') ?></p>
                <p class="section-text">Wilayah Magelang yang diapit oleh pegunungan Merapi, Merbabu, Sumbing, dan Menoreh memiliki tanah vulkanik yang sangat subur, iklim sejuk, dan ketersediaan air murni. Kondisi alam ini menghasilkan nira kelapa/aren berkualitas tinggi serta tanaman vanili dengan aroma vanillin pekat yang luar biasa.</p>
                <div class="row g-3 mt-2">
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-custom bg-light-custom">
                            <h3 class="h5 fw-bold text-primary mb-1">Kemitraan Adil</h3>
                            <p class="small text-muted mb-0">Memberdayakan kelompok tani lokal Magelang dengan sistem bagi hasil dan pembinaan mutu.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-custom bg-light-custom">
                            <h3 class="h5 fw-bold text-primary mb-1">100% Kemurnian</h3>
                            <p class="small text-muted mb-0">Bebas bahan kimia pengawet, pemutih, atau zat tambahan sintetis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="section-padding bg-light-custom" aria-labelledby="vision-mission-heading">
    <div class="container">
        <h2 id="vision-mission-heading" class="visually-hidden">Visi dan Misi Perusahaan</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6">
                <div class="vision-card h-100 p-4 p-md-5 bg-white border rounded-custom shadow-sm">
                    <div class="vision-icon mb-3 text-primary fs-1"><i class="bi bi-eye" aria-hidden="true"></i></div>
                    <h3 class="fw-bold mb-3">Visi Kami</h3>
                    <p class="text-muted leading-relaxed"><?= esc($company['vision'] ?? 'Menjadi produsen dan eksportir terkemuka produk Gula Nira dan Vanilla alami dari Magelang, Jawa Tengah yang diakui secara global atas kualitas unggul, keberlanjutan lingkungan, dan integritas kemitraan.') ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-card h-100 p-4 p-md-5 bg-white border rounded-custom shadow-sm">
                    <div class="vision-icon mb-3 text-success fs-1"><i class="bi bi-bullseye" aria-hidden="true"></i></div>
                    <h3 class="fw-bold mb-3">Misi Kami</h3>
                    <p class="text-muted leading-relaxed"><?= esc($company['mission'] ?? 'Menghasilkan produk alami berkualitas ekspor terbaik dari kekayaan agrikultur Magelang, memberdayakan petani lokal secara adil dan berkelanjutan, serta memberikan pelayanan pengiriman yang aman, tepat waktu, dan terpercaya bagi seluruh mitra bisnis.') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sourcing Regions Section (Magelang & Sekitarnya) -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Asal Wilayah & Sumber Alam</span>
            <h2 class="section-title">Kekayaan Alam Magelang & Jawa Tengah</h2>
            <p class="section-subtitle">Kondisi geografis pegunungan memberikan karakteristik rasa dan aroma terbaik pada setiap panen kami.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6">
                <div class="p-4 border rounded-custom h-100 bg-white shadow-sm">
                    <span class="badge bg-warning text-dark mb-2">Magelang & Lereng Menoreh</span>
                    <h3 class="h4 fw-bold">Sentra Gula Nira Alami</h3>
                    <p class="text-muted small">Pohon kelapa dan aren yang tumbuh di kawasan perbukitan Magelang menghasilkan nira segar dengan kadar kemanisan tinggi dan mineral alami yang seimbang.</p>
                    <ul class="list-unstyled small text-muted mb-0">
                        <li><i class="bi bi-check2 text-success me-1" aria-hidden="true"></i> Indeks Glikemik Rendah (Low GI)</li>
                        <li><i class="bi bi-check2 text-success me-1" aria-hidden="true"></i> Diproses higienis tanpa campuran gula pasir rafinasi</li>
                        <li><i class="bi bi-check2 text-success me-1" aria-hidden="true"></i> Pengeringan kristal hingga kadar air &le; 2%</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 border rounded-custom h-100 bg-white shadow-sm">
                    <span class="badge bg-success mb-2">Lereng Merbabu & Perkebunan Jawa Tengah</span>
                    <h3 class="h4 fw-bold">Perkebunan Vanilla Planifolia Gourmet</h3>
                    <p class="text-muted small">Ketinggian dan kelembapan iklim mikro di lereng pegunungan Jawa Tengah sangat ideal untuk penanaman vanili jenis Planifolia dengan polong panjang, tebal, dan berminyak.</p>
                    <ul class="list-unstyled small text-muted mb-0">
                        <li><i class="bi bi-check2 text-success me-1" aria-hidden="true"></i> Penyerbukan bunga vanili secara manual oleh petani ahli</li>
                        <li><i class="bi bi-check2 text-success me-1" aria-hidden="true"></i> Proses curing dan penjemuran sinar matahari 3-4 bulan</li>
                        <li><i class="bi bi-check2 text-success me-1" aria-hidden="true"></i> Kadar vanillin tinggi (&ge; 1.8%) beraroma kuat dan tahan lama</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>