<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback2;
use App\Models\activity1;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use app\Charts\FeedbackChart;
use Illuminate\Support\Arr;

use function GuzzleHttp\Promise\all;

class feedbackController extends Controller
{



  public function index()
  {

    DB::statement("SET SQL_MODE=''");

    //$codes = feedback2::select('feedbackactivitycode')->distinct()->get();
    // ->where(['t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2'])


    //  $num1 = DB::table('feedback2s')
    //   ->select('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2')
    //   ->where([1])
    //  ->count();


    // $allrate1 = feedback2::whereColumn(['t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2'], $num1)->count();
    // $allrate1 = feedback2::where(['t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2', 1])->count();


    //$t1F = feedback2::where('t1', 1)->get()->toArray();
    // $t2F = feedback2::where('t2', 1)->get()->toArray();
    // $AOS1F = feedback2::where('AOS1', 1)->get()->toArray();
    // $AOS2F = feedback2::where('AOS2', 1)->get()->toArray();
    // $QOS1F = feedback2::where('QOS1', 1)->get()->toArray();
    // $QOS2F = feedback2::where('QOS2', 1)->get()->toArray();
    // $UTM1F = feedback2::where('UTM1', 1)->get()->toArray();
    // $CTT1F = feedback2::where('CTT1', 1)->get()->toArray();
    // $RIP1F = feedback2::where('RIP1', 1)->get()->toArray();
    // $SAT1F = feedback2::where('SAT1', 1)->get()->toArray();
    // $SAT2F = feedback2::where('SAT2', 1)->get()->toArray();

    //$SUM1 = array_merge($t1F, $t2F, $AOS1F, $AOS2F, $QOS1F, $QOS2F, $UTM1F, $CTT1F, $RIP1F, $SAT1F, $SAT2F)->get();

    // $answer =  DB::table('feedback2s')
    //  ->selectRaw('sum(t1)')
    // ->get();

    // $orders =  DB::table('feedback2s')->groupBy('feedbackactivitycode')
    //   ->where([
    //   ['t1',  1],
    //     ['t2', 1],
    //     ['AOS1', 1],
    //     ['AOS2', 1],
    //     ['QOS1', 1],
    //    ['QOS2', 1],
    //    ['UTM1', 1],
    //    ['CTT1', 1],
    //    ['RIP1', 1],
    //    ['SAT1', 1],
    //   ['SAT2', 1],
    //  ])->get();





    // $votesInGroups = DB::table('feedback2s')
    //   ->select(array('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2'))
    // ->get();

    //$votes = DB::table('feedback2s')->where('QOS1', 1)->count();


    $columns =  DB::table('feedback2s')
      ->select('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2')
      ->groupBy('feedbackactivitycode')
      ->get();
    // $columns = $columns->toArray();



    // $test2 = feedback2::groupBy('feedbackactivitycode')->having(DB::raw('count(*)'), ">", "1")->select(array('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2'))->get();




    // $duplicatedProductsGrouped = collect([]);

    // foreach ($test2 as $test) {


    //  if ($test->count > 1) {

    //    $duplicatedProductsGrouped->push($test);
    //  }
    //}

    // dd($columns);


    // dd($counted->all());





    //dd($counted);


    //$testshit = DB::table("feedback2s")
    //  ->whereColumn(['t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2'], 1)
    // ->count();

    //  dd($votes);


    //$num1 = feedback2::where('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2', '=', '1')->count();
    $num1 = DB::table('feedback2s')
      ->select(
        'feedback2s.*',
        DB::raw('count(1) as poorsum')
      )
      ->get();









    $duplicated = DB::table('feedback2s')
      ->select('feedbackactivitycode', DB::raw('count(`feedbackactivitycode`) as occurences'))
      ->groupBy('feedbackactivitycode')
      ->having('occurences', '>', 1);
    //$duplicated = $duplicated->toArray();
    $add = $duplicated->addSelect('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2')->get();


    //dd($add);

    $test = DB::table('feedback2s')
      ->select('feedbackactivitycode')
      ->groupBy('feedbackactivitycode')


      ->get();
    //dd($test);


    $sorted_activity_codes = DB::table('feedback2s')
      ->select('t1', 't2', 'AOS1', 'AOS2', 'QOS1', 'QOS2', 'UTM1', 'CTT1', 'RIP1', 'SAT1', 'SAT2')
      ->groupBy('feedbackactivitycode')
      ->get();



    // $results =  $duplicated->merge($columns);
    // $merged = (array) $results;
    // $final = array_merge($merged);
    //  $results = $results->toArray();
    // dd($final);

    $merged = $columns->merge($duplicated);
    $merged = $merged->toArray();
    //dd($merged);





    // dd($columns);

    $alldata = feedback2::all()->groupBy('feedbackactivitycode');
    //dd($alldata);

    return view('feedbackstatistics', compact('sorted_activity_codes', 'duplicated', 'columns', 'add'));
  }


  //
  public function create()
  {

    return view('joinactivity');
  }




  //FUNCTIONS FOR CREATE AMD STPRE
  public function store(Request $request)
  {

    $data = new feedback2;
    $data->feedbackactivitycode = $request->feedbackactivitycode;
    $data->feedbackcompanyname = $request->feedbackcompanyname;
    $data->feedbackdate = $request->feedbackdate;
    $data->feedbackaddress = $request->feedbackaddress;
    $data->feedbacktelephone = $request->feedbacktelephone;
    $data->feedbackemail = $request->feedbackemail;
    $data->feedbackgender = $request->feedbackgender;
    $data->feedbacknature = $request->feedbacknature;
    $data->feedbackyesno1 = $request->feedbackyesno1;
    $data->feedbackserviceavailed1 = $request->feedbackserviceavailed1;
    $data->feedbackserviceavailed2 = $request->feedbackserviceavailed2;
    $data->feedbackconsultancy = $request->feedbackconsultancy;
    $data->feedbackpackaging = $request->feedbackpackaging;
    $data->feedbackscholarship = $request->feedbackscholarship;
    $data->feedbackconversion = $request->feedbackconversion;
    $data->feedbackmanagement = $request->feedbackmanagement;
    $data->feedbackmanagementspecify = $request->feedbackmanagementspecify;
    $data->t1 = $request->t1;
    $data->t2 = $request->t2;
    $data->AOS1 = $request->AOS1;
    $data->AOS2 = $request->AOS2;
    $data->QOS1 = $request->QOS1;
    $data->QOS2 = $request->QOS2;
    $data->UTM1 = $request->UTM1;
    $data->CTT1 = $request->CTT1;
    $data->RIP1 = $request->RIP1;
    $data->SAT1 = $request->SAT1;
    $data->SAT2 = $request->SAT2;
    $data->feedbackrank1 = $request->feedbackrank1;
    $data->feedbackrank2 = $request->feedbackrank2;
    $data->feedbackrank3 = $request->feedbackrank3;
    $data->feedbackrank4 = $request->feedbackrank4;
    $data->feedbackrank5 = $request->feedbackrank5;
    $data->feedbackexp1 = $request->feedbackexp1;
    $data->feedbackexp2 = $request->feedbackexp2;
    $data->feedbackexp3 = $request->feedbackexp3;
    $data->feedbacksuggest = $request->feedbacksuggest;
    $data->feedbacksignature = $request->feedbacksignature;
    $data->feedbackdesignation = $request->feedbackdesignation;
    $data->save();

    $notification = array(
      'message' => 'Feedback has been sent',
      'alert-type' => 'success'
    );
    return redirect()->route('customerfeedback')->with($notification);
  }

  //FUNCTIONS FOR VIEW
  public function view()
  {

    $alldata = feedback2::all();
    return view('joinactivityview', compact('alldata'));
  }

  //functions for customer view
  public function customer()
  {

    return redirect('customer')->with('SMESSAGE', 'FEEDBACK HAS BEEN SENT');
  }



  //barchart controller
  public function viewfbchart()
  {

    $current_month_fb = feedback2::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();

    $last_month_fb = feedback2::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(1))->count();

    $gendermale = feedback2::where('feedbackgender', 'male')->count();
    $genderfemale = feedback2::where('feedbackgender', 'female')->count();
    // $count[] = array ('gendermale');

    $feedbackcount = DB::table('feedback2s')->count();




    return view('dashboard', compact('feedbackcount'));
  }
}
