<?php

namespace App\Controllers;
use App\Models\LayananModel;

use App\Controllers\BaseController;

class LayananController extends BaseController
{
    public $layananModel;

    public function __construct()
    {
        $this->layananModel = new LayananModel();
    }

    public function index()
    {
        $data = [
            'layanann' => $this->layananModel->getLayanan(),
        ];

        return view('service', $data);
    }

    public function create()
    {

        return view('service_create');
    }

    public function store()
    {
         if (!$this->validate([
            'service' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/layanan/create'))->withInput()->with('validation', $validation);
        }

        $this->layananModel->saveLayanan([
            'layanan' => $this->request->getVar('service'),
            'harga' => $this->request->getVar('price'),
        ]);

        return redirect()->to(base_url('/layanan'));
    }

    public function editLayanan($id)
    {   
        $layanan = $this->layananModel->getLayanan($id);

        $data = [
            'layanan' => $layanan,
        ];

        return view('service_edit', $data);
    }

    public function deleteLayanan($id)
    {   
        $layananModel = new LayananModel(); 
    
        $result = $this->layananModel->deleteLayanan($id);
        if ($result) {
        
        return redirect()->to('/layanan')->with('success', 'Service updated successfully');
        }
        return redirect()->to('/layanan')->with('success', 'Service updated successfully');
    }

    public function updateLayanan($id)
    {
        $layananModel = new LayananModel(); 
        $validation = \Config\Services::validation();
        $validation->setRules([
            'service' => 'required',
            'price' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/layanan/edit/' . $id )->withInput()->with('errors', $validation->getErrors());
        }

       
        $data = [
            'layanan' => $this->request->getPost('service'),
            'harga' => $this->request->getPost('price'),
        ];
    
        $result = $this->layananModel->updateLayanan($data, $id);
        if ($result) {
        
        return redirect()->to('/layanan')->with('success', 'Service updated successfully');
        }
    }
}
