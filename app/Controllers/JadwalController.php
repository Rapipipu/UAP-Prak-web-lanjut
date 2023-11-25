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

        return view('practice', $data);
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

        $this->JadwalpraktikModel->saveJadwal([
            'nama' => $this->request->getVar('nama'),
            'jam' => $this->request->getVar('jam'),
        ]);

        return redirect()->to(base_url('/practice'));
    }

    public function create(){

        return view('jadwal_create');
    }
}
