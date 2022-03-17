<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\course;
use App\Models\availability;
use App\Models\destination;
use App\Models\rvs;
use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;

class FrontController extends Controller
{
    public function webLogin()
    {
        return view('web.login');
    }

    public function webRegister()
    {
        return view('web.register');
    }

    public function welcome()
    {
        $data = [
            'destinations'  => destination::all(),
        ];
        return view('web.welcome',$data);
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function about()
    {
        return view('web.about');
    }

    public function listRv($id)
    {
        $des   = destination::find($id);
        $rvs   = rvs::where('des_id',$id)->get();
        return view('web.list-rv', compact('rvs', 'des'));
    }

    public function myrvs()
    {
        $rvs   = rvs::where('user_id', Auth::user()->id)->get();
        return view('user_detail.my_rvs', compact('rvs'));
    }

    public function destinations()
    {
        $destinations   = destination::get();
        return view('user_detail.my_destinations', compact('destinations'));
    }


    public function rvs_search(Request $request)
    {
        $rvs = $request->destination;
        if (isset($request->destination)) {
            $rvs = rvs::with(['destination' => function($qq) use ($rvs){
                return $qq->where('name', 'LIKE', '%'.$rvs.'%');
            }])->get();
            // return $rvs;
        }else{
            $rvs = rvs::all();
        }
        return view('web.search', compact('rvs'));
    }

    public function RvDetail($id)
    {
        $rvs = rvs::with('Images')->where('id', $id)->first();
        // return $rvs;
        return view('web.detail', compact('rvs'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('web.blog', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::find($id);
        // return $blog;
        return view('web.blog-detail', compact('blog'));
    }

    public function affiliate_market()
    {
        return view('web.affiliate_market');
    }

    public function join_term()
    {
        return view('web.join_term');
    }
}
