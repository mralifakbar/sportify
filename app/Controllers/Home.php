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
use CodeIgniter\Files\File;

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
        $userGroup = auth()->user()->getGroups()[0];
        $data = [
            'title' => 'Dashboard',
        ];
        
        if ($userGroup == 'user') {
            return (new BookerController)->riwayatTransaksi();
        } else if ($userGroup == 'admin') {
            $data['title'] = 'Admin Dashboard';

            return view('admin/admin-dashboard');
        } else if ($userGroup == 'field-manager') {
            $data['title'] = 'Pengelola Dashboard';

            return view('pengelola-lapangan/dashboard-pengelola');
        }
    }
    
    public function forget()
    {
        return view('auth/forget');
    }

    public function view()
    {
        $user = new UserModel();
        return view('auth/login');
    }
    
    public function test()
    {
        dd($this->request->getPost());
    }
    
    public function testView() 
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
    
    
    public function belom() {
        echo "<h1 class='text-center'>Belom bisa gan</h1>";
    }

    public function accessDenied() {
        echo "<h1 class='text-center'>AccessDenied</h1>";
    }
}