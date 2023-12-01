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
        // Validasi formulir untuk penyimpanan baru
        $validationRules = [
            'nama' => 'required',
            'jam' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/jadwal/create'))->withInput()->with('validation', $validation);
        }

        // Simpan jadwal praktik baru
        $this->jadwalpraktikModel->save([
            'nama' => $this->request->getVar('nama'),
            'jam' => $this->request->getVar('jam'),
        ]);

        return redirect()->to(base_url('/practice'));
    }

    public function create()
    {
        $data = [
            'terapiss' => $this->terapisModel->getTerapis(),
        ];

        return view('practice_create', $data);
    }

    public function delete($id){
        //dd($id);
        $this->jadwalpraktikModel->deleteJadwal($id);
        return redirect()->to(base_url('/jadwal'));



    public function edit($id)
    {
        $data['jadwal'] = $this->jadwalpraktikModel->find($id);
        $data['terapiss'] = $this->terapisModel->getTerapis();

        return view('practice_edit', $data);
    }

    public function update($id)
    {
        // Validasi data yang diterima dari formulir
        $validationRules = [
            'id_terapis' => 'required',
            'jam' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url("/jadwal/edit/{$id}"))->withInput()->with('validation', $validation);
        }

        // Dapatkan data terapis dan jam yang dikirimkan dari formulir
        $idTerapis = $this->request->getPost('id_terapis');
        $jam = $this->request->getPost('jam');

        // Panggil metode model untuk melakukan pembaruan
        $this->jadwalpraktikModel->update($id, [
            'id_terapis' => $idTerapis,
            'jam' => $jam,
        ]);

        // Redirect ke halaman index atau halaman lain yang sesuai
        return redirect()->to(base_url('/practice'))->with('success', 'Schedule updated successfully');

    }
}
