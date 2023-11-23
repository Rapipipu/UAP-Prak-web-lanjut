<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GroupModel;

class PegawaiController extends BaseController
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
            'pegawaii' => $this->usersModel->getPegawai(),
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
    
        $result = $this->usersModel->deletePegawai($id);
        if ($result) {

        return redirect()->to('/pegawai')->with('success', 'Service updated successfully');
        }
    }

    public function editPegawai($id)
{
    $pegawai = $this->usersModel->find($id);

    if (!$pegawai) {
        return redirect()->to('/pegawai')->with('error', 'Pegawai not found');
    }

    $data = [
        'pegawai' => $pegawai,
    ];

    return view('employee_edit', $data); // Ganti 'edit_employee' dengan nama view untuk form edit pegawai
}

// Pada fungsi updatePegawai
public function updatePegawai($id)
{
    $pegawai = $this->usersModel->find($id);

    if (!$pegawai) {
        return redirect()->to('/pegawai')->with('error', 'Pegawai not found');
    }

    // Validasi data dari form
    $validation = \Config\Services::validation();
    $validation->setRules([
        'username' => 'required',
        'umur' => 'required|numeric',
        'telefon' => 'required|numeric',
        // Tambahkan aturan validasi untuk kolom-kolom lain
    ]);

    if ($validation->withRequest($this->request)->run()) {
        // Ambil data dari form
        $data = [
            'username' => $this->request->getPost('username'),
            'umur' => $this->request->getPost('umur'),
            'telefon' => $this->request->getPost('telefon'),
            // Tambahkan kolom-kolom lain sesuai kebutuhan
        ];

        // Update data pegawai
        $this->usersModel->update($id, $data);

        return redirect()->to('/pegawai')->with('success', 'Data pegawai berhasil diupdate');
    } else {
        // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan pesan error
        return redirect()->back()->with('errors', $validation->getErrors());
    }
}




}