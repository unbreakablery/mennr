@extends('layout/master')
@push('styles')
<link href="{{ asset('css/solutions.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Hero section start-->
<section class="solutions-hero-main">
  <div class="container">
    <div class="text-center">
      <div class="row">
        <div class="col-lg-12">
          <p>Our Solutions</p>
          <h1>Explore the Features of Mennr</h1>
          <p class="mb-0">Automated features used to simplify day-to-day operations, manage reports,<br /> Engage customers, analyse performance etc..</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero section end-->

<!-- Left nad Right section start-->
<section class="lr-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-xl-4 col-xxl-3 pt-5 solutions-left-part dropdown">
        <button class="btn btn-secondary dropdown-toggle dropdown-menu-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="images/icon-appointment.svg">
          <span>Schedule Appointment</span>
        </button>

        <ul id="navbar-scroller" class="dropdown-menu dropdown-menu-mobile">
          <li>
            <a href="#schedule-appointment" class="sidebar-menu active"><img src="/images/icon-appointment.svg" /> Schedule Appointment</a>
          </li>
          <li>
            <a href="#point-sale" class="sidebar-menu"><img src="/images/icon-point-of-sale.svg" /> Point of Sale</a>
          </li>
          <li>
            <a href="#online-booking" class="sidebar-menu"><img src="/images/icon-online-booking.svg" /> Online Booking</a>
          </li>
          <li>
            <a href="#marketing" class="sidebar-menu"><img src="/images/icon-marketing.svg" /> Marketing</a>
          </li>
          <li>
            <a href="#analytics-reports" class="sidebar-menu"><img src="/images/icon-analytics.svg" /> Analytics & Reports</a>
          </li>
          <li>
            <a href="#feedback-system" class="sidebar-menu"><img src="/images/icon-feedback.svg" /> Feedback System</a>
          </li>
          <li>
            <a href="#repeat-clients" class="sidebar-menu"><img src="/images/icon-repeat-clients.svg" /> Repeat Clients</a>
          </li>
          <li>
            <a href="#book-keeping" class="sidebar-menu"><img src="/images/icon-book-keeping.svg" /> Book Keeping</a>
          </li>
          <li>
            <a href="#send-notification" class="sidebar-menu"><img src="/images/icon-send-notification.svg" /> Send Notification</a>
          </li>
          <li>
            <a href="#multi-location" class="sidebar-menu"><img src="/images/icon-multi-location.svg" /> Manage Multi-Location</a>
          </li>
          <li>
            <a href="#sell-online" class="sidebar-menu"><img src="/images/icon-sell-online.svg" /> Sell Online</a>
          </li>
          <li>
            <a href="#business-intelligence" class="sidebar-menu"><img src="/images/icon-business-int.svg" /> Business Intelligence</a>
          </li>
          <li>
            <a href="#security" class="sidebar-menu"><img src="/images/icon-security.svg" /> Security</a>
          </li>
          <li>
            <a href="#integrations" class="sidebar-menu"><img src="/images/icon-integrations.svg" /> Integrations</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-8 col-xl-8  col-xxl-9 py-5 border-left solutions-right-part">
        <div class="">
          <div id="schedule-appointment" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_1')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="point-sale" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_2')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="online-booking" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_3')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="marketing" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_4')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="analytics-reports" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_5')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="feedback-system" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_6')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="repeat-clients" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_7')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="book-keeping" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_8')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="send-notification" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_9')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="multi-location" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_10')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="sell-online" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_11')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="business-intelligence" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_12')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="security" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_13')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>

          <div class="sep-brd"></div>

          <div id="integrations" class="solution-topic">
            @foreach ($all_posts as $post)
              @if ($post->section_title === 'section_14')
              <h2>{!! $post->title !!}</h2>
              {!! $post->description !!}
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Left nad Right section end-->

<!-- Discover start -->
<section class="discover-main">
  <div class="get-start-main text-center rounded-0">
    <div class="container">
      <h2>Discover a better way<br /> Mennr Can Drive Growth.</h2>
      <a href="{{ route('solutions') }}" class="btn btn-light btn-lg me-3">Get Started Now</a>
      <a href="{{ route('get_free_demo.index') }}" class="btn btn-outline-secondary btn-lg">Get a Free Demo</a>
    </div>
  </div>
</section>
<!-- Discover end -->
@endsection
@push('footer-scripts')
<script type="text/javascript">
	$(document).ready(function() {
    $('.solutions-right-part div div img').addClass('img-fluid');

    $('.sidebar-menu').each(function() {
      $(this).on('click', function() {
        $('.sidebar-menu').each(function() {
          $(this).removeClass("active");
        })
        $(this).addClass("active");
      })
    });
  });
</script>
@endpush