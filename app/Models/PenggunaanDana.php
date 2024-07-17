<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaanDana extends Model
{
    protected $table = "penggunaan_dana";
    protected $primaryKey = "id_penggunaan";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['jenis_penggunaan', 'biaya_penggunaan'];
}
