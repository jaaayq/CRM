<?php

namespace App\Http\Controllers;
use App\Models\activity1;
use Illuminate\Http\Request;

class ActivityControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return activity1::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([

        'activityname'=> ['required'],   
        'activitydate'=> ['required'],
        'date_finished'=> ['required','after:activitydate'],
        'activitycode'=>'unique:activity1s',
    ]);
        

        return activity1::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return activity1::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $activity = activity1::find($id);
       $activity->update($request->all());
       return $activity;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return activity1::destroy($id);
    }

        /**
     * Search the specified resource from storage.
     *
     * @param  str $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return activity1::where('activityname', 'like', '%'.$name.'%')->get();
    }
}
