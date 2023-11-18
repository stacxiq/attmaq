<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherFormRequuest extends FormRequest
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
            'name' => 'required|unique:teachers',
            'title' => 'required',
            'phone' => 'required|min:11|max:11',
            'gender' => 'required',
            'age' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'email' => 'required|email|unique:teachers',
            'password' => 'required|min:8|max:16',
        ];
    }
}
