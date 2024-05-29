<?php
namespace App\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{
    protected $table = 'diagnosa';
    protected $allowedFields = ['id_gejala', 'nama_penyakit', 'deskripsi_penyakit', 'saran_penyakit'];
}