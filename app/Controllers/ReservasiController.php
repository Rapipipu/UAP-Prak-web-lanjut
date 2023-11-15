<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservasiModel;

class ReservasiController extends BaseController
{
    public $reservasiModel;

    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }

    public function index()
    {
        $data = [
            'reservasii' => $this->reservasiModel->getReservasi(),
        ];

        return view('admin_reservation', $data);
    }

    public function indexPegawai()
    {
        $data = [
            'reservasii' => $this->reservasiModel->getReservasi(),
        ];

        return view('pegawai_reservation', $data);
    }

    public function create()
    {
        return view('pelanggan_reservation');
    }
}
