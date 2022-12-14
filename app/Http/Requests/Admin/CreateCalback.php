<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateCalback extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'phone' => 'required|max:25',
            'address_ru' => 'required|max:255',
            'address_uz' => 'required|max:255',
            'gmail' => 'required|max:255',
            'information_ru' => 'required|max:255',
            'information_uz' => 'required|max:255'
        ];
    }
}
