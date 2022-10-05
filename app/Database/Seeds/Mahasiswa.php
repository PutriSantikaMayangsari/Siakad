<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2057051011',
                'nama'    => 'Putri Santika Mayangsari',
                'alamat' => 'Bogor',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2057051001',
                'nama'    => 'Fitriah Hardianti',
                'alamat' => 'Lampung',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2057051024',
                'nama'    => 'Pynka Aryani',
                'alamat' => 'Lampung',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2057051006',
                'nama'    => 'Siti Nabila',
                'alamat' => 'Banten',
                'created_at' => Time::now()
            ],
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
