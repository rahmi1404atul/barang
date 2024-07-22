<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'namabarang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategori' => 'required'
            // 'gambarBarang' => 'required|mimes:jpg,png'
        ];
    }
    public function messages(): array
    {
        return [
            'namabarang.required' => 'Data Harus Di Isikan',
            'harga.required' => 'harga Tidak Boleh Kosong',
            'stok.email' => 'Pastikan Berisi yang Dimasukkan stok Yang Benar',
            'kategori.email' => 'Pastikan Berisikan yang Dimasukkan kategori Yang Benar',
            // 'gambarBarang.mimes' => 'Pastikan Format File Benar'
        ];
    }
}