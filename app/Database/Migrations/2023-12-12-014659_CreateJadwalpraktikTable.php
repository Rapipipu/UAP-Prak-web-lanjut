<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalpraktikTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_terapis' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'jam' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
            ]);

            $this->forge->addKey('id', true, true);
            $this->forge->addForeignKey('id_terapis', 'terapis', 'id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('jadwalpraktik');
    }

    public function down()
    {
        $this->forge->dropTable('jadwalpraktik', true);
    }
}
