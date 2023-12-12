<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('reservasi', true);
        $this->forge->dropTable('jadwalpraktik', true);
    }

    public function down()
    {
        //
    }
}
