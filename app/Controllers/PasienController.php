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

       $this->groupModel->turnAdmin($id);

        return redirect()->to('/pasien');

    }

    public function turnPegawai($id){
        
        $this->groupModel->turnPegawai($id);

        return redirect()->to('/pasien');
    }

    public function index()
    {
        $data = [
            'pasienn' => $this->usersModel->getPasien(),
        ];

        // dd($data);
        return view('patient', $data);
    }

    public function editPasien($id)
    {
        // Load the model
        $userModel = new UsersModel(); // Adjust based on your model name

        // Get the therapist by ID from the database
        $user = $userModel->find($id);
      //  dd($user);
        // Pass the therapist data to the view
        return view('patient_edit', ['pasien' => $user]);
    }

    public function updatePasien($id)
    {
        // Load the model
        $userModel = new UsersModel(); // Adjust based on your model name

        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'umur' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, return to the edit page with validation errors
            return redirect()->to('/pasien/edit/'.$id)->withInput()->with('errors', $validation->getErrors());
        }

        // Get the updated data from the form
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'poin' => $this->request->getPost('poin'),
            'umur' => $this->request->getPost('umur'),
            'telefon' => $this->request->getPost('telefon')
        ];
       // dd($data);
        // Update the therapist in the database
        $result = $this->usersModel->updateTerapis($data, $id);
        if ($result) {
        // Redirect to the therapist list page or wherever you want to go after updating
        return redirect()->to('/pasien')->with('success', 'Patient updated successfully');
        }
    }

    public function deletePasien($id)
    {   
        try {
            $this->usersModel->deletePasien($id);
            return redirect()->to('/pasien')->with('success', 'Service updated successfully');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            log_message('error', 'Database error: ' . $e->getMessage());
            $validation = service('validation');
            $validation->setError('delete_failed', 'Gagal menghapus data');
            return redirect()->back()->with('validation', $validation);
        }

        
        
    }

}
