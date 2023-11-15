<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalpraktikModel;

class JadwalController extends BaseController
{
    public $jadwalpraktikModel;

    public function __construct()
    {
        $this->jadwalpraktikModel = new JadwalpraktikModel();
    }

    public function index()
    {
        $data = [
            'jadwall' => $this->jadwalpraktikModel->getJadwal(),
        ];

        return view('admin_practice', $data);
    }

    public function indexPegawai()
    {
        $data = [
            'jadwall' => $this->jadwalpraktikModel->getJadwal(),
        ];

        return view('pegawai_practice', $data);
    }

    public function indexPelanggan()
    {
        $data = [
            'jadwall' => $this->jadwalpraktikModel->getJadwal(),
        ];

        return view('pelanggan_practice', $data);
    }
}
