<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMentoringTable extends Migration
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
            'matkul' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '1',
            ],
            'absensi' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'nilai' => [
                'type'       => 'INT',
                'constraint' => '2',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mentoring');
    }

    public function down()
    {
        $this->forge->dropTable('mentoring');
    }
}
