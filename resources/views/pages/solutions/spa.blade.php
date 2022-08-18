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
              <img src="{{ asset('/upload/'.$post->image) }}" class="d-block mx-lg-auto img-fluid" alt="" />
            </div>
            <div class="col-lg-6">
              <h1 class="mb-3">{{ $post->title }}</h1>
              <p>{{ $post->description }}</p>
              <div class="d-grid mt-4 gap-2 d-md-flex justify-content-md-start">
                <a href="#" class="btn btn-primary">GET A FREE DEMO</a>
                <a href="#" class="btn btn-outline-secondary text-uppercase">Sign up NOW!</a>
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

<!-- Section 2 start -->
<section class="software-works">
  <div class="container px-5 py-4">
    <h2 class="mt-4 mb-3 text-center">{{ $sections->section_2_title}}</h2>
    <h3 class="mt-4 mb-3 text-center">{{ $sections->section_2_description}}</h3>

    <div class="row g-5 py-5 row-cols-1 row-cols-lg-3 software-container">
      @foreach ($all_posts as $post)
        @if ($post->section_title === 'section_2')
        <div class="col">
          <div class="d-flex align-items-center justify-content-center fs-2 mb-3">
            <img src="{{ asset('/upload/'.$post->image) }}">
          </div>
          <h4 class="text-center">{{ $post->title }}</h4>
          <p class="text-center">{{ $post->description }}</p>
        </div>
        @endif
      @endforeach
    </div>

  </div>
</section>
<!-- Section 2 start -->
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