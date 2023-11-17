<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\UserModel;

class PasienController extends BaseController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'pasienn' => $this->userModel->getPasien(),
        ];

        return view('admin_patient', $data);
    }
    public function indexPegawai()
    {
        $data = [
            'pasienn' => $this->userModel->getPasien(),
        ];

        return view('pegawai_patient', $data);
    }

    public function editPasien($id)
    {
        // Load the model
        $userModel = new UserModel(); // Adjust based on your model name

        // Get the therapist by ID from the database
        $user = $userModel->find($id);

        // Pass the therapist data to the view
        return view('admin_patient_edit', ['pasienn' => $user]);
    }

    public function updatePasien($id)
    {
        // Load the model
        $userModel = new UserModel(); // Adjust based on your model name

        // Validate form input, you may want to add more validation based on your requirements
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'umur' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, return to the edit page with validation errors
            return redirect()->to('/admin/pasien/' . $id . '/edit')->withInput()->with('errors', $validation->getErrors());
        }

        // Get the updated data from the form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
            'telefon' => $this->request->getPost('telefon')
        ];
        // Update the therapist in the database
        $result = $this->userModel->updateTerapis($data, $id);
        if ($result) {
        // Redirect to the therapist list page or wherever you want to go after updating
        return redirect()->to('/admin/pasien')->with('success', 'Patient updated successfully');
        }
    }

    public function createPasien()
    {
        // If the form is submitted, process the data
        if ($this->request->getMethod() === 'post') {
            // Validate form input
            $validation = \Config\Patient::validation();
            $validation->setRules([
                'nama' => 'required',
                'umur' => 'required|numeric',
                'telefon' => 'required|numeric',
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                // Validation failed, return to the create page with validation errors
                return redirect()->to('/admin/pasien/create')->withInput()->with('errors', $validation->getErrors());
            }

            // Get the form data
            $data = [
                'nama' => $this->request->getPost('nama'),
                'umur' => $this->request->getPost('umur'),
                'telefon' => $this->request->getPost('telefon'),
            ];

            // Insert the new therapist into the database
            $userModel = new UserModel(); // Adjust based on your model name
            $userModel->insert($data);

            // Redirect to the therapist list page or wherever you want to go after creating
            return redirect()->to('/admin/pasien')->with('success', 'Patient created successfully');
        }

        // If it's a GET request, display the form
        return view('admin_patient_create');
    }

}
