@extends('layout/master')
@push('styles')
  <link href="{{ asset('css/success.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- success box start-->
<section class="success-section">
  <div class="container">
    <div class="row">
      <div class="col-12 py-lg-5">
        <div class="success-container ">
          <div class="success-icon"><img src="images/profile-flag.png" class="w-100" alt="" /></div>
          <p class="thanks-text pb-2">{{ $message }}</p>
          <h2 class="text-center pb-3">We would be in touch!</h2>

          <p class="mt-3 pb-3">Your’re on the pathway to perfection<br /> & satisfaction!</p>
          <a class="mt-5 pb-4 d-inline-block" href="/">
            <img src="/images/blue-arrow.svg" width="60" alt="" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- success box end-->
@endsection
@push('footer-scripts')
@endpush