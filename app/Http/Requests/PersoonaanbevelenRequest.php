<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersoonaanbevelenRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'namereference' => 'required',
            'emailreference' => 'required|email',
            'profession' => 'required'
        ];
    }
}
