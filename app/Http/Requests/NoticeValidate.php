<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeValidate extends FormRequest
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
            'language_id' => 'required|integer',
            'notice_title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf|max:2048',
            'description' => 'required|string|max:255',
            'notice_date' => 'required|date',
            'leter_no' => 'required|string|max:255',
        ];
    }
}
