<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity1;
use App\Rules\SelectDateRule;
use BaconQrCode\Renderer\RendererStyle\Fill;
use Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\Console\Input\Input;
use Throwable;



class activityController extends Controller
{
    //
    public function create()
    {

        return view('createactivityadd');
    }

    public function viewjoin()
    {



        return view('joinactivity');
    }


    public function viewjointest()
    {

        return view('joinactivitytest');
    }


    public function viewaboutus()
    {

        return view('aboutus');
    }



    //FUNCTIONS FOR CUSTOMER CODE
    public function viewactivity(Request $request)
    {




        $code = $request->input('code');


        if (DB::table('activity1s')->where([
            ['activitycode', $code],
            ['activity_status', '1']
        ])->exists()) {

            return view('joinactivity', compact('code'));
        } elseif (DB::table('activity1s')->where([
            ['activitycode', $code],
            ['activity_status', '0']
        ])->exists()) {

            return redirect('customer')->with('feedbackmessage', 'FEEDBACK IS DISABLED ');
        } else {


            return redirect('customer')->with('message', 'CODE DOES NOT EXIST');
        }
    }





    //FUNCTIONS FOR CREATE AMD STPRE
    public function store(Request $request)
    {
        $request->validate([
            'activitydate' => ['required', new SelectDateRule],
            'date_finished' => ['required', 'after:activitydate', new SelectDateRule],
            'activitycode' => 'unique:activity1s',

        ]);




        $data = new activity1;
        $data->ActivityName = $request->activityname;
        $data->ActivityDate = $request->activitydate;
        $data->date_finished = $request->date_finished;
        $data->ActivityDescription = $request->activitydescription;
        $data->ActivityCode = $request->activitycode;
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
            'alert-type' => 'error'
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
    public function update(Request $request, $id)
    {

        $data = activity1::where('id', $id)->first();
        $data->ActivityName = $request->activityname;
        $data->ActivityDate = $request->activitydate;
        $data->date_finished = $request->date_finished;
        $data->ActivityDescription = $request->activitydescription;
        $data->ActivityCode = $request->activitycode;

        $data->save();
        $notification = array(
            'message' => 'Activity Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function index(Request $request)
    {

        $data = activity1::where([
            ['activitycode', '!=', null],
            [function ($query) use ($request) {
                if (($code = $request->code)) {
                    $query->orWhere('activitycode', 'LIKE', '%' . $code . '%')->get();
                }
            }]

        ])
            ->orderBy("id", "desc")
            ->paginate(10);

        return view('data.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //update status on feedback

    public function updateactivitystatus($act_id, $act_status)
    {

        $notificationsuccess = array(
            'message' => ' Activity status updated',
            'alert-type' => 'success'
        );

        $notificationfail = array(
            'message' => ' Activity status update fail',
            'alert-type' => 'error'
        );

        try {

            $update_act = activity1::whereId($act_id)->update([
                'activity_status' => $act_status
            ]);


            if ($update_act) {
                return redirect()->route('view.createactivity')->with($notificationsuccess);
            }


            return redirect()->route('view.createactivity')->with($notificationfail);
        } catch (Throwable $th) {

            throw $th;
        }
    }
}
