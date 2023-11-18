<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            "name" => "required|string|max:255|min:3|unique:students,name",
            "phone" => "required|string|max:11|min:11|unique:students,phone",
            "password" => "required|string|max:255|min:8",
            "age" => "required|integer",
            "gender" => "required|string|max:255|min:4",
            "country" => "required|string|max:255|min:3",
            "city" => "required|string|max:255|min:3",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "main_language" => "required|string|max:255|min:3",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

}
