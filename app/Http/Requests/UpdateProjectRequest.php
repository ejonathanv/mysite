<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover' => 'nullable|image',
            'link' => 'required|url',
            'image_1' => 'nullable|image',
            'image_2' => 'nullable|image',
            'image_3' => 'nullable|image',
            'client' => 'required|string|max:255',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'El título es obligatorio',
            'title.string' => 'El título debe ser un texto',
            'title.max' => 'El título no puede tener más de 255 caracteres',
            'description.required' => 'La descripción es obligatoria',
            'description.string' => 'La descripción debe ser un texto',
            'cover.image' => 'La imagen de portada debe ser una imagen',
            'link.required' => 'El enlace es obligatorio',
            'link.url' => 'El enlace debe ser una URL válida',
            'image_1.image' => 'La imagen 1 debe ser una imagen',
            'image_2.image' => 'La imagen 2 debe ser una imagen',
            'image_3.image' => 'La imagen 3 debe ser una imagen',
            'client.required' => 'El cliente es obligatorio',
            'client.string' => 'El cliente debe ser un texto',
            'client.max' => 'El cliente no puede tener más de 255 caracteres',
        ];
    }
}
