<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Codeigniter\Shield\Auth;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\Lapangan;
use App\Models\Transaksi;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{ 
    public function index()
    {
        return view('landing_page');
    }
    
    public function login()
    {
        return view('auth/login');
    }
    
    public function register()
    {

        return view('auth/register');
    }

    public function dashboard()
    {
        $data = [
            'path' => $this->request->getPath(),
        ];
        return view('templates/dashboard', $data);
    }
    
    public function forget()
    {
        return view('auth/forget');
    }

    public function view()
    {
        return view('auth/login');
    }
    
    public function test()
    {
        return view('testing');
    }
    
    public function res()
    {
        dd($this->request->getGet());
    }
    
    public function riwayatTransaksi()
    {
        $lapangan = new Lapangan();
        $transaksi = new Transaksi();
        
        $data = [
            'lapangan' => $lapangan->findAll(),
            'transaksi' => $transaksi->getDataLapangan(),
            'path' => $this->request->getPath(),
        ];

        // dd($data['transaksi']);

        return view('booker/riwayat-transaksi', $data);
    }

    public function riwayatPembayaran()
    {
        $data = [
            'path' => $this->request->getPath(),
        ];
        return view('booker/riwayat-pembayaran', $data);
    }

    public function explore()
    {
        $datetime = date_parse(Time::now());
        $data = [
            'tanggal' => $datetime['year'].'-'.$datetime['month'].'-'.$datetime['day'],
        ];
        return view('booker/explore', $data);
    }

    public function search()
    {
        $lapangan = new Lapangan();
        $transaksi = new Transaksi();
        
        // dd($this->request->getGet('jenisOlahraga'));
        // dd(Time::now());
        $datetime = date_parse(Time::now());
        // dd($datetime);
        $data = [
            'all' => 0,
            'jenis' => '',
            'lapangan' => $lapangan->findAll(),
            'tanggal' => $datetime['year'].'-'.$datetime['month'].'-'.$datetime['day'],
        ];

        if ($this->request->getGet('jenisOlahraga') && $this->request->getGet('dateBook')) {
            $data['jenis'] = $this->request->getGet('jenisOlahraga');
            $data['tanggal'] = $this->request->getGet('dateBook');
            $data['all'] = 1;
            $data['lapangan'] = $lapangan->where('jenis', $this->request->getGet('jenisOlahraga'))->findAll();
        } else if ($this->request->getGet('jenisOlahraga')) {
            $data['jenis'] = $this->request->getGet('jenisOlahraga');
            $data['lapangan'] = $lapangan->where('jenis', $this->request->getGet('jenisOlahraga'))->findAll();
        }
        // dd($data['tanggal']);
        $data['booked'] = [];

        foreach($data['lapangan'] as $lp) {
            $bookedField = array();
            for ($i = 7; $i <= 21; $i++) {
                $available = $lapangan->checkAvail($data['tanggal'], $i, $lp['id']);
                if ($available) {
                    for ($j = $i; $j < $available[0]['durasi'] + $i; $j++) {
                        $bookedField[] = $j;
                    }
                } else {
                    
                }

            } 
            
            $data['booked'][] = $bookedField;
        }
        // dd($data['booked']);
        return view('booker/search', $data);
    }
    public function detail()
    {
        $data = [
            'path' => $this->request->getPath(),
        ];
        return view('booker/detail', $data);
    }

    public function konfirmasiPemesanan()
    {
        return view('booker/konfirmasi-pemesanan');
    }
}