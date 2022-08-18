@extends('layout/master-no-header')
@push('styles')
<link href="{{ asset('css/get-demo.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Request Main Section Start -->
<section class="request-main-section">
  <div class="container-fluid px-0">
    <div class="row g-0">
      <!-- Request Left Section Start -->
      <div class="col-md-6 col-lg-7 request-left-section">
        <div class="d-flex align-items-center">
          <img class="get-top-img" src="images/get-top-img.png" alt="" />
          <img class="get-bottom-img" src="images/get-bottom-img.png" alt="" />
          <img class="get-bottom-right-img" src="images/get-bottom-right-img.png" alt="" />
          <div class="w-100  d-flex flex-column">
            <div class="row g-0">
              <div class="col-10 col-lg-10 mx-auto">
                <div class="logo mt-5 mb-5 mb-md-0">
                  <a class="d-flex" href="index.html" title="Mennr"><img src="images/logo-inverse.png" alt="Mennr"></a>
                </div>
              </div>
            </div>
            <div class="row g-0">
              <div class="col-10 col-lg-10 mx-auto">
                <h1>Everything you need to grow your SaaS business</h1>
                <p>A complete toolkit for scaling your business at a fraction of the<br /> price of other tools</p>

                <div class="my-5">
                  <div class="get-demo-slider">
                    <div>
                      <img class="w-100" src="images/demo-mobile-img.png" alt="">
                    </div>
                    <div>
                      <img class="w-100" src="images/demo-mobile-img.png" alt="">
                    </div>
                    <div>
                      <img class="w-100" src="images/demo-mobile-img.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="justify-content-end d-flex py-5">
                  <a href="{{ route('solutions') }}" class="btn btn-light btn-lg">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Request Left Section End -->

      <!-- Request Right Section Start -->
      <div class="col-md-6 col-lg-5 d-flex">
        <div class="container  py-4">
          <div class="row g-0">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="request-right-section">
                <ul class="menu-list mb-5">
                  <li><a href="/">Back to homepage</a></li>
                  @auth
                  <li><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                  @else
                  <li><a href="{{ route('customer.loginForm') }}">Login</a></li>
                  @endauth
                </ul>
                <div class="request-container">
                  <h2 class="text-black">Let’s schedule your demo</h2>
                  <p class="mb-5">Kindly fill in your info and choose an option to either have our sales team reach out to you or view the demo.</p>
                  
                  <form action="{{ route('get_free_demo.submit') }}" method="post">
                    @csrf
                    <div class="row g-3">
                      @include('error')
                      <div class="col-sm-12 mb-2">
                        <label for="firstName" class="form-label">First name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="first_name" id="firstName" placeholder="" value="" required="">
                      </div>

                      <div class="col-sm-12 mb-2">
                        <label for="lastName" class="form-label">Last name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="last_name" id="lastName" placeholder="" value="" required="">
                      </div>


                      <div class="col-12 mb-2">
                        <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="" required="">
                      </div>

                      <div class="col-12 mb-2">
                        <label for="phone" class="form-label">Phone Number<span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="" required="">
                      </div>

                      <div class="col-12 mb-2">
                        <p class="text-color-change">For a more tailored demo, please tell us about your company (optional)</p>
                      </div>

                      <div class="col-12 mb-2">
                        <label for="business-type" class="form-label">Business Type</label>
                        <select class="form-select" name="business_type" id="business-type">
                          <option value="">Select</option>
                          <option>Private</option>
                          <option>Public</option>
                        </select>
                      </div>

                      <div class="col-12 mb-2">
                        <label for="number-employees" class="form-label">Number of Employees</label>
                        <select class="form-select" name="employees" id="number-employees">
                          <option value="">Select</option>
                          <option>0-49</option>
                          <option>50-99</option>
                          <option>100-500</option>
                        </select>
                      </div>

                      <div class="col-12 mb-2">
                        <label for="business-name" class="form-label">Business Name</label>
                        <input type="text" class="form-control" name="business_name" id="business-name" placeholder="">
                      </div>

                      <div class="col-12 mt-5">
                        <button class="w-100 btn btn-primary mb-3" type="submit">Book a Demo Session</button>
                        <a href="{{ Auth::user() ? route('customer.dashboard') : route('customer.signup') }}" class="w-100 btn btn-outline-secondary">Proceed to view Demo</a>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Request Right Section End -->
    </div>
  </div>
</section>
<!-- Request Main Section End -->
@endsection

@push('footer-scripts')
<script type="text/javascript">
  $('.get-demo-slider').slick({
    dots: true,
    arrows: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
</script>
@endpush