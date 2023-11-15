<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class PasienController extends BaseController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'pasienn' => $this->userModel->getPasien(),
        ];

        return view('admin_patient', $data);
    }
    public function indexPegawai()
    {
        $data = [
            'pasienn' => $this->userModel->getPasien(),
        ];

        return view('pegawai_patient', $data);
    }
}
