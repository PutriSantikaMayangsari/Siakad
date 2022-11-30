<?php

namespace App\Models;

use CodeIgniter\Model;

class Absen extends Model
{
    protected $table            = 'absen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'nama', 'tanggal', 'keterangan'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
