<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GroupModel;

class PegawaiController extends BaseController
{
    public $userModel;
    public $groupModel;


    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->groupModel = new GroupModel();
    }
    public function index()
    {
        $data = [
            'pegawaii' => $this->userModel->getPegawai(),
        ];

        return view('employee', $data);
    }

    public function turnPasien($id){
        
        $result = $this->groupModel->turnPasien($id);

        if ($result) {
        return redirect()->to('/employee');
        }
    }
    
    public function deletePegawai($id)
    {   
    
        $result = $this->userModel->deletePegawai($id);
        if ($result) {

        return redirect()->to('/pegawai')->with('success', 'Service updated successfully');
        }
    }
}
