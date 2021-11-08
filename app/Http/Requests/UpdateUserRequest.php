<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],

            'username'    => [
                'required',
                'max:20',
            ],

            'email'   => [
                'required',
                
            ],
            
            'roles.*' => [
                'string',
            ],

            'role'   => [
               
                'string',
                'required',
                
            ],
        ];
    }

    public function authorize()
    {
       // return Gate::allows('user_access');
       return true;
    }
}
