<?php

namespace App\Models;

use CodeIgniter\Model;

class IntegrasiKegiatan extends Model
{
    protected $table = "integrasi_kegiatan";
    protected $primaryKey = "id_integrasi";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['judul_integrasi', 'dosen_integrasi', 'matkul_integrasi', 'tahun_integrasi'];
}
