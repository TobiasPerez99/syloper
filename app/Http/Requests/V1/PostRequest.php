<?php

namespace App\Http\Requests\V1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function rules(Request $request)
    {

        return [
            'titulo' => 'required',
            'descripcion' => 'required',
            'slug' => 'required | unique:posts',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El Titulo es Requerido',
            'slug.required' => 'El slug es Requerido',
            'slug.unique' => 'El slug debe ser unico',
            'descripcion.required' => 'La Descripcion es Requerida',
        ];
    }
}
