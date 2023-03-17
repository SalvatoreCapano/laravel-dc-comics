<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Helpers
use Illuminate\Validation\Rule;

class StoreComicsRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'nullable|max:4096',
            'thumb' => 'required|max:255',
            'price' => 'required|numeric|min:1|max:999',
            'series' => 'required|max:64',
            'sale_date' => 'required|date|before:today',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ]
        ];
    }
}
