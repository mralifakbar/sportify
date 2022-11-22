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
        // $builder = $this->db->table('transaksi')->where('id_user', auth()->user()->id);
        // $builder->join('lapangan', 'transaksi.id_lapangan = lapangan.id');
        
        $builder = $this->db->table('lapangan');
        $builder->join('transaksi', 'lapangan.id = transaksi.id_lapangan')->where('id_user', auth()->user()->id)->orderBy('tanggal', 'ASC');

        $query = $builder->get()->getResultArray();

        return $query;
    }
    public function getAllDataLapangan()
    {
        // $builder = $this->db->table('transaksi')->where('id_user', auth()->user()->id);
        // $builder->join('lapangan', 'transaksi.id_lapangan = lapangan.id');
        
        $builder = $this->db->table('lapangan');
        $builder->join('transaksi', 'lapangan.id = transaksi.id_lapangan')->orderBy('tanggal', 'ASC');

        $query = $builder->get()->getResultArray();

        return $query;
    }

    public function getDataWaktu()
    {
        $builder = $this->db->table('transaksi')->where('id_user', auth()->user()->id);
        $builder->join('waktu', 'waktu.id_transaksi = transaksi.id');
        $query = $builder->get()->getResultArray();

        return $query;
    }

}