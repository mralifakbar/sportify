<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Codeigniter\Shield\Auth;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\Lapangan;
use App\Models\Transaksi;
use App\Models\DetailCustomer;
use App\Models\Fasilitas;
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
        dd($this->request->getPost());
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
        $fasilitas = new Fasilitas();
        // dd($lapangan->where('id', $id)->find());
        $data = [
            'path' => $this->request->getPath(),
            'lapangan' => $lapangan->where('id', $id)->find()[0],
            'tanggal' => date_format(Time::tomorrow(), "Y-m-d"),
            'tanggalnow' => date_format(Time::now(), "Y-m-d"),
            'fasilitas' => $fasilitas->where('id_lapangan', $id)->findAll()
        ];
        // dd($fasilitas->where('id_lapangan', $id)->findAll());

        if ($this->request->getGet('dateBook')) {
            $data['tanggal'] = $this->request->getGet('dateBook');
        }

        // dd($data['lapangan']);
        return view('booker/detail', $data);
    }

    public function konfirmasiPemesanan()
    {
        $jam = array();
        // dd($this->request->getPost());   
        $id = $this->request->getPost()["idLapangan"];
        $lapangan = new Lapangan();
        $data = [
            'path' => $this->request->getPath(),
            'id'=> $id,
            'lapangan' => $lapangan->where('id', $id)->find()[0],
            'tanggal' => $this->request->getPost()['tanggal'],
            'tanggalnow' => date_format(Time::now(), "Y-m-d")
        ];

        for ($i = 7; $i <= 21; $i++) {
            $temp = $this->request->getPost()["jam" . $i] ?? null;
            if($temp) {
                $jam[] = $i;
            }
        }
        $data['jam'] = $jam;
        // var_dump($jam);
        return view('booker/konfirmasi-pemesanan', $data);
    }

    public function pesanLapangan($id)
    {
        // dd($id);
        $lapangan = new Lapangan();
        // dd($lapangan->where('id', $id)->find());
        $data = [
            'path' => $this->request->getPath(),
            'id'=> $id,
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

    public function belom() {
        echo "<h1 class='text-center'>Belom bisa gan</h1>";
    }
    
    public function konfirmasiPembayaran()
    {
        $jam = array();
        // dd($this->request->getPost());   
        // $id = $this->request->getPost()["idLapangan"];
        $lapangan = new Lapangan();
        $jam = $this->request->getPost()["jam"];
        $jam = explode(" ", $jam);
        // dd($jam);
        $data = [
            'path' => $this->request->getPath(),
            'lapangan' => $this->request->getPost()["lapangan"],
            'tanggal' => $this->request->getPost()["tanggal"],
            'tipe' => $this->request->getPost()["tipe"],
            'jam' => $jam,
            'id' => $this->request->getPost()["id"],
            'total' => $this->request->getPost()["total"],
            // 'tanggal' => $this->request->getPost()['tanggal'],
            'tanggalnow' => date_format(Time::now(), "Y-m-d")
        ];

        for ($i = 7; $i <= 21; $i++) {
            $temp = $this->request->getPost()["jam" . $i] ?? null;
            if($temp) {
                $jam[] = $i;
            }
        }
        $data['jam'] = $jam;
        // var_dump($jam);
        return view('booker/konfirmasi-pembayaran', $data);
    }

    public function detailCustomer()
    {
        $detailCustomer = new DetailCustomer();
        $transaksi = new Transaksi();

        $data = $detailCustomer->insert([
            "nama" => $this->request->getPost('inputNama'),
            "phone" => $this->request->getPost('inputNumber'),
            "alamat" => $this->request->getPost('inputAddress'),
            "keterangan" => $this->request->getPost('inputKeterangan')
        ]);
        return redirect('/konfirmasi-pembayaran');
    }

    public function bayar()
    {
        $transaksi = new Transaksi();
        $data = [
                'id_lapangan' => $this->request->getPost("id"),
                'id_user' => auth()->user()->id,
                'tanggal' => $this->request->getPost("tanggal"),
                'jam' => $this->request->getPost("jam"),
                'durasi' => $this->request->getPost("durasi"),
                'total_pembayaran' => $this->request->getPost("total"),
                'created_at' => Time::now(),
            ];
            // dd($data);
        $transaksi->insert($data);
        
        return redirect()->to('/riwayat-transaksi');
    }
    public function loginadmin()
    {
        return view('admin/admin-login');
    }
    public function admindashboard()
    {
        return view('admin/admin-dashboard');
    }
    public function table()
    {
        return view('admin/table');
    }
    
}