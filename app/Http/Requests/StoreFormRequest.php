<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'nomor_identitas' => 'required|string',
            'nama' => 'required|string',
            'tempat_lahir' => 'string',
            'tanggal_lahir' => 'string',
            'agama' => 'string',
            'alamat' => 'string',
            'nomor_telepon' => 'string',
            'email' => 'string',
        ];
    }
}