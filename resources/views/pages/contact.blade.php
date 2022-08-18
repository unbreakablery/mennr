@extends('layout/master')

@push('styles')
  <link href="{{ asset('css/contact.css') }}" rel="stylesheet" />
@endpush

@section('content')
  <!-- Hero section start-->
  <section class="contact-hero-main">
    <div class="container">
      <div class="text-center">
        <div class="row">
          <div class="col-lg-12">
            <p>Contact us</p>
            <h1 class="mb-3">Need to get in <br>touch?</h1>
            <p class="mb-3">{!! $contact['description'] !!}</p>
            <p>Alternatively you can call us : <br> <span>{!! $contact['phone'] !!}</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end-->

  <!-- contact form section start-->
  <section class="contact-form-section">
    <div class="container">
      <div class="row">
        <div class="col-12 py-5 contact-container">
          <h2 class="text-center mb-5">Contact Form</h2>
          @include('error')
          <form id="contact-form" action="{{ route('sendContact') }}" method="post" class="tm-contact-form">
            <div class="row g-3">
              @csrf
              <div class="col-sm-6 mb-2">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" id="firstName" name="first_name" class="form-control" placeholder="First Name"
                  required="" />
                @if ($errors->has('first_name'))
                  <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
              </div>
              <div class="col-sm-6 mb-2">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name"
                  required="" />
                @if ($errors->has('last_name'))
                  <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
              </div>

              <div class="col-12 mb-2">
                <label for="contact_email" class="form-label">Email Address</label>
                <input type="text" id="contact_email" name="email" class="form-control" placeholder="Your Email"
                  required="" />
                @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>

              <div class="col-12 mb-2">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone"
                  required="" />
                @if ($errors->has('phone'))
                  <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
              </div>

              <div class="col-12 mb-2">
                <label for="business-type" class="form-label">Business Type</label>
                <select class="form-select" name="business_type" id="business-type" required="">
                  <option value="">Select</option>
                  <option>Private</option>
                  <option>Public</option>
                </select>
                @if ($errors->has('business_type'))
                  <span class="text-danger">{{ $errors->first('business_type') }}</span>
                @endif
              </div>

              <div class="col-12 mb-2">
                <label for="number-employees" class="form-label">Number of Employees</label>
                <select class="form-select" name="employees_count" id="number-employees" required="">
                  <option value="">Select</option>
                  <option>0-50</option>
                  <option>50-100</option>
                  <option>100-500</option>
                </select>
                @if ($errors->has('employees_count'))
                  <span class="text-danger">{{ $errors->first('employees_count') }}</span>
                @endif
              </div>

              <div class="col-12 mb-2">
                <label for="business-name" class="form-label">Business Name</label>
                <input type="text" name="business_name" class="form-control" id="business-name" placeholder=""
                  required="">
                @if ($errors->has('business_name'))
                  <span class="text-danger">{{ $errors->first('business_name') }}</span>
                @endif
              </div>

              <div class="col-12 mb-2">
                <label for="type-query" class="form-label">What systems are you currently using?</label>
                <select class="form-select" name="query_type" id="type-query" required="">
                  <option value="">Select</option>
                  <option>Management</option>
                  <option>Marketing</option>
                  <option>Online Selling</option>
                </select>
                @if ($errors->has('query_type'))
                  <span class="text-danger">{{ $errors->first('query_type') }}</span>
                @endif
              </div>

              <div class="col-12 mb-4">
                <label for="ask-us" class="form-label">What would you like to ask us?</label>
                <textarea rows="5" id="ask-us" name="message" class="form-control" placeholder="Message..."
                  required=""></textarea>
                @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
              </div>

              <div class="form-group mb-0">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- contact form section end-->

  <!-- Ready to See Start -->
  <section class="ready-to-see-section py-5">
    <div class="container">
      <div class="ready-to-see-box">
        <h2>Ready to see how the Mennr <br>Software can help your business <br>to grow?</h2>
        <div class="get-a-free-demo-btn">
          <a href="{{ route('get_free_demo.index') }}"> GET A FREE DEMO</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Ready to See End -->
@endsection

@push('footer-script')
@endpush
