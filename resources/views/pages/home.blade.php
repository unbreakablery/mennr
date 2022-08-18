@extends('layout/master')
@section('content')
  <!-- Hero section start-->
  <section class="hero-section">
    <div class="container">
      <div class="hero-slider py-5">
        <div>
          @foreach ($all_posts as $post)
            @if ($post->section_title === 'section_1')
              <div class="row flex-lg-row-reverse align-items-center g-5">
                <div class="col-lg-6">
                  <img src="{{ asset('/upload/' . $post->image) }}" class="d-none d-lg-block mx-lg-auto img-fluid"
                    alt="" />
                  <img src="{{ asset('/upload/' . $post->thumbnail) }}" class="d-block d-lg-none mx-lg-auto img-fluid"
                    alt="" />
                </div>
                <div class="col-lg-6">
                  <h1 class="mb-3">{!! $post->title !!}</h1>
                  <p>{!! $post->description !!}</p>
                  <div class="d-grid mt-4 gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('get_free_demo.index') }}" class="btn btn-primary">GET A FREE DEMO</a>
                    <a href="{{ route('customer.signup') }}" class="btn btn-outline-secondary text-uppercase">Sign up NOW!</a>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end-->

  <!-- logo marquee start-->
  <section>
    <div class="container-fluid">
      <div class="row hero-logo-list text-center mt-5 mb-5">
        <div class="col-12">
          {!! $sections->section_2_description ?? '' !!}
          <div class="marquee">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_2')
                <img class="img-fluid" src="{{ asset('/upload/' . $post->image) }}" />
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- logo marquee end-->

  <!-- Why Mennr start-->
  <section class="why-mennr">
    <h2 class="mt-4 mb-3">{{ $sections->section_3_title ?? '' }}</h2>
    @php
      $idx = 0;
    @endphp
    @foreach ($all_posts as $post)
      @if ($post->section_title === 'section_3')
        @php
          $idx++;
        @endphp
        <div class="why-top-wave">
          <div class="container">
            <div class="row flex-lg-row-{{ $idx % 2 === 1 ? 'normal' : 'reverse' }} align-items-center g-5 py-5">
              <div class="col-lg-6">
                <img src="{{ asset('/upload/' . $post->image) }}" class="d-none d-lg-block img-fluid" alt="" />
                <img src="{{ asset('/upload/' . $post->thumbnail) }}" class="d-block d-lg-none img-fluid"
                  alt="" />
              </div>
              <div class="col-lg-6">
                <h3 class="mb-4">{!! $post->title !!}</h3>
                {!! $post->description !!}
                <div class="d-grid mt-4 d-md-flex justify-content-md-start">
                  <a href="{{ route('solutions') }}" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  </section>
  <!-- Why Mennr end-->

  <!-- we do start -->
  <section class="we-do">
    <div class="container px-5 py-4">
      <h2 class="mt-4 mb-3 text-center">{{ $sections->section_4_title ?? '' }}</h2>
      <div class="subtitle text-center">{!! $sections->section_4_description ?? '' !!}</div>

      <div class="row g-4 py-4 row-cols-2 row-cols-lg-8 we-do-container">
        @php
          $idx = 0;
        @endphp
        @foreach ($all_posts as $post)
          @if ($post->section_title === 'section_4')
            @php
              $idx++;
            @endphp
            <div class="col">
              <div class="we-do-card">
                <div class="d-flex align-items-start position-relative">
                  <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                    <img src="{{ asset('/upload/' . $post->image) }}">
                  </div>
                  <div>
                    <h2>{{ $post->title }}</h2>
                    <p class="card-desc-desktop">{{ strip_tags($post->description) }}</p>
                  </div>
                  <a href="#" class="arrow-down {{ $idx === 1 ? 'arrow-up' : '' }}"></a>
                </div>
                <p class="card-desc-mobile {{ $idx === 1 ? 'card-open' : '' }}">{{ strip_tags($post->description) }}</p>
              </div>
            </div>
          @endif
        @endforeach
      </div>

      <div class="text-center mt-4 mb-5"><a href="{{ route('solutions') }}" class="btn btn-primary text-uppercase" href="#">See all features</a>
      </div>
    </div>
  </section>
  <!-- we do end -->

  <!-- software works start -->
  <section class="software-works">
    <div class="container py-5">
      <h2 class="mt-4 mb-3 text-center">{{ $sections->section_5_title ?? '' }}</h2>
      <div class="mt-4 mb-3 text-center">{!! $sections->section_5_description ?? '' !!}</div>

      <div class="row g-4 py-5 row-cols-1 row-cols-md-2 row-cols-lg-3 software-container">
        @foreach ($all_posts as $post)
          @if ($post->section_title === 'section_5')
            <div class="col">
              <div class="sofware-card">
                <div class="d-flex align-items-center justify-content-center fs-2 mb-4 sf-img">
                  <img src="{{ asset('/upload/' . $post->image) }}">
                </div>
                <h4 class="text-center">{{ $post->title }}</h4>
                <div class="text-center">{!! $post->description !!}</div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </section>
  <!-- software works start -->

  <!-- testimonials start -->
  <section class="testimonials-main">
    <div class="container py-5">
      <h2 class="mt-4 mb-3 text-center">{{ $sections->section_6_title ?? '' }}</h2>
      <div class="subtitle text-center">{!! $sections->section_6_description ?? '' !!}</div>

      <div class="testimonials-slider">
        <div class="review-slider">
          @foreach ($testimonials as $t)
            <div class="slider-box">
              <div class="quote-img"><img src="{{ asset('/images/quote.svg') }}"></div>
              <div class="testi-grid gap-2">
                <div>
                  <p>{!! $t->comment !!}</p>
                  <p>- {{ $t->author_name }}, {{ $t->author_role }}</p>
                </div>
                <div class="text-center avatar-info">
                  @if ($t->author_image)
                    <img src="{{ asset('/upload/' . $t->author_image) }}" class="w-100" />
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials end -->

  <!-- Discover start -->
  <section class="discover-main">
    <div class="container">
      <div class="get-start-main text-center">
        <h2>Discover a better way<br /> Mennr Can Drive Growth.</h2>
        <a href="{{ route('solutions') }}" class="btn btn-light btn-lg me-3">Get Started Now</a>
        <a href="{{ route('get_free_demo.index') }}" class="btn btn-outline-secondary btn-lg">Get a Free Demo</a>
      </div>
    </div>
  </section>
  <!-- Discover end -->
@endsection

@push('footer-scripts')
  <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
  <script type="text/javascript">
    $('.marquee').marquee({
      duration: 25000,
      gap: 30,
      delayBeforeStart: -30000,
      direction: 'left',
      duplicated: true
    });
  </script>
@endpush
