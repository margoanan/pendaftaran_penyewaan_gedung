<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    protected $table = 'penyakit';

    public function getTotalPelanggan()
    {
        return $this->countAll(); 
    }

    public function getTotalGedung()
    {
        return $this->db->table('gejala')->countAll(); 
    }
}
?>
