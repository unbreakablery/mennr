@extends('layout/master')
@section('content')
    <style>
    .payment-method {
        width: 40%;
    }
    .alert.parsley {
        margin-top: 5px;
        margin-bottom: 0px;
        padding: 10px 15px 10px 15px;
    }
    .check .alert{margin-top: 20px;}
    .credit-card-box .panel-title {
        display: inline;font-weight: bold;
    }
    .benefits .list-unstyled {
        padding-left: 16%;padding-top: 2%;
    }
    .benefits img {
        width: 20px;
        float: left;
        margin-right: 20px;
    }
    .benefits li h6 {text-align: left;}
    .success-image{
        width: 100px !important;display: block;
        margin-left: auto;margin-right: auto;
    }
    .payment-method .form-control::placeholder {
        color: #aab7c4 !important;
        font-size: 15px;
        font-weight: 430 !important;
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        opacity: 1;
    }
    .payment-method .form-control::-webkit-input-placeholder {
        color: #aab7c4 !important;
        font-size: 15px;
        font-weight: 430 !important;
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        opacity: 1;
}
.payment-method .form-control::-moz-placeholder {
        color: #aab7c4 !important;
        font-size: 15px;
        font-weight: 430 !important;
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        opacity: 1;
}
.payment-method .form-control::-ms-input-placeholder {
        color: #aab7c4 !important;
        font-size: 15px;
        font-weight: 430 !important;
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        opacity: 1;
}
    .paymentform-button {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        align-items: center;
        justify-content: flex-end;
        padding: 0.75rem;
        border-bottom-right-radius: calc(0.3rem - 1px);
        border-bottom-left-radius: calc(0.3rem - 1px);
    }
    .paymentform-button .btn-primary {
        color: #212529 !important;
        background-color: #FFDE59 !important;
        border: none !important;
    }
    .payment-description p {font-size: 11px;}
</style>
    <section class="section hero-section">
        <div class="payment-method">
            
            first_name : {{ $session_data['first_name'] }} <br>
            last_name  : {{ $session_data['last_name'] }} <br>
            phone_no    : {{ $session_data['phone_no'] }} <br>
            company_name : {{ $session_data['company_name'] }} <br>
            no_of_location : {{ $session_data['no_of_location'] }} <br>
            business_type : {{ $session_data['business_type'] }} <br>
            no_of_provider : {{ $session_data['no_of_provider'] }} <br>
            <br>
            <form action="{{ route('order-post') }}" method="post" id="payment-form" >
                @csrf
               @foreach (['success', 'danger'] as $msg)
                @if(session()->has($msg))
                  <div id="flash-message-subscription" class="alert alert-{{ $msg }}" role="alert">
                    {{ session($msg) }}
                  </div>
                @endif
              @endforeach
                <input type="text" name="card_holder_name" id="card-holder-name" class="form-control border-0  shadow-none antialiased" value="" placeholder="Name on Card" required="true">
                <br>
                <input type="email" name="email" id="email" class="form-control border-0  shadow-none antialiased" value="{{ $session_data['email_id'] }}" placeholder="Email " required="true">
                <br>
                <div class="form-group" id="product-group" hidden>
                    <input type="radio" name="plan" id="" value="price_1LIHQSCSFXbG5KdxwscXDHcq" checked="checked">
                    <span>$ 10.00</span>
                    <br>    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div id="card-element"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="payment-errors" id="card-errors" style="color: red;margin-top:10px;"></span>
                    </div>
                </div>
                <div class="payment-description mt-4">
                    
                </div>
                <div class='paymentform-button'>
                   
                    <button id="card-button" class='btn btn-primary'>Purchase</button>
                </div>
            </form>
        </div>
    </section>
        <!-- Request a free demo form section -->
    <section class="section form-section">
      <div class="section-cutout cutout-top-left  blue-bg"></div>
    
  
@endsection

@push('footer-scripts')
 <script>
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>',
            errorClass: 'has-error',
            successClass: 'has-success'
        };
    </script>
        
    <script src="http://parsleyjs.org/dist/parsley.js"></script>    
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '35px',
                backgroundColor: '#f8fafc',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4',
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        const stripe = Stripe('{{ env("STRIPE_KEY") }}', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const card = elements.create('card', { style: style }); // Create an instance of the card Element.

        card.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });


        // Handle form submission.
        
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            var card_name = document.getElementById('card-holder-name').value;

            stripe.createToken(card,{name: card_name}).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>
@endpush
