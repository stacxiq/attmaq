<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionGroupRequest extends FormRequest
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
            'teacher_id' => 'required|exists:teachers,id',
            'title' => 'required|string',
            'content' => 'required|string',
            'start-date' => 'required|date',
            'start-time' => 'required|date_format:H:i',
            'url' => 'required|string',
        ];
    }
}
