<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilaiTable extends Migration
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
                'constraint' => '10',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'matkul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sks' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nilaimutu' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nilai' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => 'true',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => 'true',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('nilai');
    }

    public function down()
    {
        $this->forge->dropTable('nilai');
    }
}
