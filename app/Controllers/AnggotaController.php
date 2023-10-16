<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil(){
        return view('anggota/tampildata');
    }

    public function form(){
        return view('anggota/form');
    }

    public function tambah(){
        $m = new AnggotaModel();
        return $m->insert([
            'email' => request()->getPost('email'),
            'katasandi' => request()->getPost('katasandi'),
            'nama_lengkap' => request()->getPost('nama_lengkap'),
            'alamat' => request()->getPost('alamat'),
        ]);
    }

    public function ubah(){

    }

    public function hapus(){
        
    }
}
