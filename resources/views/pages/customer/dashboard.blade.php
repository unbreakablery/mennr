@extends('layout/master')
@section('content')
  <!-- Hero section start-->
  <section class="page-hero-main">
    <div class="container">
      <div class="text-center">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="mb-3">Dashboard</h1>
            {{-- <p class="mb-0">Automated features used to simplify day-to-day operations, manage reports,<br /> Engage
              customers, analyse performance etc..</p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end-->
  <section class="container mb-3 mt-3">

    @include('error')

    <div class="row">
      
      @include('layout.customer-sidebar')

      <div class="col-lg-9 col-md-9">
        <dl class="row">
          <h3>Profile Details</h3>
          <dt class="col-sm-3">Name</dt>
          <dd class="col-sm-9">{{ auth()->user()->name ?? '-' }}</dd>

          <dt class="col-sm-3">Email</dt>
          <dd class="col-sm-9">{{ auth()->user()->email ?? '-' }}</dd>

          <dt class="col-sm-3">Phone</dt>
          <dd class="col-sm-9">{{ auth()->user()->mobile ?? '-' }}</dd>

          <dt class="col-sm-3">Company</dt>
          <dd class="col-sm-9">{{ auth()->user()->company ?? '-' }}</dd>

          <dt class="col-sm-3">Business Type</dt>
          <dd class="col-sm-9">{{ auth()->user()->business_type ?? '-' }}</dd>

          <dt class="col-sm-3">Number of Employees</dt>
          <dd class="col-sm-9">{{ auth()->user()->employees_count ?? '-' }}</dd>

          <dt class="col-sm-3 text-truncate">Location</dt>
          <dd class="col-sm-9">{{ auth()->user()->location ?? '-' }}</dd>

          <dt class="col-sm-3">Number of locations</dt>
          <dd class="col-sm-9">{{ auth()->user()->locations_count ?? '-' }}</dd>

        </dl>
      </div>
    </div>

  </section>
@endsection
@push('footer-scripts')
@endpush
