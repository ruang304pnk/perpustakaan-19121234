<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use Config\Services;

class AnggotaController extends BaseController
{
   
    public function tampil(){
        return view('anggota/table', [
            'data_anggota' => (new AnggotaModel())->findAll()
        ]);
    }  

    private function cek_validasi(){
        $rules = [
            'email' => 'required|valid_email',
            'katasandi' => 'required|min_length[6]',
            'nama_lengkap' => 'required|min_length[5]',
        ];
        $msg = [
            'email' => [
                'required' => 'Email harus diisikan',
                'valid_email' => 'Email yang anda masukkan formatnya salah'
            ],
            'katasandi' => [
                'required' => 'Kata sandi tidak boleh kosong',
                'min_length' => 'Minimal katasandi 6 karakter'
            ]
        ];
        return Services::validation()
                    ->setRules($rules, $msg)
                    ->withRequest(request())
                    ->run();
    }

    public function create(){
       $model = new AnggotaModel();
       $data = [
         'email' => request()->getPost('email'),
         'katasandi' => request()->getPost('katasandi'),
         'nama_lengkap' => request()->getPost('nama_lengkap'),
         'alamat' => request()->getPost('alamat'),
       ];

       $id = (int) request()->getPost('id');

       if($this->cek_validasi() == false){
            session()->setFlashdata("xyz", Services::validation());

            if($id > 0){
                return redirect()->to(base_url('anggota/edit/'.$id));
            }else{
                return redirect()->to(base_url('anggota/form')) 
                                  ->with('data', $data);
            }
       }

    
       if($id > 0){
           $r = $model->update($id, $data);
       }else{
            $r = $model->insert($data);
            $id = $r;
       }

       if($r != false){
         $this->terimaFile($id);
         return redirect()->to(base_url('anggota'));
       }
    }

    public function show(){
        $m = new AnggotaModel();

        return view('anggota/table', [
            'data_anggota' => $m->findAll()
        ]);
    }
    
    public function form(){
        return view('anggota/form',[
            'validation' => session('xyz'),
            'data' => session('data')
        ]);
    }

    public function delete(){
        $id = request()->getPost('id');
        $m = new AnggotaModel();
        $r = $m->delete($id);
        return redirect()->to(base_url('anggota'));
    }

    public function edit($id){
        $m = new AnggotaModel();
        $data = $m->where('id', $id)->first();
        return view('anggota/form', [
            'data' => $data,
            'validation' => session('xyz')
        ]); 
    }

    private function terimaFile($id){
        $f = request()->getFile('foto');
        if($f->isFile()){
            $target = WRITEPATH . '/uploads/';
            $f->move($target, $id . '.png');
        }
    }

    public function foto($id){
        $f = file_get_contents(WRITEPATH . '/uploads/' . $id . '.png');
        return response()
                ->setHeader('Content-type', 'image/png')
                ->setBody( $f );
    }

}
