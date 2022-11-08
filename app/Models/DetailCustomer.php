<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailCustomer extends Model
{
    protected $table            = 'detail_customer';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = false;
    protected $allowedFields  = [
        'nama',
        'phone',
        'alamat',
        'keterangan',
    ];

    public function getDetailCustomer()
    {
        return $this->findAll();
    }
}
