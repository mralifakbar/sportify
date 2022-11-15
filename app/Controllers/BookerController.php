<?php

namespace App\Controllers;

use App\Models\DetailCustomer;
use App\Models\Fasilitas;
use App\Models\Lapangan;
use App\Models\Transaksi;
use App\Models\Waktu;
use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;

class BookerController extends BaseController
{
    public function riwayatTransaksi()
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
            'path' => $this->request->getPath(),
            'time' => $datee,
            'jam' => $transaksi->getDataWaktu(),
        ];

        // dd($data['transaksi']);

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
        $data = [
            'tanggal' => date_format(Time::tomorrow(), "Y-m-d"),
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
        // dd($this->request->getPost());
        // dd(auth()->user());
        // dd(auth()->user()->removeGroup("user")->getGroups());
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
                $bookedField[] = $i;
            }
        } 

        $data['booked'][] = $bookedField;
        
        return view('booker/pesan', $data);
    }
    
    public function konfirmasiPembayaran()
    {
        // making transaction record
        $transaksi = new Transaksi();
        $dataPost = $this->request->getPost();
        $transaksi->insert([
            "id_lapangan" => $dataPost['id'],
            "id_user" => auth()->user()->id,
            "tanggal" => $dataPost['tanggal'],
            "total_pembayaran" => $dataPost['total'],
            'created_at' => Time::now(),
        ]);

        # making time record
        $jam = array();        
        $jam = $this->request->getPost()["jam"];
        $jam = explode(" ", $jam);
        $waktu = new Waktu();
        $newTransaction = $transaksi->where('id_user', auth()->user()->id)->orderBy('id', 'DESC')->findAll(1);
        for ($i = 0; $i < sizeof($jam)-1; $i++){
            $waktu->insert([
                'id_transaksi' => $newTransaction[0]['id'],
                'jam' => $jam[$i],
                'tanggal' => $dataPost['tanggal'],
                'id_lapangan' => $this->request->getPost()["id"],
            ]);
        }

        $lapangan = new Lapangan();
        $data = [
            'path' => $this->request->getPath(),
            'lapangan' => $this->request->getPost()["lapangan"],
            'tanggal' => $this->request->getPost()["tanggal"],
            'tipe' => $this->request->getPost()["tipe"],
            'jam' => $jam,
            'id' => $this->request->getPost()["id"],
            'total' => $this->request->getPost()["total"],
            // 'tanggal' => $this->request->getPost()['tanggal'],
            'tanggalnow' => date_format(Time::now(), "Y-m-d"),
            'id_transaksi' => $newTransaction[0]['id'],
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

    public function bayar()
    {
        $detailCustomer = new DetailCustomer();
        $detailCustomer->insert([
            "id_transaksi" => $this->request->getPost()["id_transaksi"],
            "nama" => $this->request->getPost()["inputNama"],
            "phone" => $this->request->getPost()["inputNumber"],
            "alamat" => $this->request->getPost()["inputAddress"],
            "keterangan" => $this->request->getPost()["inputKeterangan"],
        ]);
        
        return redirect()->to('/riwayat-transaksi');
    }

    public function cancelBooking($id)
    {
        (new Transaksi())->delete($id);
        (new Waktu())->where('id_transaksi', $id)->delete();
        
        return redirect()->to('/riwayat-transaksi');
    }
}