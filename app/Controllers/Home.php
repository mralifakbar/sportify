<?php

namespace App\Controllers;

use App\Models\Waktu;
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
    
    public function chart()
    {
        return view('admin/chart');
    }
    public function pengelolaDashboard()
    {
        return view('pengelola-lapangan/dashboard-pengelola');
    }
    public function tableLapangan()
    {
        return view('pengelola-lapangan/table-lapangan');
    }
    public function tableDataTransaksi()
    {
        return view('pengelola-lapangan/table-datatransaksi');
    }
    
    public function belom() {
        echo "<h1 class='text-center'>Belom bisa gan</h1>";
    }
}