<?php

namespace App\Models;

use CodeIgniter\Model;

class Krs extends Model
{
    protected $table            = 'krs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['kode', 'matkul', 'sks', 'smt', 'kelas', 'ruang', 'dosen'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
