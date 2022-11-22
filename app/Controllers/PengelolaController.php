<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        if (PengelolaController::isFieldManager()) {
            $lapangan = new Lapangan();
        $lapanganData = $this->request->getPost();

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
            return redirect()->to('/pengelola/lapangan');
        }
        else {
            return redirect()->to('denied');
        }
    }

    public function updateLapangan($id) {
        if (PengelolaController::isFieldManager()) {
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
        if (PengelolaController::isFieldManager()) {
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
        if (PengelolaController::isFieldManager()) {
            (new Lapangan)->delete($id);
            return redirect()->to('/pengelola/lapangan');
        }
        else {
            return redirect()->to('denied');
        }
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
        return auth()->user()->getGroups() != 'field-manager';
    }
}