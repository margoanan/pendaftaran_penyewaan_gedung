<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PenyakitModel;

class Penyakit extends Controller
{
    public function index()
    {
        $model = new PenyakitModel();
        $data['penyakit'] = $model->findAll();
        return view('penyakit/index', $data);
    }

    public function create()
    {
        return view('penyakit/create');
    }

    public function store()
    {
        $model = new PenyakitModel();
        $validation = \Config\Services::validation();

        $data = [
            'kode_penyakit' => $this->request->getPost('kode_penyakit'),
            'nama_penyakit' => $this->request->getPost('nama_penyakit'),
            'deskripsi_penyakit' => $this->request->getPost('deskripsi_penyakit'),
            'solusi_penyakit' => $this->request->getPost('solusi_penyakit'),
        ];

        if (!$validation->run($data, 'penyakit')) {
            session()->setFlashdata('errors', $validation->getErrors());
            session()->setFlashdata('inputs', $this->request->getPost());
            return redirect()->to(base_url('penyakit/create'));
        } else {
            $model->insert($data);
            session()->setFlashdata('success', 'Data penyakit berhasil ditambahkan');
            return redirect()->to(base_url('penyakit'));
        }
    }

    public function edit($id)
    {
        $model = new PenyakitModel();
        $data['penyakit'] = $model->find($id);
        return view('penyakit/edit', $data);
    }

    public function update($id) 
    {
        $model = new PenyakitModel();
        $validation = \Config\Services::validation();

        $data = [
            'kode_penyakit' => $this->request->getPost('kode_penyakit'),
            'nama_penyakit' => $this->request->getPost('nama_penyakit'),
            'deskripsi_penyakit' => $this->request->getPost('deskripsi_penyakit'),
            'solusi_penyakit' => $this->request->getPost('solusi_penyakit'),
        ];

        if (!$validation->run($data, 'penyakit')) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('penyakit/edit/' . $id)); 
        } else {
            $model->update($id, $data); 
            session()->setFlashdata('info', 'Data penyakit berhasil diperbarui');
            return redirect()->to(base_url('penyakit'));
        }
    }

    public function delete($id)
    {
        $model = new PenyakitModel();
        $model->delete($id);
        session()->setFlashdata('warning', 'Data penyakit berhasil dihapus');
        return redirect()->to(base_url('penyakit'));
    }
}
?>
