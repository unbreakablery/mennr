@extends('admin.layout.layout')
@section('content')
  <div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.dashboard') }}">
            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg>
          </a>
        </li>
        <li class="breadcrumb-item"><a href="#">Careers Page</a></li>
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
                {!! Form::text('title', 'careers', [
                    'class' => 'form-control',
                    'required' => 'required',
                    'readonly' => 'readonly',
                ]) !!}
              </div>
            </div>

            <!-- Section 1 -->
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label class="w-100">Section 1 - [Hero Section]</label>
                <label class="w-100">Title<span class="text-danger">*</span></label>
                {!! Form::hidden('txt_name[]', 'section_1_title') !!}
                @if ($page->count() == 0)
                  {!! Form::text('section_1_title', '', ['class' => 'form-control', 'required' => 'required']) !!}
                @else
                  @foreach ($page as $value)
                    @if ($value->section_title == 'section_1_title')
                      {!! Form::text('section_1_title', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                  @endforeach
                @endif
              </div>
              <div class="mb-4">
                <label class="w-100">&nbsp;</label>
                <label class="w-100">Description</label>
                {!! Form::hidden('txt_name[]', 'section_1_description') !!}
                @if ($page->count() == 0)
                  {!! Form::textarea('section_1_description', '', [
                      'class' => 'form-control',
                      'id' => 'section_1_description',
                      'rows' => '4',
                  ]) !!}
                @else
                  @foreach ($page as $value)
                    @if ($value->section_title == 'section_1_description')
                      {!! Form::textarea('section_1_description', $value->data, [
                          'class' => 'form-control',
                          'id' => 'section_1_description',
                          'rows' => '4',
                      ]) !!}
                    @endif
                  @endforeach
                @endif
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <label class="text-success w-100 mt-4">Posts associated with this section (Hero section)</label>
              <ul style="list-style: decimal;">
                @foreach ($posts as $post)
                  @if ($post->section_title === 'section_1')
                    <li class="text-info">
                      <a href="posts/{{ $post->id }}/edit" target="_blank">{{ $post->title }}</a>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
            <!-- End Section 1-->

            <!-- Section 2 -->
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label class="w-100">Section 2 - [Businesses using Mennr]</label>
                <label class="w-100">Title<span class="text-danger">*</span></label>
                {!! Form::hidden('txt_name[]', 'section_2_title') !!}
                @if ($page->count() == 0)
                  {!! Form::text('section_2_title', '', ['class' => 'form-control', 'required' => 'required']) !!}
                @else
                  @foreach ($page as $value)
                    @if ($value->section_title == 'section_2_title')
                      {!! Form::text('section_2_title', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                  @endforeach
                @endif
              </div>
              <div class="mb-4">
                <label class="w-100">&nbsp;</label>
                <label class="w-100">Description</label>
                {!! Form::hidden('txt_name[]', 'section_2_description') !!}
                @if ($page->count() == 0)
                  {!! Form::textarea('section_2_description', '', [
                      'class' => 'form-control',
                      'id' => 'section_2_description',
                      'rows' => '4',
                  ]) !!}
                @else
                  @foreach ($page as $value)
                    @if ($value->section_title == 'section_2_description')
                      {!! Form::textarea('section_2_description', $value->data, [
                          'class' => 'form-control',
                          'id' => 'section_2_description',
                          'rows' => '4',
                      ]) !!}
                    @endif
                  @endforeach
                @endif
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <label class="text-success w-100 mt-4">Posts associated with this section</label>
              <ul style="list-style: decimal;">
                @foreach ($posts as $post)
                  @if ($post->section_title === 'section_2')
                    <li class="text-info">
                      <a href="posts/{{ $post->id }}/edit" target="_blank">{{ $post->title }}</a>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
            <!-- End Section 2-->

            <!-- Section 3 -->
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label class="w-100">Section 3</label>
                <label class="w-100">Title<span class="text-danger">*</span></label>
                {!! Form::hidden('txt_name[]', 'section_3_title') !!}
                @if ($page->count() == 0)
                  {!! Form::text('section_3_title', '', ['class' => 'form-control', 'required' => 'required']) !!}
                @else
                  @foreach ($page as $value)
                    @if ($value->section_title == 'section_3_title')
                      {!! Form::text('section_3_title', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                  @endforeach
                @endif
              </div>
              <div class="mb-4">
                <label class="w-100">&nbsp;</label>
                <label class="w-100">Description</label>
                {!! Form::hidden('txt_name[]', 'section_3_description') !!}
                @if ($page->count() == 0)
                  {!! Form::textarea('section_3_description', '', [
                      'class' => 'form-control',
                      'id' => 'section_3_description',
                      'rows' => '4',
                  ]) !!}
                @else
                  @foreach ($page as $value)
                    @if ($value->section_title == 'section_3_description')
                      {!! Form::textarea('section_3_description', $value->data, [
                          'class' => 'form-control',
                          'id' => 'section_3_description',
                          'rows' => '4',
                      ]) !!}
                    @endif
                  @endforeach
                @endif
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <label class="text-success w-100 mt-4">Posts associated with this section</label>
              <ul style="list-style: decimal;">
                @foreach ($posts as $post)
                  @if ($post->section_title === 'section_3')
                    <li class="text-info">
                      <a href="posts/{{ $post->id }}/edit" target="_blank">{{ $post->title }}</a>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
            <!-- End Section 3-->

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
    for (var i = 1; i <= 6; i++) {
      ClassicEditor
        .create(document.querySelector('#section_' + i + '_description'))
        .catch(error => {
          console.error(error);
        });
    }
  </script>
@endpush
