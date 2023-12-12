<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GroupModel;

class AdminController extends BaseController
{
    public $usersModel;
    public $groupModel;


    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->groupModel = new GroupModel();
    }
    public function index()
    {
        $data = [
            'adminn' => $this->usersModel->getAdmin(),
        ];

        return view('admin', $data);
    }

    public function turnPasien($id){
        
        $this->groupModel->turnPasien($id);


        return redirect()->to('/admin');

    }
}
