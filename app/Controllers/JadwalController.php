<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalpraktikModel;
use App\Models\TerapisModel;

class JadwalController extends BaseController
{
    public $jadwalpraktikModel;
    public $terapisModel;

    public function __construct()
    {
        $this->jadwalpraktikModel = new JadwalpraktikModel();
        $this->terapisModel = new TerapisModel();
    }

    public function index()
    {
        $data = [
            'jadwall' => $this->jadwalpraktikModel->getJadwal(),
        ];
       // dd($data);
        return view('practice', $data);
    }


    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
            'jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/jadwal/create'))->withInput()->with('validation', $validation);
        }

        $this->jadwalpraktikModel->saveJadwal([
            'nama' => $this->request->getVar('nama'),
            'jam' => $this->request->getVar('jam'),
        ]);

        return redirect()->to(base_url('/practice'));
    }

    public function create(){
        
        $data = [
            'terapiss' => $this->terapisModel->getTerapis(),
        ];

        return view('practice_create', $data);
    }
    public function delete($id){
        //dd($id);
        $this->jadwalpraktikModel->deleteJadwal($id);
        return redirect()->to(base_url('/jadwal'));

    }
}
