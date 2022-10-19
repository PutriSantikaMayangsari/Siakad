<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalTable extends Migration
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
            'waktu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'matkul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ruang' => [
                'type'       => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
