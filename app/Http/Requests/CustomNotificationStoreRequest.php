<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomNotificationStoreRequest extends FormRequest
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
            'student_id' => 'required_without_all:teacher_id,session_id',
            'teacher_id' => 'required_without_all:student_id,session_id',
            'session_id' => 'required_without_all:student_id,teacher_id',
            'title' => 'required|string',
            'body' => 'required|string',
        ];
    }
}
