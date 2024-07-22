<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'namabarang'=> ' required|string',
            'harga' => 'required|email',
            'stok' => 'required|min:12',
            'foto' => 'required|mimes:png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'namabarang.required' => 'data harus di isikan',
            'harga.required'=> 'harga tidak boleh kosong ',
            'stok.email' => 'pastikan yang dimasukan berupa stok',
            'foto.mimes' => 'Pastikan file yang diinput benar',
        ];
    }
}
