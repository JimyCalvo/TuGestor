<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dni' => 'required|digits:10|unique:profiles,dni',
            'tel_user' => 'max:10',
            'phone_user'=> 'max:20',
            'address' => 'required|max:200|min:3|regex:/^[a-zA-Z0-9\s\-\,\.\#]+$/',
            'birthday' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'job_title' => 'required|max:50',
            'tel_job'=> 'max:10',
        ];
    }
}
