<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\Payment;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;


class RazorpayController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function payment(Request $request)
    {
        try {
            $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
            $response = $api->payment->fetch($request->razorpay_payment_id)->toArray();

            $paymen = Payment::where('payment_id', $response['id'])->first();
            if (!$paymen) {
                $paymen = new Payment();
            }
            $paymen->payment_id = $response['id'];
            $paymen->user_id = auth()->Id() ?? null;
            $paymen->contact = $response['contact'] ?? null;
            $paymen->email = $response['email'] ?? null;
            $paymen->amount = $response['amount'];
            $paymen->currency = $response['currency'];
            $paymen->status = $response['status'];
            $paymen->method = $response['method'];
            $paymen->raw_response = json_encode($response);
            $paymen->save();



            $ticket = new Ticket();
            $ticket->mobile = $request->mobile;
            $ticket->email = $request->email;
            $ticket->number_of_passengers = count($request->first_name);
            $ticket->flight_id = $request->flight_id;
            $ticket->payment_id = $paymen->id;
            $ticket->sub_total = $request->sub_total;
            $ticket->text = $request->text;
            $ticket->total = $request->total;
            $ticket->token = bin2hex(random_bytes(16));
            $ticket->save();

            foreach ($request->first_name as $key => $value) {
                $new = new Passenger();
                $new->first_name = $value;
                $new->last_name = $request->last_name[$key] ?? null;
                $new->gender = $request->gender[$key] ?? null;
                $new->ticket_id = $ticket->id;
                $new->save();
            }

            return redirect()->route('web.booked', ['token' => $ticket->token]);
        } catch (Exception $e) {
            dd($e->getMessage());
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
