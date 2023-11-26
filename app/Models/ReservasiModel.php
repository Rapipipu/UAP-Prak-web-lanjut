<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table            = 'reservasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'id_layanan', 'id_jadwal', 'tanggal', 'status'];

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

    public function getReservasi(){
        return $this->select('layanan.layanan, users.username, users.telefon, jadwalpraktik.jam, reservasi.*')
        ->join('jadwalpraktik', 'jadwalpraktik.id=reservasi.id_jadwal')
        ->join('layanan', 'layanan.id=reservasi.id_layanan')
        ->join('users', 'users.id=reservasi.id_user')
        ->where('reservasi.status', 'berjalan')->findAll();    
    }

    public function saveReservasi($data)
    {
        $this->insert($data);
    }

    public function cancelReservasi($id)
    {
         return $this->delete( $id);
    }

    public function completeReservasi($id)
    {
         return $this->set('status', 'selesai')->where('id', $id)->update();
    }
}
