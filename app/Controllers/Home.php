<?php

namespace App\Controllers;

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
}