<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTerapisTable extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'umur' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'foto' => [
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
            $this->forge->createTable('terapis');
    }

    public function down()
    {
        $this->forge->dropTable('terapis', true);
    }
}
