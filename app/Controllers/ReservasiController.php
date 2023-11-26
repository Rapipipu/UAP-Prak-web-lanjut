<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservasiModel;
use App\Models\LayananModel;
use App\Models\JadwalpraktikModel;
use App\Models\UsersModel;

class ReservasiController extends BaseController
{
    public $reservasiModel;
    public $layananModel;
    public $jadwalModel;
    public $usersModel;

    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
        $this->layananModel = new LayananModel();
        $this->jadwalModel = new JadwalpraktikModel();
        $this->usersModel = new UsersModel();
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
        $layanan =  $this->layananModel->getLayanan();
        $jadwal = $this->jadwalModel->getJadwal();
        $currentDate = date('Y-m-d');

        $data = [
            'layanann' => $layanan,
            'jadwall' => $jadwal,
            'tanggal' => $currentDate,
        ];
        return view('reservation_create', $data);
    }

    public function store()
    {

        $poin = user()->poin + 100;
        $id = user_id();

        $this->reservasiModel->save([
            'id_user' => user_id(),
            'id_layanan' => $this->request->getVar('layanan'),
            'id_jadwal' => $this->request->getVar('jadwal'),
            'tanggal' => $this->request->getVar('tanggal'),
            'status' => $this->request->getVar('status'),
        ]);

        $this->usersModel->tambahPoin($id, $poin);

        return redirect()->to(base_url('/reservasi/create'));
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
