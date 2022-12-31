<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser una cadena de texto',
            'name.max' => 'El nombre debe tener máximo 255 caracteres',
            'position.required' => 'El cargo es requerido',
            'position.string' => 'El cargo debe ser una cadena de texto',
            'position.max' => 'El cargo debe tener máximo 255 caracteres',
            'company.required' => 'La empresa es requerida',
            'company.string' => 'La empresa debe ser una cadena de texto',
            'company.max' => 'La empresa debe tener máximo 255 caracteres',
            'description.required' => 'La descripción es requerida',
            'description.string' => 'La descripción debe ser una cadena de texto',
            'link' => 'El link debe ser una cadena de texto',
            'link.max' => 'El link debe tener máximo 255 caracteres',
            'username' => 'El nombre de usuario debe ser una cadena de texto',
            'username.max' => 'El nombre de usuario debe tener máximo 255 caracteres',
        ];
    }
}
