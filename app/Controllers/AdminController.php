<?php

namespace App\Controllers;


use App\Models\DetailCustomer;
use App\Models\Fasilitas;
use App\Models\Lapangan;
use App\Models\Transaksi;
use App\Models\Waktu;
use Codeigniter\Shield\Models\UserModel;
use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function table()
    {
        return view('admin/table');
    }

    public function tablepengelola()
    {
        $lapangan = new Lapangan();

        $data = [
            'lapangan' => $lapangan->findAll(),
        ];
        return view('admin/table-pengelola', $data);
    }
    
    public function transaksiUsers()
    {
        $lapangan = new Lapangan();
        $transaksi = new Transaksi();
        $waktu = new Waktu();
        
        $datetime = Time::now();
        date_format($datetime,"Y-m-d");

        $date = date_parse($datetime);
        if ($date['day'] <= 9){
            $datee = $date['year'].'-'.$date['month'].'-0'.$date['day'];
        }else{
            $datee = $date['year'].'-'.$date['month'].'-'.$date['day'];
        }
        // dd($transaksi->getDataWaktu());
        $data = [
            'lapangan' => $lapangan->findAll(),
            'transaksi' => $transaksi->getDataLapangan(),
            // 'path' => $this->request->getPath() ?? 'dashboard',
            'time' => $datee,
            'jam' => $transaksi->getDataWaktu(),
        ];

        // dd($data['transaksi']);

        // dd($data['transaksi']);
        return view('admin/transaksi-users', $data);
    }

}