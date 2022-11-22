<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function tablepengelola()
    {
        return view('admin/table-pengelola');
    }
    
    public function transaksiUsers()
    {
        return view('admin/transaksi-users');
    }

}