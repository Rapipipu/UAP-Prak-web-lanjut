<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }

    public function register(): string
    {
        return view('register');
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
    
}

