<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'username' =>'required',
            'email' => 'required|email|unique:teachers,email',
            'phone' =>  [ 'nullable','regex:/^(011|012|010)[0-9]{8}$/'],
            'password' => [ 'required', 'regex:/^[a-zA-Z0-9]{8,16}$/']

        ];
    }
}
