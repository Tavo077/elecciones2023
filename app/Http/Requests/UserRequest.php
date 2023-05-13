<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $usuario = $this->route()->parameter('usuario');

        $rules = [
            "name" => "required",
            'dpi' => 'required|min:13|max:13|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ];

        if ($usuario) {
            $rules['email'] = "required|string|email|max:255|unique:users,email," . $usuario->id;
            $rules['dpi'] = "required|max:13|min:13|unique:users,dpi," . $usuario->id;
            $rules['password'] = "";
        }

        return $rules;
    }
}
