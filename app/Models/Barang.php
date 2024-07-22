<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'Barang';
    protected $fillable = ['namabarang','harga','stok','kategori','gambarBarang'];
}
