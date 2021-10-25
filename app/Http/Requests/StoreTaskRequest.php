<?php

namespace App\Http\Requests;

use App\Rules\SelectDateRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'description' => [
                'required', 'string',
            ]
          //  'date_finished' => [
         //       'required',
         //       new SelectDateRule(),
//],
         //   'activitydate' => [
         //      'required',
         //   ],






        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}

