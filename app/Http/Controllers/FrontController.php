<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\course;
use App\Models\availability;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function course_detail($id = null)
    {
        if ($id != null) {
            $courses = course::with('availability', 'desc')->where('id', $id)->get();
            // return $courses;
            return view('coursedetails', compact('courses'));
        }
    }

    public function course_search(Request $request)
    {
        $course     = $request->has('course') ? ($request->course != '0' ? $request->course : NULL) : NULL;
        $location   = $request->has('location') ? $request->location : NULL;

        $search = availability::with('course', 'user')
            ->when($course != null, function($c) use ($course){
                return $c->whereHas('course', function($query) use ($course){
                    return $query->where('id', $course);
                });
            })->when($location != null, function ($query) use($location){
                return $query->where('location', 'LIKE', '%'.$location.'%');
            })
            ->where('starting' , '>=' , Carbon::now()->toDateTimeString())->get()->groupBy(['location','course_id','user_id']);

        // return $search;
        $course = course::all();
        return view('search', compact('search', 'course'));
    }
}
