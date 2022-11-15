<?php

namespace App\Models;

use CodeIgniter\Model;

class Lapangan extends Model
{
    protected $table            = 'lapangan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = false;
    // protected $allowedFields    = [];

    public function checkAvail($date, $hour, $id) {
        // $transaksi = new Transaksi();
        // return $transaksi->where(array('tanggal' => $date, 'jam' => $hour, 'id_lapangan' => $id))->findAll();

        $waktu = new Waktu();
        return $waktu->where(array('tanggal' => $date, 'jam' => $hour, 'id_lapangan' => $id))->findAll();
    }
}