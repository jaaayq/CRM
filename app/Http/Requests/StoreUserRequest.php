<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'     => [
                'string',
                'required',
            ],
            'username'    => [
                'required',
                'unique:users',
                'max:20',
            ],
            'email'    => [
                'required',
                'unique:users',
            ],
            'password' => [
                'required',
            ],
            'roles.*'  => [
                'integer',
            ],
            'role'    => [
                'required',
                'string',
            ],
        ];
    }

    public function authorize()
    {
      //  return Gate::allows('user_access');
      return true;
    }
}
