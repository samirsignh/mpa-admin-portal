<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required', 'regex:/^[a-zA-Z\s]+$/', 'max:255',
            'userType' => 'required', 'regex:/^[0-9]+$/', 'max:255',
            'mobileNo' => 'required|integer|digits:10',
            'emailId' => 'required|email|unique:tbl_authentication,emailId',
            'password' => 'required|min:6|max:15',
        ];
    }
}