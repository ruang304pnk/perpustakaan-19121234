<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class LoginController extends BaseController
{
    public function form()
    {
        return view('login/form');
    }

    public function daftar(){

    }

    public function masuk(){
        $e = request()->getPost('email');
        $k = request()->getPost('katasandi');

        $m = new PenggunaModel();
        $r = $m->where('email', $e)
               ->where('katasandi', $k)->first();

        if($r == null){
            return "Login gagal";
        }else{
            session()->set('pengguna', $r);
            return redirect()->to(base_url('/'));
        }
    }

    public function keluar(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function lupa_password(){

    } 

}
