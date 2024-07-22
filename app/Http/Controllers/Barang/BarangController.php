<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBarangRequest;
use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class BarangController extends Controller
{
    public function index(){
        $data['Barang']= Barang::get();
        return view('Barang/Barang',$data);
    }
    public function tambahm(){
        return view('Barang/tambahm');
    }
    public function savem(BarangRequest $r){
        if($r->validated()){
            $gambarBarang = $r->gambarBarang->getClientOriginalName();
            $r->gambarBarang->move('gambarBarang/',$gambarBarang);

            Barang::create([
                'namabarang' => $r->namabarang,
                'harga' => $r->harga,
                'stok' => $r->stok,
                'kategori' => $r->kategori,
                'gambarBarang' => $gambarBarang
            ]);
       return redirect('Barang')->with('pesan','input data berhasil');
        }
       
    }
    
    public function editm($id){
        $data['Barang']= Barang::where('id',$id)->first();

        return view('Barang/editm',$data);
    }
    

    public function updatem(UpdateBarangRequest $r, $id){
        if($r->validated()){
            if($r->gambarBarang){
                $cek = Barang::where('id',$id)->first();
                if(file::exists(public_path('gambarBarang/'.$cek->gambarBarang))){
                    file::delete(public_path('gambarBarang/'.$cek->gambarBarang));
                }
                $gambarBarang = $r->gambarBarang->getClientOriginalName();
                $r->gambarBarang->move('gambarBarang/',$gambarBarang);

                $data['gambarBarang'] = $gambarBarang;
            }
            $data['namabarang'] = $r->namabarang;
            $data['harga'] = $r->harga;
            $data['stok'] = $r->stok;
            $data['kategori'] = $r->kategori;

            Barang::where('id',$id)->update($data);

            return redirect('Barang');
        }
}

public function hapusm($id){
    Barang::where('id',$id)->delete();

    return back();
}

public function dash(){
    return view('home.dashboard');
}
}

