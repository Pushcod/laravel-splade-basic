<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CaseRequest extends FormRequest
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
            'title' => ['required','min:6','max:255', Rule::unique('casees', 'title')->ignore($this->route('casees'))],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['required',Rule::unique('casees', 'image')->ignore($this->route('casees'))],
            'isActive' => ['required'],
        ];
    }

}
