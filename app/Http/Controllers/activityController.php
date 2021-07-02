<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity1;

class activityController extends Controller
{
    //
    public function create(){

        return view('createactivityadd');
    }

    public function viewjoin(){

        return view('joinactivity');
    }


    public function viewjointest(){

        return view('joinactivitytest');
    }

    //FUNCTIONS FOR CREATE AMD STPRE
    public function store(Request $request)
    {

        $data = new activity1;
        $data -> ActivityName = $request->activityname;
        $data -> ActivityDate = $request->activitydate;
        $data -> ActivityDescription = $request->activitydescription;
        $data -> ActivityCode = $request->activitycode;
        $data->save();

        $notification = array(
            'message' => 'Activity Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.createactivity')->with($notification);



    }

    //FUNCTIONS FOR VIEW
    public function view()
    {

        $alldata = activity1::all();
        return view('createactivityview', compact('alldata'));
    }


//FUNCTIONS FOR DELETE
    public function delete($id)
    {
        activity1::find($id)->delete();

        $notification = array(
            'message' => 'Activity Deleted Successfully',
            'alert-type' => 'warning'
        );
        return back()->with($notification);

    }

      //FUNCTIONS FOR EDIT
      public function edit($id)
      {
        $editdata = activity1::where('id', $id)->first();

        return view('createactivityadd', compact('editdata'));


      }

 //FUNCTIONS FOR UPDATE
      public function update(Request $request,$id)
      {

        $data = activity1::where('id', $id)->first();
        $data-> activityname = $request->activityname;
        $data-> activitydate = $request->activitydate;
        $data-> activitydescription = $request->activitydescription;
        $data-> activitycode = $request->activitycode;

       $data->save();
       $notification = array(
        'message' => 'Activity Updated Successfully',
        'alert-type' => 'success'
    );
    return back()->with($notification);

      }


}
