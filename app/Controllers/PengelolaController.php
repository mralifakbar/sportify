<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Fasilitas;
use App\Models\Lapangan;
use App\Models\Transaksi;
use App\Models\Waktu;
use CodeIgniter\I18n\Time;

class PengelolaController extends BaseController
{
    public function dashboard()
    {
        if (PengelolaController::isFieldManager()) {
            return view('pengelola-lapangan/dashboard-pengelola');
        } 
        else {
            return redirect()->to('denied');
        }
    }

    public function lapangan()
    {
        if (PengelolaController::isFieldManager()) {
            $lapangan = new Lapangan();
            $data = [
                'lapangan' => $lapangan->where('id_pengelola', auth()->user()->id)->findAll()
            ];
            return view('pengelola-lapangan/table-lapangan', $data);
        } 
        else {
            return redirect()->to('denied');
        }
        
    }

    public function handleTambahLapangan() {
        // dd($this->request->getPost());
        $fasilitas = new Fasilitas();
        if (PengelolaController::isFieldManager()) {
            $lapangan = new Lapangan();
        $lapanganData = $this->request->getPost();
        // dd(in_array('Parkir', $lapanganData));
        $lapangan->insert([
            'nama_lapangan' => $lapanganData['namalapangan'],
            'jenis' => $lapanganData['jenis'],
            'lokasi' => $lapanganData['lokasi'],
            'tipe_lapangan' => $lapanganData['tipe-lapangan'],
            'tipe_lantai' => $lapanganData['tipe-lantai'],
            'panjang' => $lapanganData['panjang'],
            'lebar' => $lapanganData['lebar'],
            'harga' => $lapanganData['harga'],
            'deskripsi' => $lapanganData['deskripsi'],
            'link_foto' => $lapanganData['link-gambar'],
            'id_pengelola' => auth()->user()->id,
            'created_at' => Time::now(),
        ]);
        
        if (in_array('Parkir', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Parkir',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Wifi', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Wifi',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Toilet', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Toilet',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Shower', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Shower',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Toko', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Toko',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Kantin', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Kantin',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Mushola', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Mushola',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
        if (in_array('Locker', $lapanganData)) {
            $fasilitas->insert([
                'nama_fasilitas' => 'Locker',
                'id_lapangan' => (new Lapangan())->orderBy('id', 'DESC')->findAll(1)[0]['id'],
            ]);
        }
            return redirect()->to('/pengelola/lapangan');
        }
        
        else {
            return redirect()->to('denied');
        }
    }

    public function updateLapangan($id) {
        if (PengelolaController::isFieldManager() || AdminController::isAdmin()) {
            $lapangan = new Lapangan();
            // dd($lapangan->where('id', $id)->findAll()[0]);
            $data = [
                'lapangan' => $lapangan->where('id', $id)->findAll()[0]
            ];
            return view('pengelola-lapangan/update-lapangan', $data);  
        }
        else {
            return redirect()->to('denied');
        }
          
    } 

    public function handleUpdateLapangan() {
        if (PengelolaController::isFieldManager() || AdminController::isAdmin()) {
            $lapangan = new Lapangan();
        $lapanganData = $this->request->getPost();

        $lapangan->update($lapanganData['id'], [
            'nama_lapangan' => $lapanganData['namalapangan'],
            'jenis' => $lapanganData['jenis'],
            'lokasi' => $lapanganData['lokasi'],
            'tipe_lapangan' => $lapanganData['tipe-lapangan'],
            'tipe_lantai' => $lapanganData['tipe-lantai'],
            'panjang' => $lapanganData['panjang'],
            'lebar' => $lapanganData['lebar'],
            'harga' => $lapanganData['harga'],
            'deskripsi' => $lapanganData['deskripsi'],
            'link_foto' => $lapanganData['link-gambar'],
            'id_pengelola' => auth()->user()->id,
            'updated_at' => Time::now(),
        ]);
        return redirect()->to('/pengelola/lapangan');
        } 
        else {
            return redirect()->to('denied');
        }
    }

    public function handleDeleteLapangan($id) {
        if (PengelolaController::isFieldManager() || AdminController::isAdmin()) {
            (new Lapangan)->delete($id);
            return redirect()->to('/pengelola/lapangan');
        }
        else {
            return redirect()->to('denied');
        }
    }

    public function jadiUser() {
        auth()->user()->removeGroup('field-manager');
        auth()->user()->addGroup('user');
        return redirect()->to('dashboard');
    }

    public function transaksi()
    {
        if (PengelolaController::isFieldManager()) {
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
            $data = [
                'lapangan' => $lapangan->findAll(),
                'transaksi' => $transaksi->getAllDataLapangan(),
                'time' => $datee,
                'jam' => $transaksi->getDataWaktu(),
            ];
                return view('pengelola-lapangan/table-datatransaksi', $data);
            } 
        else {
            return redirect()->to('denied');
        }
    }

    public function isFieldManager() {
        return auth()->user()->getGroups()[0] == 'field-manager';
    }
}