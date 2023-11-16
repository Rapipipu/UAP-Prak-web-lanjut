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

        return view('admin_service', $data);
    }
    public function createAdmin()
    {
        if ($this->request->getMethod() === 'post') {
            
            $validation = \Config\Services::validation();
            $validation->setRules([
                'service' => 'required',
                'price' => 'required',
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return redirect()->to('/admin/layanan/create')->withInput()->with('errors', $validation->getErrors());
            }

            $data = [
                'layanan' => $this->request->getPost('service'),
                'harga' => $this->request->getPost('price'),
            ];

           
            $layananModel = new LayananModel(); // Adjust based on your model name
            $layananModel->insert($data);

            // Redirect to the therapist list page or wherever you want to go after creating
            return redirect()->to('/admin/layanan')->with('success', 'Therapist created successfully');
        }

        return view('admin_service_create');
    }
    public function editLayanan($id)
    {   
        $layananModel = new LayananModel(); 
        $layanan = $layananModel->find($id);

        
        

        return view('admin_service_edit',['layanan'=>$layanan]);
    }

    public function deleteLayanan($id)
    {   
        $layananModel = new LayananModel(); 
    
        $result = $this->layananModel->deleteLayanan($id);
        if ($result) {
        
        return redirect()->to('/admin/layanan')->with('success', 'Service updated successfully');
        }
        return redirect()->to('/admin/layanan')->with('success', 'Service updated successfully');
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
            return redirect()->to('/admin/layanan/edit/' . $id )->withInput()->with('errors', $validation->getErrors());
        }

       
        $data = [
            'layanan' => $this->request->getPost('service'),
            'harga' => $this->request->getPost('price'),
        ];
    
        $result = $this->layananModel->updateLayanan($data, $id);
        if ($result) {
        
        return redirect()->to('/admin/layanan')->with('success', 'Service updated successfully');
        }
    }

    public function indexPegawai()
    {
        $data = [
            'layanann' => $this->layananModel->getLayanan(),
        ];

        return view('pegawai_service', $data);
    }

    public function indexPelanggan()
    {
        $data = [
            'layanann' => $this->layananModel->getLayanan(),
        ];

        return view('pelanggan_service', $data);
    }
}
