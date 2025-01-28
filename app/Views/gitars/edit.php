<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center text-primary mb-4">Edit Gitar</h1>
<p class="text-center mb-4">Silakan perbarui informasi gitar berikut:</p>

<div class="container">
    <form action="/gitars/update/<?= $gitar['id_produk']; ?>" method="POST" class="border p-5 rounded shadow-lg bg-light">
        <div class="mb-3">
            <label for="nama_produk" class="form-label text-info">Nama Produk:</label>
            <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="<?= $gitar['nama_produk']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="merek" class="form-label text-info">Merek:</label>
            <input type="text" id="merek" name="merek" class="form-control" value="<?= $gitar['merek']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label text-info">Jenis:</label>
            <input type="text" id="jenis" name="jenis" class="form-control" value="<?= $gitar['jenis']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label text-info">Harga:</label>
            <input type="number" id="harga" name="harga" class="form-control" value="<?= $gitar['harga']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label text-info">Stok:</label>
            <input type="number" id="stok" name="stok" class="form-control" value="<?= $gitar['stok']; ?>" required>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-warning w-50">Perbarui</button>
        </div>
    </form>

    <!-- Tombol Exit yang mengarah ke Home, dengan class tambahan untuk penataan -->
    <div class="text-center mt-4">
        <a href="/" class="btn btn-danger w-50">Exit</a>
    </div>
</div>

<?= $this->endSection(); ?>