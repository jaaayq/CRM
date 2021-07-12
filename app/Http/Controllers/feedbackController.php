<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback2;
class feedbackController extends Controller
{
     //
     public function create(){

        return view('joinactivity');
    }




    //FUNCTIONS FOR CREATE AMD STPRE
    public function store(Request $request)
    {

        $data = new feedback2;
        $data -> feedbackcompanyname = $request->feedbackcompanyname;
        $data -> feedbackdate = $request->feedbackdate;
        $data -> feedbackaddress = $request->feedbackaddress;
        $data -> feedbacktelephone = $request->feedbacktelephone;
        $data -> feedbackemail = $request->feedbackemail;
        $data -> feedbackgender = $request->feedbackgender;
        $data -> feedbacknature = $request->feedbacknature;
        $data -> feedbackyesno1 = $request->feedbackyesno1;
        $data -> feedbackserviceavailed1 = $request->feedbackserviceavailed1;
        $data -> feedbackserviceavailed2 = $request->feedbackserviceavailed2;
        $data -> feedbackconsultancy = $request->feedbackconsultancy;
        $data -> feedbackpackaging = $request->feedbackpackaging;
        $data -> feedbackscholarship = $request->feedbackscholarship;
        $data -> feedbackconversion = $request->feedbackconversion;
        $data -> feedbackmanagement = $request->feedbackmanagement;
        $data -> feedbackmanagementspecify = $request->feedbackmanagementspecify;
        $data -> t1 = $request->t1;
        $data -> t2 = $request->t2;
        $data -> AOS1 = $request->AOS1;
        $data -> AOS2 = $request->AOS2;
        $data -> QOS1 = $request->QOS1;
        $data -> QOS2 = $request->QOS2;
        $data -> UTM1 = $request->UTM1;
        $data -> CTT1 = $request->CTT1;
        $data -> RIP1 = $request->RIP1;
        $data -> SAT1 = $request->SAT1;
        $data -> SAT2 = $request->SAT2;
        $data -> feedbackrank1 = $request->feedbackrank1;
        $data -> feedbackrank2 = $request->feedbackrank2;
        $data -> feedbackrank3 = $request->feedbackrank3;
        $data -> feedbackrank4 = $request->feedbackrank4;
        $data -> feedbackrank5 = $request->feedbackrank5;
        $data -> feedbackexp1 = $request->feedbackexp1;
        $data -> feedbackexp2 = $request->feedbackexp2;
        $data -> feedbackexp3 = $request->feedbackexp3;
        $data -> feedbacksuggest = $request->feedbacksuggest;
        $data -> feedbacksignature = $request->feedbacksignature;
        $data -> feedbackdesignation = $request->feedbackdesignation;
        $data->save();

        $notification = array(
            'message' => 'Activity Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('joinactivityview')->with($notification);



    }

    //FUNCTIONS FOR VIEW
    public function view()
    {

        $alldata = feedback2::all();
        return view('joinactivityview', compact('alldata'));
    }




      }
