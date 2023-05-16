<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $candidato = $this->route()->parameter('candidato');

        $rules = [
            "nombre" => "required",
            'foto_persona' => 'required',
            'logo' => 'required',
            'nombre_partido' => 'required',
        ];

        return $rules;
    }
}
