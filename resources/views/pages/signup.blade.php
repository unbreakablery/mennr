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
          <h1 class="text-center mb-5">Awesome!<br />Just a few more steps</h1>
          <!-- <p class="text-center mb-2">Step 2 of 3</p> -->
          <h2 class="text-center  pb-5">Set up your account</h2>
          @include('error')

          {!! Form::open(['route' => ['customer.store'], 'enctype' => 'multipart/form-data']) !!}
          <div class="row g-3 py-4">
            <div class="col-sm-6 mb-2">
              <label for="name" class="form-label">Full Name<span class="text-danger">*</span></label>
              {{ Form::text('name', '', ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Your Name', 'required' => 'required']) }}
              @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-sm-6 mb-2">
              <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
              {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Your Email', 'required' => 'required']) }}
              @error('email')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-sm-6 mb-2">
              <label for="password" class="form-label">Create Your Password<span class="text-danger">*</span></label>
              <div class="password-input">
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password', 'required' => 'required']) }}
                @error('password')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <span class="eye-icon"><img src="images/eye.svg" width="20" /></span>
              </div>
            </div>

            <div class="col-sm-6 mb-2">
              <label for="mobile" class="form-label">Phone Number<span class="text-danger">*</span></label>
              {{ Form::tel('mobile', '', ['class' => 'form-control', 'id' => 'mobile', 'placeholder' => 'Your Phone Number', 'required' => 'required']) }}
              @error('mobile')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-12 mb-2">
              <label for="business-name" class="form-label">Business Name<span class="text-danger">*</span></label>
              {{ Form::text('company', '', ['class' => 'form-control', 'id' => 'company', 'placeholder' => 'Business Name', 'required' => 'required']) }}
              @error('company')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-sm-6 mb-2">
              <label for="business-type" class="form-label">Business Type<span class="text-danger">*</span></label>
              {{ Form::select('business_type', ['' => 'Select', 'private' => 'Private', 'public' => 'Public'], null, ['class' => 'form-select', 'id' => 'business-type', 'aria-label' => 'Business Type', 'required' => 'required']) }}
              @error('business_type')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-sm-6 mb-2">
              <label for="number-employees" class="form-label">Number of Employees<span
                  class="text-danger">*</span></label>
              {{ Form::select('employees_count', ['' => 'Select', '0-49' => '0-49', '50-99' => '50-99', '100-500' => '100-500'], null, ['class' => 'form-select', 'id' => 'number-employees', 'aria-label' => 'Number of Employees', 'required' => 'required']) }}
              @error('employees_count')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <button class="w-100 btn btn-primary btn-lg" type="submit">Start your 7-days free trial</button>

            <div class="mb-3 mt-2">
              Already Registered User? Click here to <a href="{{ route('customer.loginForm') }}">Sign In</a>
            </div>
            </form>
          </div>
        </div>
      </div>
  </section>
  <!-- Signup form section end-->
@endsection
@push('footer-scripts')
<script>
  $(document).ready(function() {
    $('.eye-icon').click(function () {
      $('#password').attr('type', $('#password').attr('type') === 'password' ? 'text' : 'password');
    });
  });
</script>
@endpush
