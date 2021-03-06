<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'username'=> 'required|min:5',
                'password'=> 'required'
        ];
    }

    public function messages(){
        return [
            'uname.required' => 'cant left empty...',
            'uname.min' => 'at least 5 char ...',
            'password.required'=> 'test message ...'
        ];
    }
}