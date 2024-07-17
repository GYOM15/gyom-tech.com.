<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => ['required', 'regex:/^[A-Za-z -]{3,}$/'],
            'firstname' => ['required', 'regex:/^[A-Za-z -]{3,}$/'],
            'phone' => ['required', 'regex:/^[0-9+]{3,}$/'],
            'email' => ['required', 'email'],
            'message' => ['required', 'regex:/^.{5,}$/u'],
            'g-recaptcha-response' => ['required'],
        ];
    }
}
