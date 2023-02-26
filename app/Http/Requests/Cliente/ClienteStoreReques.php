<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreReques extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'cpf' => 'required|unique:clientes,cpf|digits:11',
            'nome' => 'required|max:255',
            'nascimento' => 'required|date',
            'endereco' => 'required|max:255',
            'estado' => 'required|max:2',
            'cidade' => 'required|max:255',
            'sexo' => 'required|in:masculino,feminino'
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório',
            'nome.required' => 'O campo NOME é obrigatório',
            'nascimento.required' => 'Esse campo é obrigatório',
            'endereco.required' => 'O campo endereço é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',

        ];
    }
}
