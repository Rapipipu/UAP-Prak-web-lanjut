<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class PegawaiController extends BaseController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'pegawaii' => $this->userModel->getPegawai(),
        ];

        return view('admin_employee', $data);
    }
}
