@extends('layout/master')
@push('styles')
  <link href="{{ asset('css/payment.css') }}" rel="stylesheet">
@endpush
@section('content')
  <!-- payment form section start-->
  <section class="payment-form-section">
    <div class="container">
      <div class="row">
        <div class="col-12 py-5 payment-container">
          <h1 class="text-center mb-4">Awesome!<br />
            Just a few more steps</h1>
          <p class="text-center mb-2">Step 3 of 3</p>
          <h2 class="text-center pb-5">Choose your mode of payment</h2>
          <div class="payment-accordion-section mx-auto">
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Credit Card
                    <div class="card-box">
                      <img src="{{ asset('images/visa-card.svg') }}" alt="Visa Card">
                      <img src="{{ asset('images/master-card.svg') }}" alt="Master Card">
                      <img src="{{ asset('images/american-express.svg') }}" alt="American Express">
                    </div>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <form class="row g-3" method="POST" action="{{ route('capture.payment') }}">
                      @csrf
                      <input type="hidden" name="plan_id" value="{{ $planDetails->id }}">
                      <div class="mb-1">
                        <label for="exampleName" class="form-label">Name on Card</label>
                        <input type="name" class="form-control" id="exampleName" placeholder="James May">
                      </div>
                      <div class="mb-1">
                        <label for="CardNumber" class="form-label">Card number</label>
                        <input type="number" class="form-control" id="CardNumber" placeholder="4012 8888 8888 1881">
                      </div>
                      <div class="col-12 col-sm-5">
                        <label for="ExpiryDate" class="form-label">Expiry date</label>
                        <input type="text" class="form-control" id="ExpiryDate" placeholder="MM/YY">
                      </div>
                      <div class="col-12 col-sm-4">
                        <label for="Cvv" class="form-label">CVV</label>
                        <input type="number" class="form-control" id="Cvv">
                      </div>
                      <button type="submit" class="btn btn-primary pay-btn mt-5">Pay</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <img width="80" src="{{ asset('images/paypal-card.svg') }}" alt="Paypal Card">
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the
                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
                    with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
                    can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <img width="50" src="{{ asset('images/skrill.svg') }}" alt="Skrill">
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the
                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
                    with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
                    can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- payment form section end-->
@endsection
@push('footer-scripts')
@endpush
