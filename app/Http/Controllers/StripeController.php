<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\PaymentIntent;


class StripeController extends Controller
{

public function handlePost(Request $request)
{
    Stripe::setApiKey(config('services.stripe.secret'));

    Charge::create([
        'amount' => $request->amount * 100, // Amount in cents
        'currency' => 'usd',
        'source' => $request->stripeToken,
        'description' => 'Test Payment',
    ]);

    return back()->with('success', 'Payment successful!');
}

}