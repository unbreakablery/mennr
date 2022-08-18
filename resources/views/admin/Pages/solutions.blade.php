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
      <li class="breadcrumb-item"><a href="#">Solutions Page</a></li>
    </ol>
  </nav>
</div>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if (session()->has($msg))
    <div id="flash-message" class="alert alert-{{ $msg }}" role="alert">
      {{ session($msg) }}
    </div>
  @endif
@endforeach
<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        {!! Form::open(['route' => 'page.create', 'enctype' => 'multipart/form-data']) !!}
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </div>
        @endif
        <div class="row mb-4">
          <div class="col-lg-12 col-sm-6">
            <div class="mb-3">
              <label for="name">Title<span class="text-danger">*</span></label>
              {!! Form::text('title', 'solutions', ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
            </div>
          </div>

          <div class="col-lg-6 col-sm-6">
            <label class="text-success w-100 mt-4">Posts associated with this page</label>
            <ul style="list-style: decimal;">
            @foreach ($posts as $post)
              <li class="text-info">
                <a href="posts/{{ $post->id }}/edit" target="_blank">{{ $post->title }}</a>
              </li>
            @endforeach
            </ul>
          </div>
          
          <!-- {!! Form::submit('Save', ['class'=> 'btn btn-primary']) !!} -->
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')
@endpush