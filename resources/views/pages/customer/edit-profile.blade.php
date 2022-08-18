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

    <div class="row">

      @include('layout.customer-sidebar')

      <div class="col-lg-9 col-md-9">

        <h3>Edit Profile Details</h3>

        <div class="tm-signup-form-wrap">

          @include('error')

          {!! Form::open(['route' => ['customer.dashboard.update-profile'], 'enctype' => 'multipart/form-data']) !!}

          <div class="mb-3">
            {!! Form::label('name', 'Your Name', ['class' => 'form-label'], false) !!}
            {{ Form::text('name', auth()->user()->name ?? '-', ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Your Name', 'required' => 'required']) }}
            @error('name')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            {!! Form::label('email', 'Your Email', ['class' => 'form-label'], false) !!}
            {{ Form::email('email', auth()->user()->email ?? '-', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Your Email', 'required' => 'required']) }}
            @error('email')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            {!! Form::label('mobile', 'Your Phone Number', ['class' => 'form-label'], false) !!}
            {{ Form::text('mobile', auth()->user()->mobile ?? '-', ['class' => 'form-control', 'id' => 'mobile', 'placeholder' => 'Your Phone Number', 'required' => 'required']) }}
            @error('mobile')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            {!! Form::label('company', 'Compnay Name', ['class' => 'form-label'], false) !!}
            {{ Form::text('company', auth()->user()->company ?? '-', ['class' => 'form-control', 'id' => 'company', 'placeholder' => 'Compnay Name', 'required' => 'required']) }}
            @error('company')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            {!! Form::label('business_type', 'Business Type', ['class' => 'form-label'], false) !!}
            {{ Form::select('business_type', ['' => 'Business Type', 'Private' => 'Private', 'Public' => 'Public'], auth()->user()->business_type ?? '-', ['class' => 'form-control', 'id' => 'business_type', 'aria-label' => 'Business Type', 'required' => 'required']) }}
            @error('business_type')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            {!! Form::label('location', 'Your Location', ['class' => 'form-label'], false) !!}
            {{ Form::text('location', auth()->user()->location ?? '-', ['class' => 'form-control', 'id' => 'location', 'placeholder' => 'Your Location', 'required' => 'required']) }}
            @error('location')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            {!! Form::label('locations_count', 'Number of locations', ['class' => 'form-label'], false) !!}
            {{ Form::select('locations_count', ['' => 'Select number of locations', '0-5' => '0-5', '5-10' => '5-10', '10-50' => '10-50'], auth()->user()->locations_count ?? '-', ['class' => 'form-control', 'id' => 'locations_count', 'aria-label' => 'Number of locations', 'required' => 'required']) }}
            @error('locations_count')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            {!! Form::label('employees_count', 'Number of Employees', ['class' => 'form-label'], false) !!}
            {{ Form::select('employees_count', ['' => 'Number of Employees', '0-50' => '0-50', '50-100' => '50-100', '100-500' => '100-500'], auth()->user()->employees_count ?? '-', ['class' => 'form-control', 'id' => 'employees_count', 'aria-label' => 'Number of Employees', 'required' => 'required']) }}
            @error('employees_count')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>

          <a class="btn btn-primary" href="{{ route('customer.dashboard') }}">{{ __('Back') }}</a>

          {{ Form::close() }}
        </div>

      </div>
    </div>

  </section>
@endsection
@push('footer-scripts')
@endpush
