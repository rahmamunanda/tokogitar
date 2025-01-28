<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Toko Gitar'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="navbar">
        <a href="/">Home</a>
        <a href="/gitars">Daftar Gitar</a>
        <a href="/gitars/add">Tambah Produk</a>
        <a href="/gitars/about">Tentang Kami</a> <!-- Link ke Tentang Kami -->
        <a href="/gitars/contact">Kontak Kami</a> <!-- Link ke Kontak Kami -->
    </div>
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>
</body>

<!-- Footer -->
<footer class="bg-dark text-white py-3 mt-5">
    <div class="container text-center">
        <!-- Social Media Links -->
        <div class="d-flex justify-content-center mb-2">
            <!-- WhatsApp Icon -->
            <a href="https://wa.me/+6281339155488?text=Hai%20kak,%20saya%20mau%20order" target="_blank" class="mx-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                    style="width: 30px; height: 30px;">
            </a>

            <!-- Instagram Icon -->
            <a href="https://instagram.com/rhmnandaa" target="_blank" class="mx-3">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5/icons/instagram.svg" alt="Instagram"
                    style="width: 30px; height: 30px;">
            </a>
        </div>

        <!-- Copyright -->
        <div>
            <p style="font-size: 14px;">&copy; <?= date('Y'); ?> Toko Gitar. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Link ke Font Awesome (untuk ikon WhatsApp dan Instagram) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</html>