<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TerapisModel;

class TerapisController extends BaseController
{
    public $terapisModel;

    public function __construct()
    {
        $this->terapisModel = new TerapisModel();
    }

    public function index()
    {
        $data = [
            'terapiss' => $this->terapisModel->getTerapis(),
        ];

        return view('terapist', $data);
    }

    public function edit($id)
    {
        // Load the model
        $terapis = $this->terapisModel->getTerapis($id);

        $data = [
            'terapis' => $terapis,
        ];

        return view('terapist_edit', $data);
    }

    public function updateTerapis($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'umur' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/layanan/edit/' . $id )->withInput()->with('errors', $validation->getErrors());
        }

       
        $data = [
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ];
    
        $result = $this->terapisModel->updateTerapis($data, $id);
        if ($result) {
        
        return redirect()->to('/terapis')->with('success', 'Service updated successfully');
        }
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
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/layanan/create'))->withInput()->with('validation', $validation);
        }

        $this->terapisModel->saveTerapis([
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
        ]);

        return redirect()->to(base_url('/terapis'));
    }

    public function create(){

        return view('terapist_create');
    }

    public function deleteTerapis($id)
    {   
    
        $result = $this->terapisModel->deleteTerapis($id);
        if ($result) {

        return redirect()->to('/terapis')->with('success', 'Service updated successfully');
        }
    }
}


