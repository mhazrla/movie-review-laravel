<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieUpdateRequest extends FormRequest
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
            'judul' => 'required',
            'sutradara' => 'required',
            'tahun' => 'required',
            'sinopsis' => 'required',
            'genre_id'  => 'required|exists:genres,id',
        ];
    }
}
