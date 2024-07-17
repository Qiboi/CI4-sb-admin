<?php

namespace App\Models;

use CodeIgniter\Model;

class KepuasanMahasiswa extends Model
{
    protected $table = "kepuasan_mahasiswa";
    protected $primaryKey = "id_kepuasan";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['aspek_kepuasan', 'sangat_baik', 'baik', 'cukup', 'kurang', 'rencana_kepuasan'];
}
