@extends('layout/master')
@section('content')
<!-- Section 1 start-->
<section class="hero-section">
  <div class="container">
    <div class="hero-slider">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_1')
        <div>
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
              @if ($post->image)
              <img src="{{ asset('/upload/'.$post->image) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @elseif ($post->thumbnail)
              <img src="{{ asset('/upload/'.$post->thumbnail) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @endif
            </div>
            <div class="col-lg-6">
              <h1 class="mb-3">{{ $post->title }}</h1>
              <p>{!! $post->description !!}</p>
              <div class="d-grid mt-4 gap-2 d-md-flex justify-content-md-start">
                <a href="#" class="btn btn-primary">Watch Video</a>
              </div>
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<!-- Section 1 end-->

<!-- Section 2 start-->
<section class="hero-section">
  <div class="container">
    <h2 class="mt-4 mb-3 text-center">{{ $sections->section_2_title ?? '' }}</h2>
    <div class="hero-slider">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_2')
        <div>
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
              <h1 class="mb-3">{{ $post->title }}</h1>
              <p>{!! $post->description !!}</p>
            </div>
            <div class="col-lg-6">
              @if ($post->image)
              <img src="{{ asset('/upload/'.$post->image) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @elseif ($post->thumbnail)
              <img src="{{ asset('/upload/'.$post->thumbnail) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @endif
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<!-- Section 2 end-->

<!-- Section 3 start-->
<section class="hero-section">
  <div class="container">
    <h2 class="mt-4 mb-3 text-center">{{ $sections->section_3_title ?? '' }}</h2>
    <div class="hero-slider">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_3')
        <div>
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
              <h1 class="mb-3">{{ $post->title }}</h1>
              <p>{!! $post->description !!}</p>
            </div>
            <div class="col-lg-6">
              @if ($post->image)
              <img src="{{ asset('/upload/'.$post->image) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @elseif ($post->thumbnail)
              <img src="{{ asset('/upload/'.$post->thumbnail) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @endif
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<!-- Section 3 end-->

<!-- Section 4 start -->
<section class="we-do">
  <div class="container px-5 py-4">
    <h2 class="mt-4 mb-3 text-center">{{ $sections->section_4_title ?? '' }}</h2>
    
    <div class="row g-4 py-4 row-cols-3 row-cols-lg-8 we-do-container">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_4')
        <div class="col">
          <div class="we-do-card d-flex align-items-start">
            <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
              @if ($post->image)
              <img src="{{ asset('/upload/'.$post->image) }}">
              @elseif ($post->thumbnail)
              <img src="{{ asset('/upload/'.$post->thumbnail) }}">
              @endif
            </div>
            <div>
              <h2>{{ $post->title }}</h2>
              <p>{!! $post->description !!}</p>
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<!-- Section 4 end -->

<!-- Section 5 start -->
<section class="software-works">
  <div class="container px-5 py-4">
    <h2 class="mt-4 mb-3 text-center">{{ $sections->section_5_title ?? '' }}</h2>
    <h4 class="mt-4 mb-3 text-center">{!! $sections->section_5_description ?? '' !!}</h4>

    <div class="row g-5 py-5 row-cols-1 row-cols-lg-3 software-container">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_5')
        <div class="col">
          <div class="d-flex align-items-center justify-content-center fs-2 mb-3">
            @if ($post->image)
            <img src="{{ asset('/upload/'.$post->image) }}">
            @elseif ($post->thumbnail)
            <img src="{{ asset('/upload/'.$post->thumbnail) }}">
            @endif
          </div>
          <h4 class="text-center">{{ $post->title }}</h4>
          <p class="text-center">{!! $post->description !!}</p>
        </div>
        @endif
      @endforeach
    </div>

  </div>
</section>
<!-- Section 5 end -->

<!-- Section 6 start -->
<section class="we-do">
  <div class="container px-5 py-4">
    <div class="row g-4 py-4 row-cols-2 row-cols-lg-8 we-do-container">
      @foreach ($testimonials as $testimonial)
      <div class="col">
        <div class="d-flex text-center">
          {!! $testimonial->comment !!}
        </div>
        <div class="we-do-card d-flex align-items-start">
          
          <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
            @if ($testimonial->author_image)
            <img src="{{ asset('/upload/'.$testimonial->author_image) }}">
            @endif
          </div>
          <div>
            <h2>{{ $testimonial->author_name }}, {{ $testimonial->author_role }}</h2>
            <p>{{ $testimonial->author_designation }}</p>
            @if ($testimonial->author_logo)
            <img src="{{ asset('/upload/'.$testimonial->author_logo) }}" style="width: 154px; margin-left: -9px;">
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Section 6 end -->

<!-- Section 7 start-->
<section class="hero-section">
  <div class="container">
    <div class="hero-slider">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_7')
        <div>
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
              @if ($post->image)
              <img src="{{ asset('/upload/'.$post->image) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @elseif ($post->thumbnail)
              <img src="{{ asset('/upload/'.$post->thumbnail) }}" class="d-block mx-lg-auto img-fluid" alt="" />
              @endif
            </div>
            <div class="col-lg-6">
              <h1 class="mb-3">{{ $post->title }}</h1>
              <p>{!! $post->description !!}</p>
              <div class="d-grid mt-4 gap-2 d-md-flex justify-content-md-start">
                <a href="#" class="btn btn-primary">Learn How</a>
              </div>
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<!-- Section 7 end-->

<!-- Section 8 start -->
<section class="software-works">
  <div class="container px-5 py-4">
    <h2 class="mt-4 mb-3 text-center">{{ $sections->section_8_title ?? '' }}</h2>
    <h4 class="mt-4 mb-3 text-center">{!! $sections->section_8_description ?? '' !!}</h4>

    <div class="row g-5 py-5 row-cols-1 row-cols-lg-4 software-container">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_8')
        <div class="col">
          <div class="d-flex align-items-center justify-content-center fs-2 mb-3">
            @if ($post->image)
            <img src="{{ asset('/upload/'.$post->image) }}">
            @elseif ($post->thumbnail)
            <img src="{{ asset('/upload/'.$post->thumbnail) }}">
            @endif
          </div>
          <h4 class="text-center">{{ $post->title }}</h4>
          <p class="text-center">{!! $post->description !!}</p>
        </div>
        @endif
      @endforeach
    </div>

  </div>
</section>
<!-- Section 8 end -->

<!-- FAQ start -->
<section class="software-works">
  <div class="container px-5 py-4">
    <h2 class="mt-4 mb-3 text-center">Frequently Asked Questions</h2>
    
    <div class="row g-5 py-5 row-cols-1 row-cols-lg-1 software-container">
      @foreach ($faq as $f)
        <div class="col">
          <h4 class="text-left">{!! $f->question !!}</h4>
          <p class="text-left">{!! $f->answer !!}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- FAQ end -->
@endsection
@push('footer-scripts')
<script type="text/javascript">
	$('.hero-slider').slick({
		arrows: false,
		dots: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		slidesToShow: 1,
		slidesToScroll: 1,
	});
</script>
@endpush