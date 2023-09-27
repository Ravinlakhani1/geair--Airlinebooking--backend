<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home');
    }

    public function booking()
    {
        return view('web.booking');
    }

    public function book(Request $request,$id)
    {
        $pessenger_count =$request->get('p') ?? 1;
        $discunt = 0;
        $flight = Flight::find($id);
        $booking_total = $flight->price * $pessenger_count;
        $tax_total = ($booking_total * 7) / 100;
        $sub_total = $booking_total + $tax_total;
        $total = $sub_total - $discunt;


        return view('web.book', compact('flight','pessenger_count','booking_total','tax_total','sub_total','total'));
    }
}
