<?php

namespace App\Models;

use CodeIgniter\Model;


class Transaksi extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getTransaksi()
    {
        return $this->findAll();
    }

    public function getDataLapangan()
    {
        $builder = $this->db->table('transaksi');
        $builder->join('lapangan', 'lapangan.id = transaksi.id');
        $query = $builder->get()->getResultArray();

        return $query;
    }

}