<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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

            'name' => [ 'required'],
            'price' => ['required', 'numeric'],
            'teacher_id' => ['required', 'exists:teachers,id'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],

        ];
    }
    public function messages(): array
    {
        return [ // errors messages to be sent to $errors as a replaceable for the default values
            'name.required'=>'please enter Course Name',
            'price.required'=>'please enter Course Price',
            'price.numeric'=>'please enter Course Price',
            'teacher_id.required'=>'please enter Course Teacher',
            'teacher_id.exists'=>'please enter Course Teacher',
            'image.required'=>'please enter Course Image',

        ];
    }
}
