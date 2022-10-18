<?php

namespace App\Controllers;

use Codeigniter\Shield\Auth;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;

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

    public function explore()
    {
        return view('booker/explore');
    }
}