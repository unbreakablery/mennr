@extends('layout/master')
@push('styles')
<link href="{{ asset('css/signup.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Signup form section start-->
<section class="signup-form-section">
  <div class="container">
    <div class="row">
      <div class="col-12 py-5 signup-container">
        <h1 class="text-center mb-4">Awesome!<br />
          Just a few more steps</h1>
        <p class="text-center mb-2">Step 2 of 3</p>
        <h2 class="text-center pb-5">Set up your account</h2>
        <form>
          <div class="row g-3 py-4">
            <div class="col-sm-6 mb-2">
              <label for="FullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="FullName" placeholder="" value="" required="">
            </div>

            <div class="col-sm-6 mb-2">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="jeremy.renner@mail.com">
            </div>


            <div class="col-sm-6 mb-2">
              <label for="password" class="form-label">Create Your Password</label>
              <div class="password-input"><input type="password" class="form-control" id="password" placeholder=""><span class="eye-icon"><img src="{{ asset('/images/eye.svg') }}" width="20" /></span>
              </div>
            </div>

            <div class="col-sm-6 mb-2">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" placeholder="" required="">
            </div>


            <div class="col-12 mb-2">
              <label for="business-name" class="form-label">Business Name</label>
              <input type="text" class="form-control" id="business-name" placeholder="" required="">
            </div>

            <div class="col-sm-6 mb-2">
              <label for="business-type" class="form-label">Business Type</label>
              <select class="form-select" id="business-type" required="">
                <option value="">Select</option>
                <option>Private</option>
                <option>Public</option>
              </select>
            </div>

            <div class="col-sm-6 mb-2">
              <label for="number-employees" class="form-label">Number of Employees</label>
              <select class="form-select" id="number-employees" required="">
                <option value="">Select</option>
                <option>0-50</option>
                <option>50-100</option>
                <option>100-500</option>
              </select>
            </div>



            <button class="w-100 btn btn-primary btn-lg" type="submit">Start your 7-days free trial</button>
        </form>


      </div>
    </div>
  </div>
</section>
<!-- Signup form section end-->
@endsection
@push('footer-scripts')
@endpush