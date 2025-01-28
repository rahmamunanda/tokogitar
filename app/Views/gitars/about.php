<!-- app/Views/gitars/about.php -->
<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="about-section">
    <h1>Tentang Kami</h1>
    <p>Selamat datang di <strong>Toko Gitar</strong>, tempat terbaik untuk membeli gitar berkualitas tinggi. Kami hadir untuk memenuhi segala kebutuhan musik Anda, dengan berbagai pilihan gitar dari berbagai merek terkenal.</p>

    <h2>Visi Kami</h2>
    <p>Menjadi penyedia gitar terbaik yang mendukung para musisi di seluruh dunia untuk mencapai impian musik mereka dengan alat musik berkualitas dan pelayanan yang memuaskan.</p>

    <h2>Misi Kami</h2>
    <ul>
        <li>Memberikan produk gitar terbaik dengan harga yang kompetitif.</li>
        <li>Memberikan pengalaman berbelanja yang menyenangkan dan aman.</li>
        <li>Selalu mendengarkan kebutuhan pelanggan dan memberikan pelayanan terbaik.</li>
    </ul>

    <h2>Kenapa Memilih Kami?</h2>
    <p>Di <strong>Toko Gitar</strong>, kami hanya menyediakan gitar-gitar yang telah teruji kualitasnya. Kami bekerja sama dengan merek-merek gitar terkenal, sehingga Anda bisa merasa yakin dengan setiap pembelian yang Anda lakukan. Tidak hanya itu, tim kami siap membantu Anda memilih gitar yang paling sesuai dengan kebutuhan dan gaya bermain Anda.</p>

    <h2>Hubungi Kami</h2>
    <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami melalui email atau telepon. Kami siap membantu Anda setiap saat.</p>

    <!-- Tombol Exit yang mengarah ke Home, dengan class tambahan untuk penataan -->
    <div class="text-center mt-5">
        <a href="/" class="btn btn-danger">Exit</a>
    </div>
</div>
<?= $this->endSection(); ?>