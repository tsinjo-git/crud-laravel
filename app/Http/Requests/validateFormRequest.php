<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormRequest extends FormRequest
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
            "titre" => "required",
            "description" => "required"
        ];
    }

    public function messages()
    {
        return [
            "titre.required" => "Le champ titre est requis",
            "description.required" => "Le champ description est requis"
        ];
    }
}
