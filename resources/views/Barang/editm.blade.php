@extends('home.template')

@section('title')
    Edit Data
@endsection

@section('content')

<form action="{{route('updatem',$Barang->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Namabarang</label>
        <input type="text" name="namabarang" value="{{$Barang->namabarang}}" class="p-2 border rounded-md">
        <span>{{$errors->first('namabarang')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">harga</label>
        <input type="text" name="harga" value="{{$Barang->harga}}" class="p-2 border rounded-md">
        <span>{{$errors->first('harga')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Kategori</label>
        <input type="text" name="kategori" value="{{$Barang->kategori}}" class="p-2 border rounded-md">
        <span>{{$errors->first('kategori')}}</span>
    </div>
    
    <div class="flex flex-col gap-2">
        <label for="">Gambar Barang</label>
        <input type="file" name="gambarBarang" class="p-2 border rounded-md">
        <span>{{$errors->first('gambarBarang')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
    </div>
</form>

@endsection
