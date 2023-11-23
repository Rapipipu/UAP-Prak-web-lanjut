<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GroupModel;

class PasienController extends BaseController
{
    public $usersModel;
    public $groupModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->groupModel = new GroupModel();
    }

    public function turnAdmin($id){

        $result = $this->groupModel->turnAdmin($id);

        if ($result) {
        return redirect()->to('/pasien');
        }
    }

    public function turnPegawai($id){
        
        $result = $this->groupModel->turnPegawai($id);

        if ($result) {
        return redirect()->to('/pasien');
        }
    }

    public function index()
    {
        $data = [
            'pasienn' => $this->usersModel->getPasien(),
        ];

        return view('patient', $data);
    }

    public function editPasien($id)
    {
        // Load the model
        $userModel = new UsersModel(); // Adjust based on your model name

        // Get the therapist by ID from the database
        $user = $userModel->find($id);

        // Pass the therapist data to the view
        return view('patient_edit', ['pasienn' => $user]);
    }

    public function updatePasien($id)
    {
        // Load the model
        $userModel = new UsersModel(); // Adjust based on your model name

        // Validate form input, you may want to add more validation based on your requirements
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'umur' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, return to the edit page with validation errors
            return redirect()->to('/pasien/' . $id . '/edit')->withInput()->with('errors', $validation->getErrors());
        }

        // Get the updated data from the form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
            'telefon' => $this->request->getPost('telefon')
        ];
        // Update the therapist in the database
        $result = $this->usersModel->updateTerapis($data, $id);
        if ($result) {
        // Redirect to the therapist list page or wherever you want to go after updating
        return redirect()->to('/pasien')->with('success', 'Patient updated successfully');
        }
    }

    public function deletePasien($id)
    {   
    
        $result = $this->usersModel->deletePasien($id);
        if ($result) {

        return redirect()->to('/pasien')->with('success', 'Service updated successfully');
        }
    }

}
