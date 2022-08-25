<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "student-name"      => "required|max:255",
            "city-name"         => "required",
            "distance"          => "required",
            "moons"             => "required",
        ];
    }
    public function messages()
    {
        return [
            'student-name.required' => 'Please fill student',
            'student-name.max'      => 'Student name allow only 255 Character',
            'distance.required'     => 'Please fill distance',
            'moons.required'        => 'Please fill moons',
        ];
    }
}
