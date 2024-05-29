<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'Id_penyakit';
    protected $allowedFields = ['kode_penyakit', 'nama_penyakit', 'deskripsi_penyakit', 'solusi_penyakit'];

    public function getPenyakit($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }

    public function insertPenyakit($data)
    {
        $validation = \Config\Services::validation();

        if (!$validation->run($data, 'penyakit')) {
            return false;
        }

        return $this->insert($data);
    }

    public function updatePenyakit($id, $data)
    {
        $validation = \Config\Services::validation();

        if (!$validation->run($data, 'penyakit')) {
            return false;
        }

        return $this->update($id, $data);
    }

    public function deletePenyakit($id)
    {
        return $this->delete($id);
    }
}
