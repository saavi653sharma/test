@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-success">
        <h4>Payment Successful!</h4>
        <p>Thank you for your purchase. Your payment was processed successfully.</p>
        
        @if(session('payment_intent'))
            <div class="mt-3">
                <p>Payment ID: {{ session('payment_intent') }}</p>
            </div>
        @endif
        
        <a href="/" class="btn btn-primary">Return Home</a>
    </div>
</div>
@endsection