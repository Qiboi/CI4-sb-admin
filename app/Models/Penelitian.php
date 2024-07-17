<?php

namespace App\Models;

use CodeIgniter\Model;

class Penelitian extends Model
{
    protected $table = "penelitian";
    protected $primaryKey = "id_penelitian";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['dosen_penelitian', 'mahasiswa_penelitian', 'judul_penelitian', 'tahun_penelitian'];
}
