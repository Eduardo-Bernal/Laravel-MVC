<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'nome' => 'required|string|min:3|max:50',
            'description' => 'required|min:10|max:50',
        ];
    }

    public function messages()
    {
        return [
            'nome.requiered' => "campo nome é obrigatorio",
            'nome.min' => "Minimo 3 caracteres para nome",
            'nome.max' => "Maximo 50 caracteres para nome",
            'description.required' => "campo descricao é obrigatorio",
            'description.min' => "Minimo 10 caracteres para nome",
            'description.max' => "maximo 50 caracteres para nome",

        ];
    }

}
