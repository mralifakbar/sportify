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
use App\Models\AuthGroupModel;
use CodeIgniter\Shield\Entities\UserIdentity;
use CodeIgniter\Shield\Models\GroupModel;

class AdminController extends BaseController
{   
    public function dashboard() {
        if (AdminController::isAdmin()) {
            return view('admin/admin-dashboard');}
        else {
            return redirect()->to('denied');
        }
        
    }

    public function deleteUser($id) {
        if (AdminController::isAdmin()) {
            (new UserModel())->delete($id);
        (new GroupModel())->delete($id);
        return redirect()->to('admin/user');
        }
        else {
            return redirect()->to('denied');
        }
        
    }
    public function deleteTransaksi($id) {
        if (AdminController::isAdmin()) {
            (new Transaksi())->delete($id);
        return redirect()->to('admin/transaksi');
        }
        else {
            return redirect()->to('denied');
        }
        
    }
    public function tableUser()
    {
        if (AdminController::isAdmin()) {
        $user = new UserModel();
        $userM = new GroupModel();
        $data = [
            'user' => $user->findAll(),
            'role' => $userM->findAll(),
        ];
        return view('admin/table', $data);
        }
        else {
            return redirect()->to('denied');
        }
        
    }

    public function tablepengelola()
    {
        if (AdminController::isAdmin()) {
        $lapangan = new Lapangan();

        $data = [
            'lapangan' => $lapangan->findAll(),
        ];
        return view('admin/table-pengelola', $data);
        }
        else {
            return redirect()->to('denied');
        }
        
    }
    
    public function transaksiUsers()
    {
        // dd(auth()->user()->getGroups());
        if (AdminController::isAdmin()) {
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
        else {
            return redirect()->to('denied');
        }
        
    }

    public function confirmPay($id) {
        $transaksi = new Transaksi();
        $transaksi->update($id, [
            'status_pembayaran' => 'Success',
        ]);
        return redirect()->to('admin/transaksi');
    }

    static public function isAdmin() {
        return auth()->user()->getGroups()[0] == 'admin';
    }
}