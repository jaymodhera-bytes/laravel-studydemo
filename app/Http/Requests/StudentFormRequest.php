<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
            'first_name' => 'required|alpha|min:3|max:20',
            'last_name' => 'nullable|alpha|max:20',
            'phone' => 'required|integer',
            'email' => 'required|email|unique:students,email',
            'address' => 'required',
            'dob' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field can not be blank.'

            // 'first_name.required' => 'Without name, what should I call you?',
            // 'email.required' => 'We need your email address also',
            // 'phone.required'  => 'c\'mon, you want to contact me without saying anything?',
        ];
    }
}
