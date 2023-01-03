<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsFormRequest extends FormRequest
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
            'title'=>'required |max:255',
            'author'=>'required | alpha',
            'remark'=> 'max:200'
            //
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Please write a title",
            "title.min" => "The title has to have at least :max characters.",
            "title.max" => "The title has to have no more than :max characters.",
            "author.required" => "Please write author",
            "authort.alpha" => "The author must be  :alpha",
            "remark.max" => "Please write remark having  :max "
        ];
    }
    
}
