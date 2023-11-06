<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\JadwalpraktikModel;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        $jadwalpraktikModel = new JadwalpraktikModel();

        $jadwalpraktikModel->save([
            'id_terapis' => 1,
            'jam' => '12.00',
        ]);
        $jadwalpraktikModel->save([
            'id_terapis' => 2,
            'jam' => '13.00',
        ]);
        $jadwalpraktikModel->save([
            'id_terapis' => 3,
            'jam' => '10.00',
        ]);
    }
}
