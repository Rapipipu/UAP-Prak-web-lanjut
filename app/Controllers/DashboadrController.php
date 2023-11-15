<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservasiModel;
use App\Models\UserModel;
use App\Models\TerapisModel;


class DashboardController extends BaseController
{
    public $reservasiModel;
    public $userModel;
    public $terapisModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->reservasiModel = new ReservasiModel();
        $this->terapisModel = new TerapisModel();
    }

    public function index()
    {
        $data = [
            'pelanggan' => $this->userModel->where('role', 'pelanggan')->countAllResults(),
            'pegawai' => $this->userModel->where('role', 'pegawai')->countAllResults(),
            'reservasi' => $this->reservasiModel->where('status', 'selesai')->countAllResults(),
            'terapis' => $this->terapisModel->countAllResults(),

        ];
        return view('admin_dashboard', $data);
    }

    public function indexPegawai()
    {
        $data = [
            'pelanggan' => $this->userModel->where('role', 'pelanggan')->countAllResults(),
            'pegawai' => $this->userModel->where('role', 'pelanggan')->countAllResults(),
            'reservasi' => $this->reservasiModel->where('status', 'selesai')->countAllResults(),
            'terapis' => $this->terapisModel->countAllResults(),

        ];
        return view('pegawai_dashboard', $data);
    }
}
