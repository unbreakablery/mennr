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
      <li class="breadcrumb-item"><a href="#">Plans</a></li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-">
      <h1 class="h4">Edit Plan - <span class="{{ UtilsHelper::getPlanTypeTextClass($plan->type)}}">{{ $plan->title }}</span></h1> 
    </div>
    <div>
      <a href="{{ route('plans.index') }}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
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
        {!! Form::open(['route' => ['plans.update', $plan->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </div>
        @endif
        @include('error')

        {{ Form::hidden('plan_id', $plan->id) }}

        <div class="row mt-4 mb-4">
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name" class="my-1 me-2" for="country">Plan Type<span class="text-danger">*</span></label>
              {{ form::select('type', [
                                'monthly' => 'Monthly', 
                                'yearly' => 'Yearly', 
                                'custom' => 'Custom', 
                              ], $plan->type, ['class' => 'form-control form-select', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6"></div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name">Title<span class="text-danger">*</span></label>
              {{ form::text('title', $plan->title, ['class' => 'form-control', 'required' => true]) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name">Price</label>
              {{ form::number('price', $plan->price, ['class' => 'form-control', 'min' => '0.00', 'step' => '0.01']) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name">Description</label>
              {{ form::textarea('description', $plan->description, ['class' => 'form-control', 'id' => 'description', 'rows' => '4']) }}
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="mb-4">
              <label for="name">Features</label>
              {{ form::textarea('features', $plan->features, ['class' => 'form-control', 'id' => 'features', 'rows' => '4']) }}
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
<script>
  ClassicEditor
    .create(document.querySelector('#description'), {
      ckfinder: {
        uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
      },
      // toolbar: [ 'ckfinder', 'heading', 'fontFamily', 'fontSize', 'highlight', 'removeHighlight', 'bold', 'italic', 'strikethrough', 'underline', 'fontColor', 'fontBackgroundColor', 'blockQuote', 'insertTable', 'link', 'numberedList', 'bulletedList', 'mediaEmbed', 'alignment', 'undo', 'redo']
      toolbar: ['ckfinder', 'heading', 'bold', 'italic', 'blockQuote', 'insertTable', 'link', 'numberedList',
        'bulletedList', 'mediaEmbed', 'undo', 'redo'
      ]
    })
    .catch(error => {
      console.error(error);
    });
  ClassicEditor
    .create(document.querySelector('#features'), {
      ckfinder: {
        uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
      },
      // toolbar: [ 'ckfinder', 'heading', 'fontFamily', 'fontSize', 'highlight', 'removeHighlight', 'bold', 'italic', 'strikethrough', 'underline', 'fontColor', 'fontBackgroundColor', 'blockQuote', 'insertTable', 'link', 'numberedList', 'bulletedList', 'mediaEmbed', 'alignment', 'undo', 'redo']
      toolbar: ['ckfinder', 'heading', 'bold', 'italic', 'blockQuote', 'insertTable', 'link', 'numberedList',
        'bulletedList', 'mediaEmbed', 'undo', 'redo'
      ]
    })
    .catch(error => {
      console.error(error);
    });
</script>
@endpush