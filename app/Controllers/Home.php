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
        
        $datetime = Time::now();
        date_format($datetime,"Y-m-d");

        $date = date_parse($datetime);
        if ($date['day'] <= 9){
            $datee = $date['year'].'-'.$date['month'].'-0'.$date['day'];
        }else{
            $datee = $date['year'].'-'.$date['month'].'-'.$date['day'];
        }

        $data = [
            'lapangan' => $lapangan->findAll(),
            'transaksi' => $transaksi->getDataLapangan(),
            'path' => $this->request->getPath(),
            'time' => $datee,
        ];

    // dd($data['time']);

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
        // $datetime = date_parse(Time::tomorrow());
        // dd($datetime);
        $data = [
            'all' => 0,
            'jenis' => '',
            'lapangan' => $lapangan->findAll(),
            'tanggal' => date_format(Time::tomorrow(), "Y-m-d"),
            'tanggalnow' => date_format(Time::now(), "Y-m-d")
        ];
        // dd($data['tanggal']);
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
        // dd();
        return view('booker/search', $data);
    }
    public function detailLapangan($id)
    {
        // dd($id);
        $lapangan = new Lapangan();
        // dd($lapangan->where('id', $id)->find());
        $data = [
            'path' => $this->request->getPath(),
            'lapangan' => $lapangan->where('id', $id)->find()[0],
            'tanggal' => date_format(Time::tomorrow(), "Y-m-d"),
            'tanggalnow' => date_format(Time::now(), "Y-m-d")
        ];

        if ($this->request->getGet('dateBook')) {
            $data['tanggal'] = $this->request->getGet('dateBook');
        }

        // dd($data['lapangan']);
        return view('booker/detail', $data);
    }

    public function konfirmasiPemesanan()
    {
        return view('booker/konfirmasi-pemesanan');
    }

    public function pesanLapangan($id)
    {
        // dd($id);
        $lapangan = new Lapangan();
        // dd($lapangan->where('id', $id)->find());
        $data = [
            'path' => $this->request->getPath(),
            'lapangan' => $lapangan->where('id', $id)->find()[0],
            'tanggal' => date_format(Time::tomorrow(), "Y-m-d"),
            'tanggalnow' => date_format(Time::now(), "Y-m-d")
        ];

        if ($this->request->getGet('dateBook')) {
            $data['tanggal'] = $this->request->getGet('dateBook');
        }

        $data['booked'] = [];
        // dd($data['lapangan']);
        $bookedField = array();
        for ($i = 7; $i <= 21; $i++) {
            $available = $lapangan->checkAvail($data['tanggal'], $i, $data["lapangan"]["id"]);
            if ($available) {
                for ($j = $i; $j < $available[0]['durasi'] + $i; $j++) {
                    $bookedField[] = $j;
                }
            } else {
                
            }

        } 

        $data['booked'][] = $bookedField;
        
        return view('booker/pesan', $data);
    }
}