<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Gitar</title>
    <!-- Header atau Bagian Home -->
    <header style="text-align: center; margin-top: 2rem;">
        <div class="logo-container">
            <img src="/images/b.jpg" alt="Logo Toko Gitar" class="logo-bulat">
        </div>
    </header>

    <!-- CSS untuk membuat logo bulat dan memperbesar ukuran -->
    <style>
        .logo-bulat {
            width: 250px;
            /* Ukuran logo yang lebih besar */
            height: 250px;
            /* Ukuran logo yang lebih besar */
            border-radius: 50%;
            /* Membuat gambar menjadi bulat */
            object-fit: cover;
            /* Memastikan gambar tidak terdistorsi */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan untuk efek */
            margin-top: 50px;
            /* Memberikan jarak sedikit di atas logo untuk menurunkannya */
        }
    </style>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .home-content {
            text-align: center;
            padding: 2rem;
        }

        .featured-gitars {
            padding: 2rem;
            background-color: #f9f9f9;
        }

        .featured-gitars h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .gitars-list-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            padding: 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gitar-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .gitar-item:hover {
            transform: translateY(-10px);
        }

        .gitar-box img {
            width: 80%;
            /* Mengurangi ukuran gambar */
            height: auto;
            margin: 0 auto;
        }

        .gitar-box p {
            font-size: 1rem;
            margin: 0.5rem 0;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            margin: 1rem 0;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Judul Halaman -->
    <div class="home-content">
        <h1>Selamat Datang di Toko Kami</h1>
        <p>Temukan gitar terbaik untuk semua kebutuhan musik Anda. Kami menyediakan berbagai pilihan gitar dengan kualitas terbaik dari berbagai merek terkemuka. Baik Anda seorang pemula atau musisi berpengalaman, Toko Gitar adalah tempat yang tepat untuk memenuhi kebutuhan Anda.</p>
        <p>Kami berkomitmen untuk memberikan pelayanan terbaik, serta menyediakan gitar dengan harga yang kompetitif. Kami juga selalu mendengarkan saran dan masukan dari pelanggan untuk terus meningkatkan kualitas produk dan layanan kami.</p>
        <p>Jelajahi koleksi gitar kami dan temukan instrumen yang sempurna untuk setiap gaya musik Anda. Dari gitar akustik hingga elektrik, Toko Gitar memiliki semua yang Anda butuhkan untuk memulai perjalanan musik Anda.</p>
    </div>

    <!-- Produk Unggulan -->
    <div class="featured-gitars">
        <h2>Produk</h2>
        <div class="gitars-list-container">
            <div class="gitar-item" id="gitar1">
                <div class="gitar-box">
                    <img src="/images/b1.jpg" alt="Gitar Akustik" class="img-fluid">
                    <p>Gitar Akustik</p>
                    <a href="/gitars" class="btn">Lihat Daftar Gitar</a>
                </div>
            </div>
            <div class="gitar-item" id="gitar2">
                <div class="gitar-box">
                    <img src="/images/b2.jpg" alt="Gitar Elektrik" class="img-fluid">
                    <p>Gitar Elektrik</p>
                    <a href="/gitars" class="btn">Lihat Daftar Gitar</a>
                </div>
            </div>
            <div class="gitar-item" id="gitar3">
                <div class="gitar-box">
                    <img src="/images/b3.jpg" alt="Ukulele" class="img-fluid">
                    <p>Ukulele</p>
                    <a href="/gitars" class="btn">Lihat Daftar Gitar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?= $this->endSection(); ?>