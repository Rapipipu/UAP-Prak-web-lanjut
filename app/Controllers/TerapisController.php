<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TerapisModel;

class TerapisController extends BaseController
{
    public $terapisModel;

    public function __construct()
    {
        $this->terapisModel = new TerapisModel();
    }

    public function index()
    {
        $data = [
            'terapiss' => $this->terapisModel->getTerapis(),
        ];

        return view('admin_terapist', $data);
    }

    public function indexPegawai()
    {
        $data = [
            'terapiss' => $this->terapisModel->getTerapis(),
        ];

        return view('pegawai_terapist', $data);
    }
}
