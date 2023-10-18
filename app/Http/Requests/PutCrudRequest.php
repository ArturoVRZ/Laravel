<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutCrudRequest extends FormRequest
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
            //reglas para autentificar el post
            "title" => "required |min:5|max:255",
            //"slug" => "required|min:5|max:255",
            "content" => "required|min:7",
            "description" => "required|min:10",
            "posted" => "required",
            "category_id" => "required",
        ];
    }
}
