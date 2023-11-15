<?php

namespace App\Controllers;
use App\Models\LayananModel;

use App\Controllers\BaseController;

class LayananController extends BaseController
{
    public $layananModel;

    public function __construct()
    {
        $this->layananModel = new LayananModel();
    }

    public function index()
    {
        $data = [
            'layanann' => $this->layananModel->getLayanan(),
        ];

        return view('admin_service', $data);
    }

    public function indexPegawai()
    {
        $data = [
            'layanann' => $this->layananModel->getLayanan(),
        ];

        return view('pegawai_service', $data);
    }

    public function indexPelanggan()
    {
        $data = [
            'layanann' => $this->layananModel->getLayanan(),
        ];

        return view('pelanggan_service', $data);
    }
}
