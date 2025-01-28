<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div style="padding: 20px; font-family: 'Roboto', sans-serif; color: #333;">
    <h1 style="text-align: center; color: #2C3E50; font-weight: 700; font-size: 36px; margin-bottom: 20px;">Daftar Gitar</h1>

    <!-- Tabel Daftar Gitar -->
    <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; margin: auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <thead>
                <tr style="background-color: #34495E; color: #fff; text-align: left;">
                    <th style="padding: 12px; text-align: center;">ID</th>
                    <th style="padding: 12px;">Nama</th>
                    <th style="padding: 12px;">Merek</th>
                    <th style="padding: 12px;">Jenis</th>
                    <th style="padding: 12px;">Harga</th>
                    <th style="padding: 12px;">Stok</th>
                    <th style="padding: 12px; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gitars as $gitar): ?>
                    <tr style="border-bottom: 1px solid #ddd; transition: background-color 0.3s ease;">
                        <td style="padding: 12px; text-align: center;"><?= $gitar['id_produk']; ?></td>
                        <td style="padding: 12px;"><?= $gitar['nama_produk']; ?></td>
                        <td style="padding: 12px;"><?= $gitar['merek']; ?></td>
                        <td style="padding: 12px;"><?= $gitar['jenis']; ?></td>
                        <td style="padding: 12px; color:rgb(0, 0, 0); font-weight: bold;">Rp <?= number_format($gitar['harga'], 0, ',', '.'); ?></td>
                        <td style="padding: 12px;"><?= $gitar['stok']; ?></td>
                        <td style="padding: 12px; text-align: center;">
                            <a href="/gitars/detail/<?= $gitar['id_produk']; ?>"
                                style="background-color:rgb(32, 150, 228); color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; margin-right: 5px; font-size: 14px; transition: background-color 0.3s;">
                                Detail
                            </a>
                            <a href="/gitars/edit/<?= $gitar['id_produk']; ?>"
                                style="background-color: #F1C40F; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; margin-right: 5px; font-size: 14px; transition: background-color 0.3s;">
                                Edit
                            </a>
                            <a href="/gitars/delete/<?= $gitar['id_produk']; ?>"
                                style="background-color: #E74C3C; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; font-size: 14px; transition: background-color 0.3s;"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus gitar ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    table tbody tr:hover {
        background-color: #f8f9fa;
    }

    a:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }
</style>

<?= $this->endSection(); ?>