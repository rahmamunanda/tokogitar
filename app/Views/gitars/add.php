<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center mb-4 text-primary">Tambah Produk</h1>

<div class="container">
    <form action="/gitars/create" method="post" class="border p-5 rounded shadow-lg bg-light">
        <div class="mb-3">
            <label for="nama_produk" class="form-label text-info">Nama Produk:</label>
            <input type="text" id="nama_produk" name="nama_produk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="merek" class="form-label text-info">Merek:</label>
            <input type="text" id="merek" name="merek" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label text-info">Jenis:</label>
            <input type="text" id="jenis" name="jenis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label text-info">Harga:</label>
            <input type="number" id="harga" name="harga" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label text-info">Stok:</label>
            <input type="number" id="stok" name="stok" class="form-control" required>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success w-50">Simpan</button>
        </div>

        <!-- Tombol Exit yang mengarah ke Home, dengan class tambahan untuk penataan -->
        <div class="text-center mt-3">
            <a href="/" class="btn btn-danger w-50">Exit</a>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>