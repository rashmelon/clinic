<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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

    public function messages()
    {
        return [
            'name.regex' => 'name should\'t contain spaces',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $segments = request()->segments();
        if (sizeof($segments) == 2){
            return [
                'name' => 'required|regex:/^\S*$/u|unique:roles,name',
                'display_name' => 'required',
            ];
        }
        else if (sizeof($segments) == 3){
            return [
                'name' => 'regex:/^\S*$/u|unique:roles,name,'.$segments()[2],
                'display_name' => '',
            ];
        }
    }
}
