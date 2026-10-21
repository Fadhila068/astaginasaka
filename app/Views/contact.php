<?php $waNum = $company['whatsapp'] ?? '6281329996003'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-badge">Layanan Kontak & Pemesanan</span>
        <h1 class="page-title">Hubungi Kami & Permintaan Harga</h1>
        <p class="page-subtitle">Komunikasi langsung dengan tim manajemen kami di Magelang, Jawa Tengah. Penawaran harga cepat, data teknis (COA), dan dukungan pengemasan kustom.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Interactive Form -->
            <div class="col-lg-7">
                <div class="rfq-form-card p-4 p-md-5 rounded-custom border shadow-sm bg-white">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-square bg-primary-subtle text-primary me-3 p-3 rounded-circle" aria-hidden="true">
                            <i class="bi bi-chat-left-text fs-4"></i>
                        </div>
                        <div>
                            <h2 class="h3 mb-1 fw-bold">Kirim Pesan / Kontak Kami</h2>
                            <p class="text-muted small mb-0">Silakan isi formulir di bawah ini untuk terhubung langsung dengan tim Asta Gina Saka.</p>
                        </div>
                    </div>

                    <form id="contactForm" onsubmit="handleContactSubmit(event)">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="contactName" class="form-label fw-semibold">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="contactName" name="name" autocomplete="name" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactPhone" class="form-label fw-semibold">Kontak / No. WhatsApp *</label>
                                <input type="tel" class="form-control" id="contactPhone" name="phone" autocomplete="tel" placeholder="Contoh: 081234567890" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactEmail" class="form-label fw-semibold">Email *</label>
                                <input type="email" class="form-control" id="contactEmail" name="email" autocomplete="email" placeholder="nama@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactSubject" class="form-label fw-semibold">Subjek *</label>
                                <input type="text" class="form-control" id="contactSubject" name="subject" placeholder="Contoh: Permintaan Penawaran Gula Nira" required>
                            </div>
                            <div class="col-12">
                                <label for="contactMessage" class="form-label fw-semibold">Pesan *</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda secara rinci..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-wa btn-lg w-100 py-3 fw-bold" aria-label="Kirim pesan melalui WhatsApp (Membuka di tab baru)">
                                    <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Kirim Pesan via WhatsApp
                                </button>
                                <small class="text-muted d-block text-center mt-2">
                                    <i class="bi bi-shield-lock-fill me-1" aria-hidden="true"></i>Pesan Anda akan langsung terhubung dengan tim customer service kami.
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Corporate Contact Details -->
            <div class="col-lg-5">
                <div class="contact-info-card p-4 rounded-custom border bg-light-custom h-100">
                    <h2 class="h3 fw-bold mb-4">Kantor & Pusat Gudang</h2>
                    
                    <div class="contact-info-list mb-4">
                        <div class="contact-info-item mb-3">
                            <div class="contact-icon" aria-hidden="true"><i class="bi bi-building"></i></div>
                            <div>
                                <small class="text-muted text-uppercase fw-bold">Perusahaan</small>
                                <p class="mb-0 fw-semibold"><?= esc($company['company_name'] ?? 'Asta Gina Saka') ?></p>
                            </div>
                        </div>
                        <div class="contact-info-item mb-3">
                            <div class="contact-icon" aria-hidden="true"><i class="bi bi-geo-alt"></i></div>
                            <div>
                                <small class="text-muted text-uppercase fw-bold">Alamat Kantor & Gudang</small>
                                <p class="mb-0"><?= esc($company['address'] ?? 'Jl. Mayor Human No. 15, Pakelan, Mertoyudan, Magelang, Jawa Tengah') ?></p>
                            </div>
                        </div>
                        <div class="contact-info-item mb-3">
                            <div class="contact-icon" aria-hidden="true"><i class="bi bi-envelope"></i></div>
                            <div>
                                <small class="text-muted text-uppercase fw-bold">Email Resmi</small>
                                <p class="mb-0"><a href="mailto:<?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?>" class="text-decoration-none" aria-label="Kirim email ke <?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?>"><?= esc($company['email'] ?? 'astaginasakaofficial@gmail.com') ?></a></p>
                            </div>
                        </div>
                        <div class="contact-info-item mb-3">
                            <div class="contact-icon" aria-hidden="true"><i class="bi bi-whatsapp"></i></div>
                            <div>
                                <small class="text-muted text-uppercase fw-bold">Layanan WhatsApp / HP</small>
                                <p class="mb-0"><a href="https://wa.me/<?= esc($waNum) ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none fw-bold text-success" aria-label="Hubungi WhatsApp perusahaan +62 813-2999-6003 (Membuka di tab baru)">+62 813-2999-6003</a></p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon" aria-hidden="true"><i class="bi bi-clock"></i></div>
                            <div>
                                <small class="text-muted text-uppercase fw-bold">Jam Operasional</small>
                                <p class="mb-0">Senin – Sabtu: 08:00 – 17:00 WIB <br><span class="badge bg-success">Respon WhatsApp Aktif Setiap Hari</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>