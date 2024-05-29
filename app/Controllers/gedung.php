<?php

namespace App\Controllers;

use App\Models\GedungModel;

class Gedung extends BaseController
{
    public function index()
    {
        $model = new GedungModel();
        $data['gedung'] = $model->findAll();
        return view('gedung/index', $data);
    }

    public function create()
    {
        return view('gedung/create');
    }

    public function store()
    {
        $model = new GedungModel();

        $data = [
            'gedung_nama' => $this->request->getVar('gedung_nama'),
            'gedung_alamat' => $this->request->getVar('gedung_alamat'),
            'status' => $this->request->getVar('status')
        ];

        $model->insert($data);
        return redirect()->to(base_url('gedung'));
    }

    

    public function edit($id)
    {
        $model = new GedungModel();
        $data['gedung'] = $model->find($id);
        return view('gedung/edit', $data);
    }

    public function update()
    {
        $model = new GedungModel();

        $id = $this->request->getVar('gedung_id');

        $data = [
            'gedung_nama' => $this->request->getVar('gedung_nama'),
            'gedung_alamat' => $this->request->getVar('gedung_alamat'),
            'status' => $this->request->getVar('status')
        ];

        $model->update($id, $data);
        return redirect()->to(base_url('gedung'));
    }

    public function delete($id)
    {
        $model = new GedungModel();
        $model->delete($id);
        return redirect()->to(base_url('gedung'));
    }
}
