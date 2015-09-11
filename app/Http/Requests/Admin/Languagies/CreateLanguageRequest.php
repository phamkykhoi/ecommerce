<?php

namespace App\Http\Requests\Admin\Languagies;

use App\Http\Requests\Request;

class CreateLanguageRequest extends Request
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
            'language_code' => 'required',
            'small_icon'    => 'required|mimes:jpeg,bmp,png,jpg',
            'lager_icon'    => 'required|mimes:jpeg,bmp,png,jpg',
        ];
    }
}
