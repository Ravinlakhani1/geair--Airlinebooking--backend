<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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

            Session::flash('success', 'This is a message!');
            return redirect()->back();
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return redirect()->back();

        }
    }
}
