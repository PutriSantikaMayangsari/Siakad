<?php

namespace App\Models;

use CodeIgniter\Model;

class Profil extends Model
{
    protected $table            = 'profil';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = [
        'npm', 'nama', 'prodi', 'jalur', 'jk', 'tlahir', 'tmptlahir', 'goldar',
        'ayah', 'ibu', 'penghasilanayah', 'penghasilanibu', 'pendidikan', 'alamat', 'kewarganegaraan',
        'kode', 'status'
    ];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
