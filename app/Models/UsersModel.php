<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'username', 'umur', 'poin', 'telefon', 'role'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPegawai(){
        return $this->select(' users.*')
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
        ->where('group_id', '2')->findAll();  
    }

    public function getJumlahPegawai(){
        return $this->select(' users.*')
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
        ->where('group_id', '2')->countAllResults();  
    }

    public function getPasien(){
        return $this->select(' users.*')
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
        ->where('group_id', '3')->findAll();  
    }

    public function getJumlahPasien(){
        return $this->select(' users.*')
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
        ->where('group_id', '3')->countAllResults();  
    }

    public function updateTerapis($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deletePasien($id)
    {
         return $this->delete( $id);
    }

    public function deletePegawai($id)
    {
         return $this->delete( $id);
    }

    public function tambahPoin($id, $data)
    {
        return $this->set('poin', $data)->where('id', $id)->update();
    }
    
}