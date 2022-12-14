<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateProduct extends FormRequest
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
            'sub_category_id' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'course_description_ru' => 'required',
            'course_description_uz' => 'required',
            'age_of_students' => 'required',
            'complexity' => 'required',
            'course_registration_ru' => 'required',
            'course_registration_uz' => 'required',
        ];
    }
}
