<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Barang', function (Blueprint $table){
            $table->id();
            $table->string('namabarang');
            $table->string('harga');
            $table->string('stok');
            $table->string('kategori');
            $table->string('gambarBarang');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Barang');
    }

};

