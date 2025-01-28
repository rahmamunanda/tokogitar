<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<style>
    .detail-container {
        max-width: 300px;
        height: auto;
        margin: 0 auto;
        padding: 1rem;
        background-color: rgba(184, 216, 247, 0.7);
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
        /* Menengahkan teks */
    }

    .detail-container img {
        display: block;
        width: 50%;
        max-width: 200px;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        margin-bottom: 1rem;
    }

    .detail-item {
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }

    .btn-container {
        text-align: center;
        margin-top: 1rem;
    }

    .btn {
        display: inline-block;
        padding: 0.5rem 1rem;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        border-radius: 4px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="detail-container">
    <h1>Detail Gitar</h1>
    <div class="image-container">
        <img src="/images/b4.jpg" alt="Gitar Akustik" class="guitar-image">
    </div>
    <div class="detail-item">
        <strong>Nama:</strong> <?= $gitar['nama_produk']; ?>
    </div>
    <div class="detail-item">
        <strong>Merek:</strong> <?= $gitar['merek']; ?>
    </div>
    <div class="detail-item">
        <strong>Jenis:</strong> <?= $gitar['jenis']; ?>
    </div>
    <div class="detail-item">
        <strong>Harga:</strong> Rp<?= number_format($gitar['harga'], 0, ',', '.'); ?>
    </div>
    <div class="detail-item">
        <strong>Stok:</strong> <?= $gitar['stok']; ?> unit
    </div>
</div>
<?= $this->endSection(); ?>