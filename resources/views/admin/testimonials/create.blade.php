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
      <li class="breadcrumb-item"><a href="#">Add Testimonial</a></li>
    </ol>
  </nav>
</div>

<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        {!! Form::open(['route' => ['testimonials.store'], 'enctype' => 'multipart/form-data']) !!}
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </div>
        @endif
        @if (session()->has('message'))
          <div class="alert alert-dismissible" style="color: red">
            {{ session('message') }}
          </div>
        @endif

        <div class="row mb-4">
          <div class="col-lg-12 col-sm-6">
            <div class="mb-4">
              <label for="name" class="my-1 me-2" for="country">Page</label>
              {{ form::select('page_title', [
                                'home' => 'Home', 
                                'Appointment and Booking' => 'Appointment and Booking', 
                                'Billing and Payments' => 'Billing and Payments', 
                                'Business Management' => 'Business Management', 
                                'Marketing and Sales' => 'Marketing and Sales', 
                                'Pricing' => 'Careers',
                                'Blog' => 'Blog',
                                'Testimonial' => 'Testimonial',
                              ], '', ['class' => 'form-control form-select']) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name">Author Name<span class="text-danger">*</span></label>
              {{ form::text('author_name', '', ['class' => 'form-control', 'required' => true]) }}
            </div>
            <div class="mb-4">
              <label for="name">Author Role</label>
              {{ form::text('author_role', '', ['class' => 'form-control']) }}
            </div>
            <div class="mb-4">
              <label for="name">Author Designation</label>
              {{ form::text('author_designation', '', ['class' => 'form-control', 'placeholder' => '']) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name">Comment</label>
              {{ form::textarea('comment', '', ['class' => 'form-control', 'id' => 'comment', 'rows' => '10']) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name" class="form-label">Author Image</label>
              {!! Form::file('author_image', ['class' => 'form-control', 'id' =>' file']) !!}
            </div>

          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name" class="form-label">Author Logo</label>
              {!! Form::file('author_logo', ['class' => 'form-control', 'id'=>'file']) !!}
            </div>
          </div>
          {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')
<script>
  ClassicEditor
    .create(document.querySelector('#comment'))
    .catch(error => {
        console.error(error);
    });
</script>
@endpush