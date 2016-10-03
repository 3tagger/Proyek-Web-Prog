<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages() 
    {
        return [
            'name.required' => 'Name must not be empty',
            'name.max'  => 'Name must not exceed 255 characters',
            'email.required' => 'We need your email to contact you back',
            'email.email' => 'Please provide valid email address',
            'email.max' => 'Email must not exceed 255 characters',
            'message' => 'Message must not be empty',
            'captcha.required' => 'Captcha must not be empty',
            'captcha.captcha' => 'Please try input the captcha again'
        ];
    }

}
