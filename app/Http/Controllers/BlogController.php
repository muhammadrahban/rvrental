<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Validator;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit         = false;
        $blog           = Blog::all();
        return view('blog.create', compact('isEdit', 'blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'title'             =>  'required',
        //     'image'             =>  'required',
        //     'slug'              =>  'required',
        //     'desc'              =>  'required',
        // ]);
        $data = $request->all();
        if(isset($request->image))
        {
            $data['img'] = Storage::disk('uploads')->putFile('', $request->image);
        }
        $blog = Blog::create($data);
        return redirect()->route('blog.index');
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
        $isEdit = true;
        $blog            = Blog::where('id', $id)->first();
        return view('blog.create', compact('isEdit', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // $request->validate([
        //     'title'              =>  'required',
        //     'image'             =>  'required',
        //     'slug'              =>  'required',
        //     'desc'              =>  'required',
        // ]);
        $data = $request->all();
        if($request->image)
        {
            Storage::disk('uploads')->delete($request->image);
            $data['image'] = Storage::disk('uploads')->putFile('', $request->image);
        }
        $blog->update($data);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Storage::disk('uploads')->delete($blog->image);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
