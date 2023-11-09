<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\TerapisModel;

class TerapisSeeder extends Seeder
{
    public function run()
    {
        $terapisModel = new TerapisModel();

        $terapisModel->save([
            'nama' => 'Armiana',
            'umur' => 45,
        ]);
        $terapisModel->save([
            'nama' => 'Rina',
            'umur' => 30,
        ]);
        $terapisModel->save([
            'nama' => 'Doni',
            'umur' => 35,
        ]);
    }
}
