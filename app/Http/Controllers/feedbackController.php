<?php

namespace App\Http\Controllers;
use App\Models\feedback2;

use Illuminate\Http\Request;

class feedbackController extends Controller
{
     //
     public function create(){

        return view('createfeedback');
    }


    //FUNCTIONS FOR CREATE AMD STPRE
    public function store(Request $request)
    {

        $data = new feedback2;
        $data -> FeedBackCompanyName = $request->feedbackcompanyname;
        $data -> FeedBackDate = $request->feedbackdate;
        $data -> FeedBackAddress = $request->feedbackaddress;
        $data -> FeedBackTelephone = $request->feedbacktelephone;
        $data -> FeedBackEmail = $request->feedbackemail;
        $data -> FeedBackGender = $request->feedbackgender;
        $data -> FeedBackNature = $request->feedbacknature;
        $data -> FeedBackYesno1 = $request->feedbackyesno1;
        $data -> FeedBackServiceAvailed1 = $request->feedbackserviceavailed1;
        $data -> FeedBackServiceAvailed2 = $request->feedbackserviceavailed2;
        $data -> FeedBackConsultancy = $request->feedbackconsultancy;
        $data -> FeedBackPackaging = $request->feedbackpackaging;
        $data -> FeedBackScholarship = $request->feedbackscholarship;
        $data -> FeedBackConversion = $request->feedbackconversion;
        $data -> FeedBackManagement = $request->feedbackmanagement;
        $data -> FeedBackManagementSpecify = $request->feedbackmanagementspecify;
        $data -> T1 = $request->t1;
        $data -> T2 = $request->t2;
        $data -> aos1 = $request->AOS1;
        $data -> aos2 = $request->AOS2;
        $data -> qos1 = $request->QOS1;
        $data -> qos2 = $request->QOS2;
        $data -> utm1 = $request->UTM1;
        $data -> ctt1 = $request->CTT1;
        $data -> rip1 = $request->RIP1;
        $data -> sat1 = $request->SAT1;
        $data -> sat2 = $request->SAT2;
        $data -> FeedBackRank1 = $request->feedbackrank1;
        $data -> FeedBackRank2 = $request->feedbackrank2;
        $data -> FeedBackRank3 = $request->feedbackrank3;
        $data -> FeedBackRank4 = $request->feedbackrank4;
        $data -> FeedBackRank5 = $request->feedbackrank5;
        $data -> FeedBackExp1 = $request->feedbackexp1;
        $data -> FeedBackExp2 = $request->feedbackexp2;
        $data -> FeedBackExp3 = $request->feedbackexp3;
        $data -> FeedBackSuggest = $request->feedbacksuggest;
        $data -> FeedBackSignature = $request->feedbacksignature;
        $data -> FeedBackDesignation = $request->feedbackdesignation;
        $data->save();

        $notification = array(
            'message' => 'Activity Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.createfeedback')->with($notification);



    }


      }
