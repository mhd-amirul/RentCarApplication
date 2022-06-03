<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TokoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nm_pu' => 'required',
            'nm_usaha' => 'required',
            'alamat' => 'required',
            'nik' => 'required|size:16|unique:make_shops',
            'img_ktp' => 'required|image|file|max:1024',
            'img_siu' => 'required|image|file|max:1024',
            'pas_foto' => 'required|image|file|max:1024',
            'foto_usaha' => 'required|image|file|max:1024'
        ];
    }
}
