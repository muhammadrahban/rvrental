<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination = destination::all();
        return view('Destinations.index', compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idEdit = false;
        return view('Destinations.create', compact('idEdit'));
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
            'featured'      =>  'required',
        ]);
        $input = $request->all();
        if($request->featured)
        {
            $input['image']  = Storage::disk('uploads')->putFile('', $request->featured);
        }
        destination::create($input);
        return redirect()->route('destination.index');
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
        $destination = destination::where('id', $id)->get();
        return view('Destinations.create', compact('idEdit', 'destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, destination $destination)
    {
        $request->validate([
            'name'          =>  'required',
        ]);

        $input = $request->all();
        if($request->featured)
        {
            Storage::disk('uploads')->delete($request->featured);
            $input['image']    = Storage::disk('uploads')->putFile('', $request->featured);
        }

        $destination->update($input);
        return redirect()->route('destination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(destination $destination)
    {
        if ($destination->featured) {
            Storage::disk('uploads')->delete($destination->featured);
        }
        $destination->delete();
        return redirect()->route('destination.index');
    }
}
