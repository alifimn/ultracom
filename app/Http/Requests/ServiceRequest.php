<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'nama_kategori' => 'required|max:255',
            'jml_service' => 'required|integer',
            'catatan_service' => 'required|max:255',
            'metode_pembayaran' => 'required|max:255',
            'status' => 'required|max:255',
        ];
    }
}
