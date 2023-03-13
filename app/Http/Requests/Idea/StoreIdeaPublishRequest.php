<?php

namespace App\Http\Requests\Idea;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdeaPublishRequest extends FormRequest
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
            'type' => 'required|in:author,anonymous',
            'idea_id' => 'required'
        ];
    }

    public function validated()
    {
        if($this->input('type') == 'anonymous')
        {
            return array_merge(parent::validated(), ['anonymous' => 1, 'posted_at' => now()]);
        }

        return array_merge(parent::validated(), ['posted_at' => now()]);
    }
}
