@extends('admin.layout.layout')
@section('content')

<div class="py-4">
  <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
      <li class="breadcrumb-item">
        <a href="{{ '/dashboard' }}">
          <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
        </a>
      </li>
      <li class="breadcrumb-item"><a href="#">Get A Free Demo</a></li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Edit Applicant</h1>
    </div>
    <div>
      <a href="{{ route('gafd.list') }}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
        <svg class="icon icon-xxs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
        &nbsp;Back
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        {!! Form::open(['route' => ['gafd.update', $applicant->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </div>
        @endif
        @include('error')

        {{ Form::hidden('applicant_id', $applicant->id) }}

        <div class="row mt-4 mb-4">
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="first_name">First Name<span class="text-danger">*</span></label>
              {{ form::text('first_name', $applicant->first_name, ['class' => 'form-control', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="last_name">List Name<span class="text-danger">*</span></label>
              {{ form::text('last_name', $applicant->last_name, ['class' => 'form-control', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="email">Email<span class="text-danger">*</span></label>
              {{ form::email('email', $applicant->email, ['class' => 'form-control', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="phone">Phone<span class="text-danger">*</span></label>
              {{ form::tel('phone', $applicant->phone, ['class' => 'form-control', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="company_name">Business Name<span class="text-danger">*</span></label>
              {{ form::text('business_name', $applicant->business_name, ['class' => 'form-control', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="business_type" class="my-1 me-2">Business Type<span class="text-danger">*</span></label>
              {{ form::select('business_type', [
                                '' => 'Select',
                                'private' => 'Private',
                                'public' => 'Public',
                              ], $applicant->business_type, ['class' => 'form-control form-select', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="employees" class="my-1 me-2">Number of Employees<span class="text-danger">*</span></label>
              {{ form::select('employees', [
                '' => 'Select',
                                '0-49' => '0-49 Employees',
                                '50-99' => '50-99 Employees',
                                '100-500' => '100-500 Employees',
                              ], $applicant->employees, ['class' => 'form-control form-select', 'required' => true]) }}
            </div>
          </div>

          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="status" class="my-1 me-2">Status<span class="text-danger">*</span></label>
              {{ form::select('status', [
                                '' => 'Select',
                                'pending' => 'Pending',
                                'canceled' => 'Canceled',
                                'accepted' => 'Accepted',
                                'rejected' => 'Rejected',
                                'completed' => 'Completed',
                              ], $applicant->status, ['class' => 'form-control form-select', 'required' => true]) }}
            </div>
          </div>
          
          {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')
@endpush