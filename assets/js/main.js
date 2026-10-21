/**
 * AGRO EKSPOR NUSANTARA (MAGELANG, JAWA TENGAH) - Main JavaScript
 * Handles navbar interactions, gallery switcher, smooth UX, RFQ submission.
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Navbar Scroll Effect
    const navbar = document.getElementById('mainNavbar');
    if (navbar) {
        const handleScroll = () => {
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // Initial check
    }

    // 2. Active Nav Link Highlighting
    const currentPath = window.location.pathname.replace(/\/$/, "");
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href) {
            const linkPath = new URL(href, window.location.origin).pathname.replace(/\/$/, "");
            if (currentPath === linkPath || (linkPath !== '' && currentPath.endsWith(linkPath))) {
                link.classList.add('active');
            }
        }
    });

    // 3. Mobile Navbar Auto-close on Link Click
    const navCollapse = document.getElementById('navbarNav');
    if (navCollapse) {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                if (bsCollapse && window.innerWidth < 992) {
                    bsCollapse.hide();
                }
            });
        });
    }

    // 4. Category Filter Buttons for Product Listing (Gula Nira & Vanilla)
    const filterBtns = document.querySelectorAll('.btn-filter');
    const productItems = document.querySelectorAll('.product-item-filter');

    if (filterBtns.length > 0 && productItems.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('active');
                    b.setAttribute('aria-pressed', 'false');
                });
                btn.classList.add('active');
                btn.setAttribute('aria-pressed', 'true');

                const filter = btn.getAttribute('data-filter');
                productItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => { item.style.opacity = '1'; }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.display = 'none';
                    }
                });
            });
        });
    }
});

/**
 * Gallery Image Switcher for Product Detail
 * @param {HTMLElement} btn - The clicked thumbnail button
 * @param {string} src - The image URL to display in main view
 */
function changeGalleryImage(btn, src) {
    const mainImg = document.getElementById('galleryMainImg');
    if (!mainImg) return;

    // Fade effect
    mainImg.style.opacity = '0.4';
    setTimeout(() => {
        mainImg.src = src;
        mainImg.style.opacity = '1';
    }, 150);

    // Update active thumb
    const thumbs = document.querySelectorAll('.gallery-thumb');
    thumbs.forEach(t => t.classList.remove('active'));
    if (btn) {
        btn.classList.add('active');
    }
}

/**
 * Handle Contact Form Submission to WhatsApp (5 Fields: Nama, Kontak, Email, Subjek, Pesan)
 */
function handleContactSubmit(e) {
    e.preventDefault();

    const name = document.getElementById('contactName')?.value || '';
    const phone = document.getElementById('contactPhone')?.value || '';
    const email = document.getElementById('contactEmail')?.value || '';
    const subject = document.getElementById('contactSubject')?.value || '';
    const messageText = document.getElementById('contactMessage')?.value || '';

    const message = `*PESAN BARU DARI WEBSITE*\n` +
                    `*Asta Gina Saka - Magelang, Jawa Tengah*\n` +
                    `----------------------------------\n` +
                    `*Nama Pengirim:* ${name}\n` +
                    `*Kontak / No. WA:* ${phone}\n` +
                    `*Email:* ${email}\n` +
                    `*Subjek:* ${subject}\n` +
                    `----------------------------------\n` +
                    `*Pesan:*\n${messageText}`;

    const waNum = '6281329996003';
    const waUrl = `https://wa.me/${waNum}?text=${encodeURIComponent(message)}`;

    window.open(waUrl, '_blank', 'noopener,noreferrer');
}

// Backward compatibility alias
function handleRfqSubmit(e) {
    handleContactSubmit(e);
}

// Clear any residual translation cookies/storage
try {
    localStorage.removeItem('site_lang_code');
    localStorage.removeItem('site_lang_label');
    localStorage.removeItem('site_lang_flag');
    document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
} catch (e) {}
