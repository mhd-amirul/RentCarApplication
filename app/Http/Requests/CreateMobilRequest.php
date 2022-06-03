<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMobilRequest extends FormRequest
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
            'merk_id' => 'required',
            'tp_id' => 'required',
            'kf_id' => 'required',
            'km_id' => 'required',
            'mp_id' => 'required',
            'km2_id' => 'required',
            'kf_id' => 'required',
            'jb_id' => 'required',
            'hs_id' => 'required',
            'stok' => 'required|int',
            'deskripsi' => 'required',
            'gambar1' => 'image|file|max:1024',
            'gambar2' => 'image|file|max:1024',
            'gambar3' => 'image|file|max:1024',
            'gambar4' => 'image|file|max:1024',
            'gambar5' => 'image|file|max:1024',
        ];
    }
}
