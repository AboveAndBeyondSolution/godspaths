<?php

namespace App\Http\Requests\MySpace\HighMeme;

use Illuminate\Foundation\Http\FormRequest;

class HighMemeUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'This is the error',
            'description' => 'required|min:20|max:50',
        ];
    }
}
