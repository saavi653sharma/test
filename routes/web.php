<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/create-payment-intent', [StripeController::class, 'createPaymentIntent'])->name('payment.intent');
Route::get('/payment-success', [StripeController::class, 'success'])->name('payment.success');
Route::post('/stripe/webhook', [StripeController::class, 'handleWebhook']);

Route::get('/payment', function () {
    return view('payments.checkout');
});
Route::post('/stripe', [StripeController::class, 'handlePost'])->name('stripe.post');
