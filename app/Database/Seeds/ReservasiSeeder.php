<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ReservasiModel;

class ReservasiSeeder extends Seeder
{
    public function run()
    {
        $reservasiModel = new ReservasiModel();

       
        $reservasiModel->save([
            'id_user' => 2,
            'id_layanan' => 2,
            'id_jadwal' => 2,
            'tanggal' => '2023-08-13',
            'status' => 'selesai',
        ]);
        $reservasiModel->save([
            'id_user' => 2,
            'id_layanan' => 3,
            'id_jadwal' => 3,
            'tanggal' => '2023-08-11',
            'status' => 'berjalan',
        ]);
    }
}
