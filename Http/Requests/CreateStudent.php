<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudent extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'unique:students|max:10',
            'nis' => 'unique:students|integer',
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'name',
            'nis' => 'NIS',
        ];

    }

    public function messages()
    {
        return [
            'nama' => 'Nama Sudah ADA',
            'nama.max' => 'Nama Melebihi :max Krakter',
            'nis' => 'NIS ini Sudah ada',
            'nis.integer' => 'NIS harus angka',

        ];
    }

}
