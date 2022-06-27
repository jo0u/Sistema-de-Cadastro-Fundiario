<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComunidadesRequest extends FormRequest
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
        return [
            'municipios_id' => 'required|integer|exists:municipios,id',
            'nome_comunidade' => 'required|string|max:30|min:3',
            
        ];
    }

    public function messages(){
        return[
            'nome_comunidade.required' => 'O campo é obrigatório',
            'nome_comunidade.max' => 'O tamanho máximo do nome é 75 caracteres',
            'nome_comunidade.min' => 'O tamanho minimo do nome é 10 caracteres',
            
        ];
    }
}
