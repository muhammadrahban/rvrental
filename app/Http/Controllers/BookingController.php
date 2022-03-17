<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Auth;

class BookingController extends Controller
{
    public function index(){
        $bookings = booking::all();
        return view('Bookings.index', compact('bookings'));
    }

    public function booking(Request $request){
        $data = $request->validate([
            'vehicle_id'        => 'required|exists:rvs,id',
            'addon_id'          => 'required',
            'total_amount'      => 'required',
            'check_in'          => 'required|date',
            'check_out'         => 'required|date',
        ]);
        $data['add_on_id'] = json_encode(array_diff($request->addon_id, [0]));
        $data['user_id']   = Auth::user()->id;
        $data['booking_status'] = 'Pending';

        booking::create($data);
        return redirect()->back()->with('request_sent','Your request has been sent to the admin, we will notify you soon');
    }

    public function status(booking $booking,$status){

        $booking->update(['booking_status'=>$status]);
        return redirect()->back();
    }
}
