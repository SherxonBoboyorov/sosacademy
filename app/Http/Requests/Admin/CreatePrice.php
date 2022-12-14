<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreatePrice extends FormRequest
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
            'product_id' => 'required|max:255',
            'number_people_ru' => 'required|max:255',
            'number_people_uz' => 'required|max:255',
            'lesson_ru' => 'required',
            'lesson_uz' => 'required',
            'course_fee_ru' => 'required|max:255',
            'course_fee_uz' => 'required|max:255',
            'registration_course_ru' => 'required',
            'registration_course_uz' => 'required',
        ];
    }
}
