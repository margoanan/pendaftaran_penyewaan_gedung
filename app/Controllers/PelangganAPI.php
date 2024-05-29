<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PelangganModel;

class PelangganApi extends ResourceController
{
    protected $modelName = 'App\Models\PelangganModel';

    public function index()
    {
        $model = new PelangganModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new PelangganModel();
        $data = $model->find($id);
        
        if (!$data) {
            return $this->failNotFound('Pelanggan tidak ditemukan.');
        }

        return $this->respond($data);
    }

    public function create()
    {
        $model = new PelangganModel();
        $data = [
            'pelanggan_nama' => $this->request->getVar('pelanggan_nama'),
            'pelanggan_alamat' => $this->request->getVar('pelanggan_alamat'),
            'pelanggan_tgl' => $this->request->getVar('pelanggan_tgl')
        ];

        $model->insert($data);
        return $this->respondCreated($data, 'Pelanggan berhasil ditambahkan');
    }

    public function update($id = null)
    {
        $model = new PelangganModel();
        $input = $this->request->getRawInput();
        $data = [
            'pelanggan_nama' => $input['pelanggan_nama'],
            'pelanggan_alamat' => $input['pelanggan_alamat'],
            'pelanggan_tgl' => $input['pelanggan_tgl']
        ];

        $model->update($id, $data);
        return $this->respondUpdated($data, 'Data pelanggan berhasil diperbarui');
    }

    public function delete($id = null)
    {
        $model = new PelangganModel();
        $model->delete($id);
        return $this->respondDeleted('Pelanggan berhasil dihapus');
    }
}
