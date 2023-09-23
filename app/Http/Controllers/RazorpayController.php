<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;


class RazorpayController extends Controller
{
    public function index(){
        return view('payment');
    }

    public function payment(Request $request)
    {
        logger()->info('Payment');
        $input = $request->all();
        logger($input);
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        
        logger(json_encode($payment));

        if(count($input)  && !empty($input['razorpay_payment_id']))
        {
            try
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
                logger()->info(json_encode($response));
            }
            catch (\Exception $e)
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        \Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
