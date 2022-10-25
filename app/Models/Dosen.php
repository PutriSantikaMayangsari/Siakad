<?php

namespace App\Models;

use CodeIgniter\Model;

class Dosen extends Model
{
    protected $table            = 'dosen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['nip', 'nama', 'prodi', 'deskripsi'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
