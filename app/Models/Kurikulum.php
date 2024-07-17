<?php

namespace App\Models;

use CodeIgniter\Model;

class Kurikulum extends Model
{
    protected $table = "kurikulum";
    protected $primaryKey = "id_kurikulum";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['semester', 'kode_matkul', 'nama_matkul', 'sks', 'konversi', 'unit'];
}
