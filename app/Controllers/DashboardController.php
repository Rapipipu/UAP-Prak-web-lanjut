<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservasiModel;
use App\Models\UsersModel;
use App\Models\TerapisModel;


class DashboardController extends BaseController
{
    public $reservasiModel;
    public $usersModel;
    public $terapisModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->reservasiModel = new ReservasiModel();
        $this->terapisModel = new TerapisModel();
    }

    public function index()
    {
        $data = [
            'pelanggan' => $this->usersModel->getJumlahPasien(),
            'pegawai' => $this->usersModel->getJumlahPegawai(),
            'reservasi' => $this->reservasiModel->where('status', 'selesai')->countAllResults(),
            'terapis' => $this->terapisModel->countAllResults(),

        ];
        return view('dashboard', $data);
    }
}
