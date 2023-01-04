<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required',
            'usermail' => 'required|email',
            'userpassword' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Le champ nom est requis",
            'usermail.required' => "Le champ email est requis",
            'usermail.email' => "Veuillez entrer une adresse email valide",
            'userpassword.required' => "Mot de passe requis",
            "userpassword.min" => "Le mot de passe doit contenir au moints 6 caractères"
        ];
    }
}
