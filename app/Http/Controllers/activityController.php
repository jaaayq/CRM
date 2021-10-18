<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity1;
use BaconQrCode\Renderer\RendererStyle\Fill;
use Error;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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


    public function viewaboutus(){

        return view('aboutus');
    }


    public function viewactivity(Request $request){


    
    // $request=Input::get('code');
    $code = $request->input('code');


     //  $code = Input::get('code');

      if (DB::table('activity1s')->where('activitycode', $code)->exists()){
           
         return view('joinactivity');
      
     }else{

      

        return redirect('customer')->with('message', 'CODE DOES NOT EXIST');

            // abort(403, 'Code does not exist');

            
        
            
    }
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
            'message' => 'Activity added successfully',
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
        $data-> ActivityName = $request->activityname;
        $data-> ActivityDate = $request->activitydate;
        $data-> ActivityDescription = $request->activitydescription;
        $data-> ActivityCode = $request->activitycode;

       $data->save();
       $notification = array(
        'message' => 'Activity Updated Successfully',
        'alert-type' => 'success'
    );
    return back()->with($notification);

      }

      public function index(Request $request){

        $data = activity1::where([
            ['activitycode', '!=', null],
            [function($query)use ($request) {
                if(($code = $request->code)) {
                    $query->orWhere('activitycode', 'LIKE', '%' . $code . '%')->get();
                }

            }]

        ])
                ->orderBy("id", "desc")
                ->paginate(10);

                return view('data.index', compact('data'))
                ->with('i', (request()->input('page', 1) -1 )* 5);


      }


}
