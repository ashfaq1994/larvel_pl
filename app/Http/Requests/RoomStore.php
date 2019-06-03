<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomStore extends FormRequest
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
            'name' => 'required|max:255|unique:rooms',
            'no_adults'=>'required|max:255',
            'no_childs'=>'required|max:255',
            'feature_img'=>'required|image',
            'price'=>'required',
          
        ];
    }
}
