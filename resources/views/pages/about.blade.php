@extends('layout/master')
@push('styles')
  <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Top About Banner start -->
<section class="about-main">

  <div class="born-the-salon-main text-center rounded-0">
    <div class="container">
      <p>{!! $sections->section_1_title ?? 'About Mennr Software' !!}</p>
      {!! $sections->section_1_description ?? '' !!}
    </div>
  </div>
</section>
<!-- Top About Banner end -->

<!-- The Story of Mennr Start -->
<section class="story-of-mennr">
  <div class="container pt-3 pb-5">
    <h2 class="my-5  text-center">{!! $sections->section_2_title ?? 'The Story of Mennr' !!}</h2>
    {!! $sections->section_2_description ?? '' !!}
  </div>
</section>
<!-- The Story of Mennr End -->

<!-- Our Mission Start -->
<section class="our-mission-main">
  <h2 class="mt-2 mb-4 text-center">{!! $sections->section_3_title ?? '' !!}</h2>
  <div class="our-mission-section-bg">
    <div class="container text-center">
      <div class="our-mission-content">
        {!! $sections->section_3_description ?? '' !!}
        <div class="d-grid mt-5 gap-2 d-md-flex justify-content-md-center">
          <a href="{{ route('get_free_demo.index') }}" class="btn btn-primary">GET A FREE DEMO</a>
          <a href="{{ route('customer.signup') }}" class="btn btn-outline-secondary text-uppercase">Sign up NOW!</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Our Mission End -->

<!-- What We Do Start -->
<section class="what-we-do-main">
  <h2 class="text-center text-white">{!! $sections->section_4_title ?? 'We hate to brag but... <br>people really like what we do' !!}</h2>
  <div class="container">
    <div class="what-we-do-img-box mt-5">
      <div class="what-we-do-image">
        <img src="images/capterra.png" alt="">
        <div class="star-svg-img">
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
        </div>
      </div>

      <div class="what-we-do-image">
        <img src="images/google.png" alt="">
        <div class="star-svg-img">
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
        </div>
      </div>

      <div class="what-we-do-image">
        <img src="images/getapp.png" alt="">
        <div class="star-svg-img">
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
        </div>
      </div>

      <div class="what-we-do-image">
        <img src="images/facebook.png" alt="">
        <div class="star-svg-img">
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
          <svg width="16" height="16" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6667 0L15.2717 7.30333L23.3333 8.48167L17.5 14.1633L18.8767 22.19L11.6667 18.3983L4.45667 22.19L5.83333 14.1633L0 8.48167L8.06167 7.30333L11.6667 0Z" fill="#FFCD47" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- What We Do End -->

<!-- Ready to See Start -->
<section class="ready-to-see-section py-5">
  <div class="container">
    <div class="ready-to-see-box">
      <h2>Ready to see how the Mennr <br>Software can help your business <br>to grow?</h2>
      <div class="get-a-free-demo-btn">
        <a href="{{ route('get_free_demo.index') }}"> GET A FREE DEMO</a>
      </div>
    </div>
  </div>
</section>
<!-- Ready to See End -->
@endsection
@push('footer-scripts')
@endpush