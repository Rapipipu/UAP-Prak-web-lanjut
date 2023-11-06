<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LayananModel;

class LayananSeeder extends Seeder
{
    public function run()
    {
        $layananModel = new LayananModel();

        $layananModel->save([
            'layanan' => 'Pijat',
            'harga' => 50000,
        ]);
        $layananModel->save([
            'layanan' => 'Reflexology',
            'harga' => 70000,
        ]);
        $layananModel->save([
            'layanan' => 'Urut Keseleo',
            'harga' => 30000,
        ]);
    }
}
