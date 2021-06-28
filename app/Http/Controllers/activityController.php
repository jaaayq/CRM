<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity1;

class activityController extends Controller
{
    //
    public function view(){

        return view('createactivity');
    }

    public function store(Request $request)
    {

        $data = new activity1;
        $data -> ActivityName = $request->activityname;
        $data -> ActivityDate = $request->activitydate;
        $data -> ActivityDescription = $request->activitydescription;
        $data -> ActivityCode = $request->activitycode;
        $data->save();
    }
}
