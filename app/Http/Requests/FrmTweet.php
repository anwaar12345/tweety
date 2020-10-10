<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class FrmTweet extends FormRequest
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
            'body' => 'required|max:255|min:10'
        ];
    }

    public function messages()
    {
        return [
            'body.required' => 'Please Insert To Tweet'
        ];
    }

}
