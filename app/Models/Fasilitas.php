<?php

namespace App\Models;

use CodeIgniter\Model;

class Fasilitas extends Model
{

    protected $table            = 'fasilitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['id_lapangan', 'nama_fasilitas'];

}
