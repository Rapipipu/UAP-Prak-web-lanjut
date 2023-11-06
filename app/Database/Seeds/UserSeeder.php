<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $userModel->save([
            'username' => 'Muhammad Rafi Satria',
            'password' => '12345',
            'umur' => 21,
            'poin' => 0,
            'telefon' => '08776688566',
            'role' => 'admin',
        ]);
        $userModel->save([
            'username' => 'Enjelita Aini Natasya',
            'password' => '12345',
            'umur' => 21,
            'poin' => 0,
            'telefon' => '098866339988',
            'role' => 'pelanggan',
        ]);
        $userModel->save([
            'username' => 'Armiana',
            'password' => '12345',
            'umur' => 21,
            'poin' => 0,
            'telefon' => '00994466788',
            'role' => 'pegawai',
        ]);
    }
}
