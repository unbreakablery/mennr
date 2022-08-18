@extends('admin.layout.layout')
@section('content')

  <div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
        <li class="breadcrumb-item">
          <a href="{{ '/dashboard' }}">
            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg>
          </a>
        </li>
        <li class="breadcrumb-item"><a href="#">Add Post</a></li>
      </ol>
    </nav>
  </div>

  <div class="row">
    <div class="col-12 mb-4">
      <div class="card border-0 shadow components-section">
        <div class="card-body">
          {!! Form::open(['route' => ['posts.store'], 'enctype' => 'multipart/form-data']) !!}
          @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
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
                <label for="name" class="my-1 me-2" for="country">Page<span class="text-danger">*</span></label>
                {{ form::select(
                    'page_title',
                    [
                        'home' => 'Home',
                        'solutions' => 'Solutions',
                        'blog' => 'Blog',
                        'careers' => 'Careers',
                        'about' => 'About',
                        'pricing' => 'Pricing',
                    ],
                    '',
                    ['class' => 'form-control form-select'],
                ) }}
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label for="name">Section Title<span class="text-danger">*</span></label>
                {{ form::select(
                    'section_title',
                    [
                        'section_1' => 'Section 1',
                        'section_2' => 'Section 2',
                        'section_3' => 'Section 3',
                        'section_4' => 'Section 4',
                        'section_5' => 'Section 5',
                        'section_6' => 'Section 6',
                        'section_7' => 'Section 7',
                        'section_8' => 'Section 8',
                        'section_9' => 'Section 9',
                        'section_10' => 'Section 10',
                        'section_11' => 'Section 11',
                        'section_12' => 'Section 12',
                        'section_13' => 'Section 13',
                        'section_14' => 'Section 14',
                    ],
                    '',
                    ['class' => 'form-control form-select'],
                ) }}
              </div>
              <div class="mb-4">
                <label for="name">Post Title<span class="text-danger">*</span></label>
                {{ form::text('title', '', ['class' => 'form-control', 'required' => 'required']) }}
              </div>
              <div class="mb-4">
                <label for="name">Post Sub Title</label>
                {{ form::text('sub_title', '', ['class' => 'form-control']) }}
              </div>
              <div class="mb-4">
                <label for="name">Tags<span class="text-danger">*</span></label>
                {{ form::text('tags', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'comma seperated items e.g Item 1, Item 2 etc']) }}
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label for="name">Post Description</label>
                {{ form::textarea('description', '', ['class' => 'form-control', 'id' => 'description', 'rows' => '10']) }}
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label for="name" class="form-label">Post Image</label>
                {!! Form::file('image', ['class' => 'form-control', 'id' => ' file']) !!}
              </div>

            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="mb-4">
                <label for="name" class="form-label">Post Image Thumbnail</label>
                {!! Form::file('thumbnail', ['class' => 'form-control', 'id' => 'file']) !!}
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

@include('ckfinder::setup')
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
  </script>
@endpush
