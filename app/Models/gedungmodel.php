<?php

namespace App\Models;

use CodeIgniter\Model;

class GedungModel extends Model
{
    protected $table = 'data_gedung'; 
    protected $primaryKey = 'gedung_id';
    protected $allowedFields = ['gedung_nama', 'gedung_alamat', 'status']; 

    public function getGedung($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find($id); 
        }
    }

    public function insertGedung($data)
    {
        return $this->insert($data);
    }

    public function updateGedung($id, $data)
    {
        $row = $this->find($id);

        if ($row) {
            $updated = $this->where('gedung_id', $id)->set($data)->update();

            if ($updated) {
                return true;
            } else {
                return false; 
            }
        } else {
            return false; 
        }
    }

    public function deleteGedung($id)
    {
        return $this->delete($id); 
    }
}
