<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'movie_id' => 'required',
            'section_1_title' => 'required|string',
            'section_1_desc' => 'required|string',
            'section_2_title' => 'nullable|string',
            'section_2_desc' => 'nullable|string',
            'section_3_title' => 'nullable|string',
            'section_3_desc' => 'nullable|string',
        ];
    }
}
