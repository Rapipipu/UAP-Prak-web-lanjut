<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservasiModel;
use App\Models\UsersModel;
use App\Models\TerapisModel;


class DashboardController extends BaseController
{
    public $reservasiModel;
    public $userModel;
    public $terapisModel;

    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->reservasiModel = new ReservasiModel();
        $this->terapisModel = new TerapisModel();
    }

    public function index()
    {
        $data = [
            'pelanggan' => $this->userModel->getJumlahPasien(),
            'pegawai' => $this->userModel->getJumlahPegawai(),
            'reservasi' => $this->reservasiModel->where('status', 'selesai')->countAllResults(),
            'terapis' => $this->terapisModel->countAllResults(),

        ];
        return view('dashboard', $data);
    }
}
