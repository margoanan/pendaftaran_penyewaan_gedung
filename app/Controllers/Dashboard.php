<?php

namespace App\Controllers;

use App\Models\Dashboard_model;

class Dashboard extends BaseController // atau Controller
{
    protected $dashboard_model;

    public function __construct()
    {
        $this->dashboard_model = new Dashboard_model();
    }

    public function index()
    {
        // $is_logged_in = $this->cek_login();
        // if (!$is_logged_in) {
        //     session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
        //     return redirect()->to('/auth/login');
        // }

        // $data['total_pelanggan'] = $this->dashboard_model->getTotalPelanggan();
        // $data['total_gedung'] = $this->dashboard_model->getTotalGedung();

        echo view('_partials/header');
        echo view('_partials/sidebar');
        // echo view('dashboard', $data);
        echo view('_partials/footer');
    }
}
