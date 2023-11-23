<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function auth()
    {
        if(logged_in()){
            if(in_groups('admin')){
                return redirect()->to('/dashboard');
            }elseif(in_groups('pegawai')){
                return redirect()->to('/dashboard');
            }elseif(in_groups('pelanggan')){
                return redirect()->to('/reservasi/create');
            }
        }
    }
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

