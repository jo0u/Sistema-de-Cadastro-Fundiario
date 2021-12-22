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
            'distrido_sede' => 'required|string|max:5|min:1',
            'responsavel' => 'required|string|max:75|min: 10',
            'responsavel_cda' => 'required|string|max:75|min:10'
        ];
    }

    public function messages(){
        return[
            'nome_comunidade.required' => 'O campo é obrigatório',
            'nome_comunidade.max' => 'O tamanho máximo do nome é 75 caracteres',
            'nome_comunidade.min' => 'O tamanho minimo do nome é 10 caracteres',
            'distrido_sede.required' => 'O campo é obrigatório',
            'distrido_sede.max' => 'O tamanho máximo do nome é 5 caracteres',
            'distrido_sede.min' => 'O tamanho minimo do nome é 1 caracteres',
            'responsavel.required' => 'O campo é obrigatório',
            'responsavel.max' => 'O tamanho máximo do nome é 75 caracteres',
            'responsavel.min' => 'O tamanho minimo do nome é 10 caracteres',
            'responsavel_cda.required' => 'O campo é obrigatório',
            'responsavel_cda.max' => 'O tamanho máximo do nome é 75 caracteres',
            'responsavel_cda.min' => 'O tamanho minimo do nome é 10 caracteres',
        ];
    }
}
