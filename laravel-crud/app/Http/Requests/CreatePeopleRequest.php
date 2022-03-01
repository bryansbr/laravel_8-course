<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePeopleRequest extends FormRequest
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
            "first_name" => "required | max:50",
            "last_name" => "required | max:50",
            "age" => "required | numeric | min:1 | max:120",
            "gender" => "required",
            "country" => "required",
            "phone_number" => "required | min:3 | max:15",
            "email" => "required | email | unique:people"
        ];
    }

    public function messages()
    {
        return [
            "first_name.max" => "The entered data exceeds the limit of allowed characters",
            "last_name.max" => "The entered data exceeds the limit of allowed characters",
            "age.numeric" => "The data must be numeric",
            "age.min" => "The age can't be less than 1.",
            "age.max" => "The age can't be greater than 120.",
            "phone_number.min" => "The phone number can't be less than 3 digits.",
            "phone_number.max" => "The phone number can't be greater than 15 digits.",
        ];
    }
}
