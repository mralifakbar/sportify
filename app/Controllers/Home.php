<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Codeigniter\Shield\Auth;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\Lapangan;

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
        // // dd(auth()->id());
        // $userId = auth()->id();
        // $data = [
        //     'user' => User,
        // ];
        // return view('templates/dashboard', $userId);
        return view('templates/dashboard');
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

    public function explore()
    {
        return view('booker/explore');
    }
    public function search()
    {
        $lapangan = new Lapangan();
        // dd($this->request->getGet('jenisOlahraga'));
        
        $data = [
            'all' => 0,
            'jenis' => '',
            'lapangan' => $lapangan->findAll()
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
        // dd($data['lapangan'][0]);
        return view('booker/search', $data);
    }
}