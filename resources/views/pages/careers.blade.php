@extends('layout/master')
@section('content')
  <!-- Hero section start-->
  <section class="page-hero-main">
    <div class="container">
      <div class="text-center">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="mb-3">{!! !empty($sections->section_1_title) ? $sections->section_1_title : 'Careers' !!}</h1>
            {{-- <h2>No Credit Card Required</h2> --}}
            {!! $sections->section_1_description ?? '<h2>No Credit Card Required</h2>' !!}

            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_1')
                <h3 class="mb-3">{!! $post->title !!}</h3>
                <p>{!! $post->description !!}</p>
              @endif
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end-->
  @if (!empty($sections->section_2_title) || !empty($sections->section_2_description))
    <section class="container pt-3 pb-5">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2>{!! $sections->section_2_title ?? '' !!}</h2>
          {!! $sections->section_2_description ?? '' !!}
        </div>
        @foreach ($all_posts as $post)
          @if ($post->section_title === 'section_2')
            <div class="col-lg-4">
              <h4>{!! $post->title !!}</h4>
              <h6>{!! $post->sub_title !!}</h6>
              <img class="img-fluid" src="{{ asset('/upload/' . $post->image) }}" />
              <p>{!! $post->description !!}</p>
            </div>
          @endif
        @endforeach
      </div>
    </section>
  @endif

  @if (!empty($sections->section_3_title) || !empty($sections->section_3_description))
    <section class="container pt-3 pb-5">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>{!! $sections->section_3_title ?? '' !!}</h2>
          {!! $sections->section_3_description ?? '' !!}
        </div>
      </div>
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_3')
          <div class="card mb-3">
            <div class="card-header">
              {!! $post->title !!}
            </div>
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="card-body">
                  <h5 class="card-title">{!! $post->sub_title !!}</h5>
                  <p class="card-text">{!! $post->description !!}</p>
                </div>
              </div>
              <div class="col-lg-4">
                <img class="img-fluid" src="{{ asset('/upload/' . $post->image) }}" />
              </div>
            </div>
            <div class="card-footer text-muted">
              Tags: {!! $post->tags !!}
            </div>
          </div>
        @endif
      @endforeach

    </section>
  @endif

@endsection
@push('footer-scripts')
@endpush
