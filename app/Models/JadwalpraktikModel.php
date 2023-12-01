<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalpraktikModel extends Model
{
    protected $table            = 'jadwalpraktik';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_terapis', 'jam'];

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

    public function getJadwal(){
        return $this->select('jadwalpraktik.*, terapis.*')
        ->join('terapis', 'terapis.id=jadwalpraktik.id')->findAll();    
    }
    public function deleteJadwal($id)
    {
         return $this->delete( $id);
    }
    public function saveJadwal($data){
        $this->insert($data);
    }

    public function updateJadwal($data, $id)
    {
        return $this->update($id, $data);
    }
    

}
