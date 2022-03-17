<?php

namespace App\Http\Controllers;

use App\Models\rvs;
use App\Models\Image;
use App\Models\destination;
use App\Models\rvaddon;
use App\Models\rvservices;
use App\Models\rvattribute;
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
        $isEdit         = false;
        $destination    = destination::all();
        return view('rvs.create', compact('isEdit', 'destination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'              =>  'required',
            'price'             =>  'required',
            'des_id'            =>  'required',
            'image'             =>  'required',
            'slug'              =>  'required',
            'short_desc'        =>  'required',
            'desc'              =>  'required',
            'featured'          =>  'required',
            'price_night'       =>  'required',
            'price_week'        =>  'required',
            'price_month'       =>  'required',
            'booking_deposite'  =>  'nullable',
            'security_deposite' =>  'nullable',
            'balance_due'       =>  'nullable',

        ]);
        // $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        if($request->image)
        {
            $data['image'] = Storage::disk('uploads')->putFile('', $request->image);
        }
        $rvs = rvs::create($data);
        if ($request->featured) {
            foreach ($request->featured as $value) {
                $image = new Image;
                $image->url           = Storage::disk('uploads')->putFile('', $value);
                $image->refrence_id   = $rvs->id;
                $image->save();
            }
        }
        if ($request->addon_text) {
            foreach ($request->addon_text as $key => $value) {
                $rv_addon = [
                    'rv_id'     => $rvs->id,
                    'text'      => $value,
                    'amount'    => $request->addon_amount[$key],
                ];
                rvaddon::create($rv_addon);
            }
        }
        if ($request->service_name) {
            foreach ($request->service_name as $key => $service_name) {
                $rv_service = [
                    'rv_id'             => $rvs->id,
                    'service_name'      => $service_name,
                    'service_amount'    => $request->service_amount[$key],
                    'type'              => $request->service_type[$key],
                ];
                rvservices::create($rv_service);
            }
        }
        if ($request->heading) {
            foreach ($request->heading as $key => $value) {
                foreach ($value as $m_key => $items) {
                    $rv_attribute = [
                        'rv_id'     => $rvs->id,
                        'heading'   => $items,
                        'entity'    => $request->entity[$key][$m_key],
                        'value'     => $request->value[$key][$m_key] ?? '',
                        'type'      => $key
                    ];
                    rvattribute::create($rv_attribute);
                }
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
        $isEdit = true;
        $rvs            = rvs::with('Images')->where('id', $id)->first();
        $destination    = destination::all();
        return view('rvs.create', compact('isEdit', 'rvs', 'destination'));
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
        $data = $request->validate([
            'name'              =>  'required',
            'price'             =>  'required',
            'des_id'            =>  'required',
            'image'             =>  'nullable',
            'slug'              =>  'required',
            'short_desc'        =>  'required',
            'desc'              =>  'required',
            'featured'          =>  'nullable',
            'price_night'       =>  'required',
            'price_week'        =>  'required',
            'price_month'       =>  'required',
            'booking_deposite'  =>  'nullable',
            'security_deposite' =>  'nullable',
            'balance_due'       =>  'nullable',

        ]);
        $data['user_id'] = Auth::user()->id;
        if($request->image)
        {
            Storage::disk('uploads')->delete($request->image);
            $data['image'] = Storage::disk('uploads')->putFile('', $request->image);
        }
        $rv->update($data);

        if ($request->featured) {
            // $images_store = Image::where('refrence_id', $rv->id)->get();
            // foreach ($images_store as $key => $img) {
            //     Storage::disk('uploads')->delete($img->url);
            //     $img->delete();
            // }
            foreach ($request->featured as $value) {
                Storage::disk('uploads')->delete($value);
                $image = new Image;
                $image->url           = Storage::disk('uploads')->putFile('', $value);
                $image->refrence_id   = $rv->id;
                $image->save();
            }
        }
        if ($request->addon_text) {
            rvaddon::where('rv_id',$rv->id)->delete();
            foreach ($request->addon_text as $key => $value) {
                $rv_addon = [
                    'rv_id'     => $rv->id,
                    'text'      => $value,
                    'amount'    => $request->addon_amount[$key],
                ];
                rvaddon::create($rv_addon);
            }
        }
        if ($request->service_name) {
            rvservices::where('rv_id',$rv->id)->delete();
            foreach ($request->service_name as $key => $service_name) {
                $rv_service = [
                    'rv_id'             => $rv->id,
                    'service_name'      => $service_name,
                    'service_amount'    => $request->service_amount[$key],
                    'type'              => $request->service_type[$key],
                ];
                rvservices::create($rv_service);
            }
        }
        if ($request->heading) {
            rvattribute::where('rv_id',$rv->id)->delete();

            foreach ($request->heading as $key => $value) {
                foreach ($value as $m_key => $items) {
                    $rv_attribute = [
                        'rv_id'     => $rv->id,
                        'heading'   => $items,
                        'entity'    => $request->entity[$key][$m_key],
                        'value'     => $request->value[$key][$m_key] ?? '',
                        'type'      => $key
                    ];
                    rvattribute::create($rv_attribute);
                }
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rvApprove(rvs $rv)
    {
        $rv->update(['approve'=>1]);
        return redirect()->back()->with('approved_msg','Rv has been Approved Successfully');
    }

}


