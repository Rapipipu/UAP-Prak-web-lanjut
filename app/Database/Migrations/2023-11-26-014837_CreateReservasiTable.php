<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservasiTable extends Migration
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
            'id_user' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'id_layanan' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'id_jadwal' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'tanggal' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
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
            $this->forge->addForeignKey('id_user', 'users', 'id');
            $this->forge->addForeignKey('id_layanan', 'layanan', 'id');
            $this->forge->addForeignKey('id_jadwal', 'jadwalpraktik', 'id');
            $this->forge->createTable('reservasi');
    }

    public function down()
    {
        $this->forge->dropTable('reservasi', true);
    }
}

