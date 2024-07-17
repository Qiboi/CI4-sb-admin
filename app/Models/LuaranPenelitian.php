<?php

namespace App\Models;

use CodeIgniter\Model;

class LuaranPenelitian extends Model
{
    protected $table = "luaran_penelitian";
    protected $primaryKey = "id_luaran";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_luaran', 'tahun_luaran', 'keterangan_luaran'];
}
