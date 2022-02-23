<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request){
        dd($request->all());
        $avalibilty = $request->avalibilty;
        $course = $request->course;
        $user = $request->user;
    }
}
