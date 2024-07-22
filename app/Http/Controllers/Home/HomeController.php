<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    Public function index(){
        $data['user']=Pengguna::get();
            return View('home/home',$data);
    }
    public function tambah(){
        return View('home/tambah');
    }

    public function save(UserRequest $r){
        if ($r->validated()){
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/',$foto);

            pengguna:: create([
                'namabarang'=> $r->namabarang,
                'harga'=>$r->harga,
                'stok'=>$r->stok,
                'foto'=> $foto
            ]);
            return redirect('home')->with('pesan','input data berhasil');
        }
        
}
}

