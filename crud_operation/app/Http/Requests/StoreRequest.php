<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name'  => 'required | string | max:30',
            'email' => 'required | email | unique:laravel_crud_students,email',
            'phone' => 'required | max:10 | digits_between:10,13',

        ];
    }

    public function messages(): array{
        return [
            'name.required'  => 'Please enter the student name.',
            'name.max'       => 'Name cannot be longer than 30 characters.',
            'email.required' => 'Please enter an email address.',
            'email.email'    => 'Please enter a valid email address.',
            'email.unique'   => 'This email address is already registered.',
            'phone.required' => 'Please enter a phone number.',
            'phone.digits_between' => 'Phone number must be between 10 to 13 digits.',
        ];
    }
}
