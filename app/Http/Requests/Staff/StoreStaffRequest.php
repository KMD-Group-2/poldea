<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            'photo' => ['nullable'],
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'unique:staffs,email'],
            'phone' => ['required', 'max:25'],
            'address' => ['required', 'max:255'],
            'department_id' => ['required'],
            'position_id' => ['required'],
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
           'department_id.required' => 'Please Select Department',
           'position_id.required' => 'Please Select Job Title',
        ];
    }

    public function validated()
    {
        if ($this->hasFile('photo')) {
            $base64Image =  base64_encode(file_get_contents($this->file('photo')->pat‌​h()));
        }else{
            $base64Image = 'data:image/png;base64,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';
        }

        return array_merge(parent::validated(), ['photo' => $base64Image]);
    }
}
