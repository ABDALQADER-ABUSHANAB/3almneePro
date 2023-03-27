<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use App\Models\User;

class CreateUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'Age' => ['required', 'min:1','max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'Gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
