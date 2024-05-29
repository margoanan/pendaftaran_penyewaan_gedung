<?php
namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\DiagnosaModel;

class Konsultasi extends BaseController
{
    public function __construct()
    {
        $this->gejala = new GejalaModel();
        $this->diagnosa = new DiagnosaModel();
    }
    public function create()
    {
        $data['title'] = 'Konsultasi';
        $data['gejala'] = $this->gejala->getAll();

        return view('konsultasi/index', $data);
    }

    public function hasil()
    {
        $data['title'] = 'Hasil Diagnosa';
        $data['hasil'] = $this->diagnosa->getAll();

        return view('konsultasi/hasil', $data);
    }
}