<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class StoreUserRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'staff_id' => ['required'],
            'role_id' => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
           'staff_id.required' => 'Please Select Staff',
           'role_id.required' => 'Please Select Role',
        ];
    }

    public function validated(): array
    {
        $password = Hash::make($this->input('password'));
        return array_merge(parent::validated(), ['password' => $password]);
    }
}
