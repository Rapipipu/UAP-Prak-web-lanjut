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

        return view('admin_terapist', $data);
    }

    public function indexPegawai()
    {
        $data = [
            'terapiss' => $this->terapisModel->getTerapis(),
        ];

        return view('pegawai_terapist', $data);
    }

    public function editTerapis($id)
    {
        // Load the model
        $terapisModel = new TerapisModel(); // Adjust based on your model name

        // Get the therapist by ID from the database
        $terapis = $terapisModel->find($id);

        // Pass the therapist data to the view
        return view('layouts/edit_terapis', ['terapis' => $terapis]);
    }

    public function updateTerapis($id)
    {
        // Load the model
        $terapisModel = new TerapisModel(); // Adjust based on your model name

        // Validate form input, you may want to add more validation based on your requirements
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'umur' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, return to the edit page with validation errors
            return redirect()->to('/admin/terapis/' . $id . '/edit')->withInput()->with('errors', $validation->getErrors());
        }

        // Get the updated data from the form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ];
        // Update the therapist in the database
        $result = $this->terapisModel->updateTerapis($data, $id);
        if ($result) {
        // Redirect to the therapist list page or wherever you want to go after updating
        return redirect()->to('/admin/terapis')->with('success', 'Therapist updated successfully');
        }
    }

    public function createTerapis()
    {
        // If the form is submitted, process the data
        if ($this->request->getMethod() === 'post') {
            // Validate form input
            $validation = \Config\Services::validation();
            $validation->setRules([
                'nama' => 'required',
                'umur' => 'required|numeric',
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                // Validation failed, return to the create page with validation errors
                return redirect()->to('/admin/terapis/create')->withInput()->with('errors', $validation->getErrors());
            }

            // Get the form data
            $data = [
                'nama' => $this->request->getPost('nama'),
                'umur' => $this->request->getPost('umur'),
            ];

            // Insert the new therapist into the database
            $terapisModel = new TerapisModel(); // Adjust based on your model name
            $terapisModel->insert($data);

            // Redirect to the therapist list page or wherever you want to go after creating
            return redirect()->to('/admin/terapis')->with('success', 'Therapist created successfully');
        }

        // If it's a GET request, display the form
        return view('layouts/create_terapis');
    }

}


