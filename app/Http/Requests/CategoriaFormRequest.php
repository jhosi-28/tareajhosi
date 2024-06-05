<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Validation\Rule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'categoria'=>'required|max:50',
            'descripcion'=>'max:256',
        ];
    }
}
