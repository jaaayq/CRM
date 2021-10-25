<?php

namespace App\Rules;


use App\Models\activity1;
use App\Models\feedback2;
use Illuminate\Contracts\Validation\Rule;

class SelectDateRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attributes
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       return activity1::where('activitydate', '<=', $value)->where('date_finished', '>=', $value)->count() == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Time pick overlaps with existing activity';
    }
}
