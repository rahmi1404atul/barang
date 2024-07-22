@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')

    <form action="{{ route ('save') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">namabarang</label>
            <input type="text" name="namabarang" value="{{old('namabarang')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('namabarang')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">harga</label>
            <input type="text" name="harga" value="{{old('harga')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('harga')}}</span>
         </div>
         <div class="flex flex-col gap-2">
            <label for="">stok</label>
            <input type="text" name="stok" value="{{old('stok')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('stok')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Foto</label>
            <input type="file" name="foto" value="{{old('foto')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('foto')}}</span>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
</div>
</form>
@endsection

