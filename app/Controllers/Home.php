<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
    public function dashboard(): string
    {
        return view('dashboard/src/layout');
    }
    public function pegawai(): string
    {
        return view('dashboard/src/layoutpegawai');
    }
    public function pelanggan(): string
    {
        return view('dashboard/src/layoutpelanggan');
    }
    public function admin(): string
    {
        return view('dashboard/src/layoutadmin');
    }
    
}

