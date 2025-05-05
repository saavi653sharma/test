<form action="{{ route('stripe.post') }}" method="POST">
    @csrf
    <script src="https://js.stripe.com/v3/"></script>
    <input type="text" name="amount" placeholder="Enter amount">
    <div id="card-element"></div>
    <button type="submit">Pay</button>
</form>
