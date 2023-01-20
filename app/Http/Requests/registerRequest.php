<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'requiered|unique:users, email',
            'username' => 'requiered|unique:users, username',
            'password' => 'requiered|min:8',
            'password_confirmation' => 'requiered|same:password',

        ];
    }
}
