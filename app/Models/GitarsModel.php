<?php

namespace App\Models;

use CodeIgniter\Model;

class GitarsModel extends Model
{
    protected $table = 'gitars';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk', 'merek', 'jenis', 'harga', 'stok'];
}
