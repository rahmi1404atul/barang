@extends('home.template')

@section('title')
        Halaman Home
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-3xl">Data User</div>
        <div>
            <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
  </div>
</div>

<table class="table w-full mt-5">
    <thead>
        <tr class="border p-3 bg-teal-400 text-white">
            <th class="border p-3">No</th>
            <th class="border p-3">Namabarang</th>
            <th class="border p-3">harga</th>
            <th class="border p-3">stok</th>
            <th class="border p-3">Foto</th>
            <th class="border p-3">#</th>
       </tr>
   </thead>
   <tbody>
    @foreach($user as $i => $a)
    <tr>
            <td class="text-center border p-3">{{$i + 1}}</td>
            <td class="text-center border p-3">{{$a->namabarang}}</td>
            <td class="text-center border p-3">{{$a->hargal}}</td>
            <td class="text-center border p-3">{{$a->stok}}</td>
            <td class="text-center border p-3"><img src="{{ asset('foto/'.$a->foto)}}" alt="foto" width="150" height="150" class="mx-auto"></td>
            <td class="text-center border p-3"></td>
</tr>
    @endforeach
</tbody>
</table>
@endsection

