<?php

namespace App\Http\Controllers;

use App\Models\rvs;
use App\Models\Image;
use App\Models\destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Storage;

class RvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rvs = rvs::all();
        return view('rvs.index', compact('rvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idEdit         = false;
        $destination    = destination::all();
        return view('rvs.create', compact('idEdit', 'destination'));
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
        'name'          =>  'required',
        'price'         =>  'required',
        'des_id'        =>  'required',
        'image'         =>  'required',
        'slug'          =>  'required',
        'short_desc'    =>  'required',
        'desc'          =>  'required',
        'featured'      =>  'required',
        ]);
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        if($request->image)
        {
            $input['image'] = Storage::disk('uploads')->putFile('', $request->image);
        }
        unset($input['featured']);
        $rvs = rvs::create($input);
        if ($request->featured) {
            foreach ($request->featured as $value) {
                $image = new Image;
                $image->url           = Storage::disk('uploads')->putFile('', $value);
                $image->refrence_id   = $rvs->id;
                $image->save();
            }
        }
        return redirect()->route('rvs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idEdit = true;
        $rvs            = rvs::with('Image')->where('id', $id)->get();
        $destination    = destination::all();
        return view('rvs.create', compact('idEdit', 'rvs', 'destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rvs $rv)
    {
        $input  = $request->all();
        $input['user_id'] = Auth::user()->id;
        if($request->image)
        {
            Storage::disk('uploads')->delete($request->image);
            $input['image'] = Storage::disk('uploads')->putFile('', $request->image);
        }
        unset($input['featured']);
        $rv->update($input);
        Image::where('refrence_id', $rv->id)->delete();
        if ($request->featured) {
            foreach ($request->featured as $value) {
                Storage::disk('uploads')->delete($value);
                $image = new Image;
                $image->url           = Storage::disk('uploads')->putFile('', $value);
                $image->refrence_id   = $rv->id;
                $image->save();
            }
        }
        return redirect()->route('rvs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(rvs $rv)
    {
        Storage::disk('uploads')->delete($rv->image);
        Image::where('refrence_id', $rv->id)->delete();
        $rv->delete();
        return redirect()->route('rvs.index');
    }
}
