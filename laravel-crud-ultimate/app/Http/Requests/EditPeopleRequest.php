<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPeopleRequest extends FormRequest
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
            // First name
            "first_name" => "required | max:50",
            "first_name.max" => "The entered data exceeds the limit of allowed characters",

            // Last name
            "last_name" => "required | max:50",
            "last_name.max" => "The entered data exceeds the limit of allowed characters",

            // Age
            "age" => "required | numeric | min:1 | max:120",
            "age.numeric" => "The data must be numeric",
            "age.min" => "The age can't be less than 1.",
            "age.max" => "The age can't be greater than 120.",

            // Gender
            "gender" => "required",

            // Country
            "country" => "required",

            // Phone number
            "phone_number" => "required | min:3 | max:15",
            "phone_number.min" => "The phone number can't be less than 3 digits.",
            "phone_number.max" => "The phone number can't be greater than 15 digits.",

            // Email
            "email" => "required | email",
        ];
    }
}
