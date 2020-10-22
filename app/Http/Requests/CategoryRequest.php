<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|max:191',
        ];
    }
    function messages()
    {
        return [
            // 'name.required' => 'Please Enter Name',
            'name.required' => $this->required_message('name'),
            'name.unique' => 'Name is already taken'


        ];
    }

    private function required_message($field){
        return "Please enter  ".$field;
    }
}
