<?php

namespace App\Models;

use CodeIgniter\Model;

class Nilai extends Model
{
    protected $table            = 'nilai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'nama', 'kode', 'matkul', 'sks', 'nilaimutu', 'nilai'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
