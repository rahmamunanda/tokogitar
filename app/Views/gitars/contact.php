<!-- app/Views/gitars/contact.php -->
<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<h1>Kontak Kami</h1>
<p>Jika Anda memiliki pertanyaan atau ingin melakukan pemesanan, silakan hubungi kami melalui formulir berikut:</p>

<form action="/gitars/sendMessage" method="POST">
    <div>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="message">Pesan:</label>
        <textarea name="message" id="message" rows="4" required></textarea>
    </div>
    <button type="submit">Kirim Pesan</button>
</form>
<!-- Tombol Exit yang mengarah ke Home, dengan class tambahan untuk penataan -->
<div class="text-center mt-5">
    <a href="/" class="btn btn-danger">Exit</a>
</div>
<?= $this->endSection(); ?>