<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Gula Nira & Vanilla Magelang Jawa Tengah - Ekspor Berkualitas') ?></title>
    <meta name="description" content="<?= esc($description ?? 'Produsen dan eksportir resmi Gula Nira dan Vanilla alami dari Magelang, Jawa Tengah, Indonesia.') ?>">
    <meta name="keywords" content="gula nira magelang, vanilla magelang, gula semut jawa tengah, eksportir gula aren, vanilla beans indonesia, agro ekspor">
    <link rel="canonical" href="<?= current_url() ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/astasaka.png') ?>">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/astasaka.png') ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= esc($title ?? '') ?>">
    <meta property="og:description" content="<?= esc($description ?? '') ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:image" content="<?= base_url('assets/images/hero.jpg') ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <!-- Skip to Main Content Link for Keyboard and Screen Reader Users -->
    <a href="#main-content" class="skip-link">Lewati ke konten utama</a>

    <header>
        <?= view('layouts/navbar', ['company' => $company ?? []]) ?>
    </header>

    <main id="main-content" tabindex="-1">
        <?= view($page, array_merge(get_defined_vars(), ['company' => $company ?? []])) ?>
    </main>

    <?= view('layouts/footer', ['company' => $company ?? []]) ?>

    <!-- Floating WhatsApp Button -->
    <?php $waNum = $company['whatsapp'] ?? '6281329996003'; ?>
    <a href="https://wa.me/<?= esc($waNum) ?>?text=<?= rawurlencode('Halo Asta Gina Saka Magelang, saya ingin berkonsultasi mengenai produk Gula Nira dan Vanilla.') ?>"
       class="floating-wa" target="_blank" rel="noopener noreferrer"
       aria-label="Hubungi kami melalui WhatsApp (Membuka di tab baru)">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
