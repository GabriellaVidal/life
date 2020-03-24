<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pessoa extends FormRequest
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
        $rules = [
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'data_nasc' => 'required',
            'nacionalidade' => 'required',

        ];

        return $rules ;


    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'email.required' => 'O campo Email é obrigatório.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'data_nasc.required' => 'O campo Data de Nascimento é obrigatório.',
            'nacionalidade.required' => 'O campo Nacionalidade é obrigatório.',
        ];
    }
}
