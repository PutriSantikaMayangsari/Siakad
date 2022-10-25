<?php

namespace App\Models;

use CodeIgniter\Model;

class Mentoring extends Model
{
    protected $table            = 'mentoring';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['matkul', 'kelas', 'absensi', 'nilai'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
