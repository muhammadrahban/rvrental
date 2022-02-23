<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Json;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = course::all();
        return view('location.create', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->id;
        $request->validate([
            'course_id'     =>  'required',
            'location'      =>  'required',
            'price'         =>  'required',
            'seats'         =>  'required',
            'starting'      =>  'required',
            'ending'        =>  'required',
        ]);
        availability::where('user_id', Auth::user()->id)->where('course_id', $request->course_id)->delete();
        $count = 0;
        foreach($request->location as $location){
            $availiblitiy = new availability();
            $availiblitiy->id            =  ($request->id[$count]) ? (int)$request->id[$count] : NULL;
            $availiblitiy->course_id     =  $request->course_id;
            $availiblitiy->user_id       =  Auth::user()->id;
            $availiblitiy->location      =  ucfirst($request->location[$count]);
            $availiblitiy->price         =  $request->price[$count];
            $availiblitiy->seats         =  $request->seats[$count];
            $availiblitiy->starting      =  $request->starting[$count];
            $availiblitiy->ending        =  $request->ending[$count];
            $availiblitiy->timing        =  $request->timing[$count];
            $availiblitiy->save();
            $count++;
        }
        return redirect(route('location.index'))->with('status', "Successfully Inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user()->id;
        $availiblitiy = availability::where('course_id', $id)->where('user_id', $user)->orderBy('starting', 'DESC')->get();
        return response()->json(['data'=>$availiblitiy]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
