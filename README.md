# Website Profil Perusahaan & Katalog Ekspor Asta Gina Saka (Magelang, Jawa Tengah)

Website Profil Perusahaan & Katalog Komoditas Ekspor yang profesional, modern, elegan, responsif, dan siap pakai (*production-ready*) untuk produsen dan eksportir komoditas alami asal **Magelang, Jawa Tengah, Indonesia** dengan 2 fokus produk utama:
1. **Gula Nira Kristal Premium (Nira Palm Sugar)**
2. **Vanilla Beans Premium / Grade A Gourmet (Polong Vanili)**

---

## 🌟 Fitur Utama

- **Bahasa Indonesia & Konten Lokal Magelang**: Seluruh teks, profil perusahaan, deskripsi produk, alur proses, dan formulir menggunakan Bahasa Indonesia profesional dengan penekanan pada keunggulan hasil bumi lereng pegunungan Magelang, Jawa Tengah.
- **2 Produk Komoditas Unggulan**: Fokus eksklusif pada 2 komoditas ekspor terbaik (Gula Nira & Vanilla) tanpa produk tambahan lain yang membingungkan calon pembeli/buyer.
- **Integrasi Direct WhatsApp**: Tombol konsultasi dan pemesanan WhatsApp otomatis dengan pesan yang sudah terformat rapi sesuai produk yang dibuka (*Nama Produk, Spesifikasi Mutu, MOQ, Asal Daerah Magelang*).
- **Formulir RFQ Interaktif**: Formulir Permintaan Penawaran Harga (Request for Quotation) yang langsung terhubung ke WhatsApp Manager Ekspor.
- **Database MySQL Dinamis**: Profil perusahaan, kategori, produk, galeri foto, dan tabel spesifikasi teknis (COA, kadar air, kemasan, MOQ) tersimpan di database MySQL.
- **Galeri Foto Interaktif**: Fitur thumbnail switcher foto produk responsif pada halaman detail produk.
- **Desain Responsif & Mobile-First**: Tampilan optimal di semua perangkat (smartphone, tablet, laptop, desktop).
- **SEO & Keamanan Standar Tinggi**: Semantic HTML5, Open Graph metadata, escape sanitizer `esc()`, proteksi CSRF, dan Query Builder anti SQL Injection.

---

## 🛠️ Persyaratan Sistem & Teknologi

- **Bahasa Pemrograman**: PHP **8.2** atau lebih tinggi
- **Framework**: CodeIgniter **v4.7.4**
- **Database**: MySQL 5.7+ / MariaDB 10.3+
- **Ekstensi PHP Wajib**:
  - `intl` (Internasionalisasi & lokalisasi)
  - `mbstring` (Manipulasi string multi-byte)
  - `mysqli` atau `pdo_mysql` (Koneksi database)
  - `json` (Pemrosesan format data JSON)
  - `libxml` (Parsing XML)
  - `curl` (Permintaan HTTP client)
  - `openssl` (Enkripsi dan keamanan)
- **Frontend UI**: Bootstrap 5.3, Bootstrap Icons 1.11, Custom CSS Modern
- **Typography**: Google Fonts (*Outfit* & *Inter*)
- **Dependency Manager**: Composer 2.x

---

## 📁 Struktur Direktori

```text
export-company/
├── app/
│   ├── Config/
│   │   ├── App.php                     # Konfigurasi aplikasi & base URL
│   │   ├── Database.php                # Konfigurasi koneksi database
│   │   ├── Paths.php                   # Path sistem CodeIgniter
│   │   └── Routes.php                  # Konfigurasi routing URL
│   ├── Controllers/
│   │   ├── HomeController.php          # Controller Beranda, Tentang Kami, Keunggulan, Proses, Katalog, Kontak
│   │   └── ProductController.php       # Controller Produk & Detail Spesifikasi
│   ├── Database/
│   │   ├── Migrations/                 # File migration skema tabel database
│   │   └── Seeds/
│   │       └── DatabaseSeeder.php      # Seeder data awal Magelang & komoditas
│   ├── Models/
│   │   ├── CategoryModel.php
│   │   ├── CompanyProfileModel.php
│   │   ├── ProductImageModel.php
│   │   ├── ProductModel.php
│   │   └── ProductSpecModel.php
│   └── Views/                          # Template tampilan (Clean MVC)
├── public/                             # Document Root Web Server
│   ├── assets/
│   │   ├── css/style.css               # Desain sistem responsif & modern
│   │   ├── js/main.js                  # Handler switcher foto, filter & form RFQ
│   │   └── images/                     # Foto aset produk & perkebunan
│   ├── .htaccess                       # Rewrite rules Apache & proteksi
│   ├── index.php                       # Front controller aplikasi
│   ├── favicon.ico
│   └── robots.txt
├── writable/                           # Folder runtime (cache, logs, uploads)
├── .env.example                        # Template konfigurasi environment (aman)
├── composer.json                       # Definisi dependensi project
├── composer.lock                       # Lockfile versi dependensi
├── spark                               # CLI runner CodeIgniter 4
└── README.md
```

---

## 🗄️ Struktur Database (MySQL)

Database default: `export_company`

1. **`company_profile`**: Informasi kontak, nama perusahaan, alamat di Magelang, visi, misi, dan nomor WhatsApp.
2. **`categories`**: 2 Kategori produk (*Gula Nira*, *Vanilla*).
3. **`products`**: 2 Produk utama (*Gula Nira Kristal Premium*, *Vanilla Beans Premium Grade A*), slug URL, deskripsi, origin (*Magelang, Jawa Tengah, Indonesia*), kemasan, MOQ.
4. **`product_images`**: Galeri foto per produk dengan status `is_primary`.
5. **`product_specs`**: Spesifikasi teknis (Asal Daerah, Grade Mutu, Bentuk/Form, Kadar Air, Kadar Vanillin, Kemasan, MOQ, Masa Simpan).

---

## 🚀 Panduan Instalasi & Menjalankan Lokal

### 1. Clone Repository & Install Dependensi
```bash
git clone https://github.com/Fadhila068/astaginasaka.git
cd astaginasaka
composer install
```

### 2. Siapkan File Konfigurasi `.env`
Salin template konfigurasi:
```bash
# Windows Command Prompt
copy .env.example .env

# PowerShell / Linux / macOS
cp .env.example .env
```
Buka file `.env` dan sesuaikan nilainya:
```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = export_company
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

### 3. Setup Database
Pastikan MySQL sudah berjalan (misalnya via XAMPP Control Panel), lalu pilih salah satu cara:

**Opsi A: Menggunakan Spark Migration & Seeder (Direkomendasikan)**
```bash
# Buat database 'export_company' terlebih dahulu di MySQL/phpMyAdmin, lalu jalankan:
php spark migrate
php spark db:seed DatabaseSeeder
```

**Opsi B: Menggunakan File SQL Dump (Manual)**
- Buka `http://localhost/phpmyadmin`
- Buat database baru bernama `export_company`
- Import skema dan data awal dari file dump SQL jika tersedia.

### 4. Jalankan Aplikasi
Jalankan local development server bawaan CodeIgniter:
```bash
php spark serve
```
Buka browser dan akses:
```text
http://localhost:8080/
```

*Jika menggunakan Apache XAMPP langsung tanpa spark serve, akses melalui:*
```text
http://localhost/export-company/public/
```

---

## 🌐 Daftar Halaman & Routing

| URL Route | Deskripsi Halaman |
| :--- | :--- |
| `/` | **Beranda** (Hero Magelang, Statistik, 2 Produk Unggulan, Keunggulan, CTA WhatsApp) |
| `/about` | **Tentang Kami** (Kisah hasil bumi Magelang, visi, misi, sentra perkebunan) |
| `/products` | **Produk** (Daftar 2 produk utama dengan filter kategori) |
| `/products/gula-nira-kristal-premium` | **Detail Produk Gula Nira** (Galeri, spesifikasi kadar air & mesh, dokumen mutu, direct WA) |
| `/products/vanilla-beans-premium` | **Detail Produk Vanilla** (Galeri, spesifikasi panjang & kadar vanillin, dokumen mutu, direct WA) |
| `/why-us` | **Keunggulan Kami** (6 keunggulan komoditas Magelang & layanan ekspor) |
| `/our-process` | **Proses Ekspor** (5 tahapan dari panen di Jawa Tengah hingga pengapalan ekspor) |
| `/catalog` | **Katalog Produk** (Spesifikasi teknis ringkas & tombol unduh panduan) |
| `/contact` | **Kontak & RFQ** (Alamat kantor Magelang, WhatsApp desk, form RFQ penawaran harga) |

---

## ☁️ Panduan & Catatan Deployment

### ⚠️ Penting: GitHub Pages Tidak Didukung
> **GitHub Pages TIDAK DAPAT digunakan untuk menjalankan website ini.**  
> GitHub Pages adalah hosting khusus file statis (HTML/CSS/JS) dan tidak memiliki mesin runtime **PHP** maupun database **MySQL**. Menempatkan project ini di GitHub Pages hanya akan memunculkan error atau teks skrip mentah.

### 🚀 Opsi Deployment ke Web Hosting

#### 1. Hosting dengan Dukungan Document Root Khusus (VPS / Cloud / cPanel)
- Tempatkan file proyek di server.
- Set **Document Root** domain mengarah ke subfolder `/public`.
- Folder `app/`, `vendor/`, `writable/`, dan file `.env` akan berada di luar direktori web publik, memberikan tingkat keamanan tertinggi.
- Jalankan `composer install --no-dev --optimize-autoloader` di server.
- Ubah `CI_ENVIRONMENT = production` di `.env` server.

#### 2. Shared Hosting tanpa Perubahan Document Root (seperti InfinityFree)
- Pada hosting tipe ini, semua file harus ditaruh di dalam folder web utama (`htdocs`).
- Pastikan modul `mod_rewrite` aktif.
- Proteksi folder sistem (`app`, `vendor`, `writable`) menggunakan aturan `.htaccess` dengan direktif `Require all denied` agar skrip backend tidak dapat diunduh langsung melalui URL browser.
- Blokir akses ke file `.env` di `.htaccess` utama.
- Karena shared hosting gratis biasanya tidak memiliki akses terminal/SSH untuk menjalankan Composer, dependensi folder `vendor` harus disiapkan secara lokal terlebih dahulu lalu diunggah via FTP/File Manager.
