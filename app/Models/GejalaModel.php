<?php
namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    public function getAll()
    {
        return $this->findAll();
    }

    protected $table = 'gejala';
    protected $allowedFields = ['gejala'];
}