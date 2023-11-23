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

        return view('reservation', $data);
    }


    public function create()
    {
        return view('reservation_create');
    }

    public function cancel($id)
    {   
    
        $result = $this->reservasiModel->cancelReservasi($id);
        if ($result) {

        return redirect()->to('/reservasi')->with('success', 'Service updated successfully');
        }
    }

    public function complete($id)
    {   
    
        $result = $this->reservasiModel->completeReservasi($id);
        if ($result) {

        return redirect()->to('/reservasi')->with('success', 'Service updated successfully');
        }
    }
}
