<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'username'      => 'required|max:255',
            'password'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please Type Username',
            'username.max'      => 'Allow only 255 Character',
            'password.required' => 'Please Type your password',
        ];
    }
}
