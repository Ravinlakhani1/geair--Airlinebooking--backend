<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function book(Request $request, $id)
    {
        $pessenger_count = $request->get('p') ?? 1;
        $discunt = 0;
        $flight = Flight::find($id);
        $booking_total = $flight->price * $pessenger_count;
        $tax_total = ($booking_total * 7) / 100;
        $sub_total = $booking_total + $tax_total;
        $total = $sub_total - $discunt;


        return view('web.book', compact('flight', 'pessenger_count', 'booking_total', 'tax_total', 'sub_total', 'total'));
    }


    public function booked($token)
    {
        $ticket = Ticket::where('token', $token)->with('flight')->first();

        return view('web.booked', compact('ticket'));
    }

    public function ticket($id)
    {

        $ticket = Ticket::where('token', $id)->first();


        $origin_city = $ticket->flight->origin->city->name;
        $origin_airport = $ticket->flight->origin->name;
        $departure_time = $ticket->flight->departure_time;

        $destination_city = $ticket->flight->destination->city->name;
        $destination_airport = $ticket->flight->destination->name;
        $arrival_time = $ticket->flight->arrival_time;

        $passengers = $ticket->passenger->toArray();

        $sub_total = $ticket->sub_total;
        $text = $ticket->text;
        $total = $ticket->total;

        $data = [
            'origin_city' => $origin_city,
            'origin_airport' => $origin_airport,
            'departure_time' => $departure_time,
            'destination_city' => $destination_city,
            'destination_airport' => $destination_airport,
            'arrival_time' => $arrival_time,
            'passengers' => $passengers,
            'sub_total' => $sub_total,
            'text' => $text,
            'total' => $total,
        ];

        // dd($data);
        $pdf = Pdf::loadView('web.ticket', $data);
        return $pdf->download('ticket.pdf');
    }
}
