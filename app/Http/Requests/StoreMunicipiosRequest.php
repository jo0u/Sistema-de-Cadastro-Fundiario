<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMunicipiosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =[
            
            // 'geocodigo'  => 'required|string|max:7',
            // 'nome_municipio' => 'required|string|max:40|min:5',
            // 'cep' => 'required|integer|max:20|min:10',
            // 'fracao_min' => 'required|integer|max:6|min:1',
            // 'mf' => 'required|integer|max:6|min:1',
            // 'territorio' => 'required|integer|max:10|min:1',
            // 'meridiano' => 'required|string|max:2|min:1',
            // 'nom_comarc' => 'required|string|max:30|min:1'

        ];

        return $rules;
    }
}
