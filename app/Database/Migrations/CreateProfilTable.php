<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfilTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'npm' => [
                'type'       => 'VARCHAR',
                'constraint' => '12',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'prodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jalur' => [
                'type'       => 'ENUM("SNMPTN","SBMPTN","MANDIRI","PRESTASI")',
                'default' => 'SNMPTN',
            ],
            'jk' => [
                'type'       => 'ENUM("Perempuan","Laki-Laki")',
                'default' => 'Perempuan',
            ],
            'tlahir' => [
                'type'       => 'DATE',
            ],
            'tmptlahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'goldar' => [
                'type'       => 'ENUM("A","B","O","AB")',
                'default' => 'A',
            ],
            'ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'penghasilanayah' =>
            [
                'type'       => 'ENUM("0-1JT","1-3JT","3-5JT",">5JT","Tanpa Penghasilan")',
                'default' => 'Tanpa Penghasilan',
            ],
            'penghasilanibu' =>
            [
                'type'       => 'ENUM("0-1JT","1-3JT","3-5JT",">5JT","Tanpa Penghasilan")',
                'default' => 'Tanpa Penghasilan',
            ],
            'pendidikan' => [
                'type'       => 'ENUM("SD - Sekolah Dasar","SMP - SMP/Sederajat","SMA - SMA/SMK/Sederajat","D3 - diploma tiga","D4 - diploma empat","S1 - sarjana","S2 - magister","S3 - doktoral","SP1 - profesi","Spes1 - spesialis")',
                'default' => 'D3 - diploma tiga',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kewarganegaraan' =>
            [
                'type'       => 'ENUM("Indonesia","Canada","Korea Selatan","Tiongkok","Jepang")',
                'default' => 'Indonesia',
            ],
            'kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('profil');
    }

    public function down()
    {
        $this->forge->dropTable('profil');
    }
}
