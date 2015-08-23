<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateMissionRequest extends Request
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
            'title'       => ['required', 'max:255', 'min:3'],
            'description' => ['required', 'min:10'],
            'photo'       => ['required', 'image', 'max:2000']
        ];
    }
}
