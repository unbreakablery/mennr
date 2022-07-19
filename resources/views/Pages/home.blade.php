@extends('layout/master')
@section('content')

    <!-- Hero section -->
    <section class="section hero-section">
      <div class="site-wrapper">
        <div class="_2-col-grid hero-grid">
          <div class="content-container align-self-center">
            @if($post)
                @foreach($post as $value)
                    @if($value->section_title=='first_section')
                        <h1>{{ $value->title }}</h1>
                        <div class="body-medium">
                            {{ $value->description }}
                        </div>
                        @php
                            $sectionOne_image = $value->image;
                        @endphp
                    @endif
                @endforeach
            @endif
            <div class="btn-container">
              <a href="#" class="button rm-32 request-demo-popup-btn" data-bs-toggle="modal"data-bs-target="#requestDemoModal">
                <img src="{{ asset('theme/assets/icons/btn-trapezoid-bg.svg') }}" loading="lazy" alt="Request demo with Zenoti - orange color button" class="button-bg brown-bg"/>
                <div class="btn-text">Get A Free Demo</div>
              </a>
              <a href="#">
                <div class="button secondary-btn">
                  <div class="btn-text secondary-btn-text">Watch Video</div>
                  <img src="{{ asset('theme/assets/icons/btn-arow-1.svg') }}" loading="lazy" width="32" height="32" alt="Playbutton look alike - Watch video about An overview of Zenoti software" class="btn-icon"
                  />
                </div>
                <script type="application/json" class="w-json">
                  {
                    "items": [
                      {
                        "url": "https://zenoti.wistia.com/embed/iframe/wjbqfjnfnf?autoplay=1",
                        "originalUrl": "https://zenoti.wistia.com/embed/iframe/wjbqfjnfnf?autoplay=1",
                        "width": 940,
                        "height": 529,
                        "thumbnailUrl": "https://embed-ssl.wistia.com/deliveries/e65135e3ad98627878a887d4110bb6ef.jpg?image_crop_resized=960x540",
                        "html": " < iframe class = \"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2Fwjbqfjnfnf%3Fautoplay%3D1&display_name=Wistia%2C+Inc.&url=https%3A%2F%2Fzenoti.wistia.com%2Fembed%2Fiframe%2Fwjbqfjnfnf%3Fautoplay%3D1&image=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Fe65135e3ad98627878a887d4110bb6ef.jpg%3Fimage_crop_resized%3D960x540&key=96f1f04c5f4143bcb0f2e68c87d65feb&autoplay=1&type=text%2Fhtml&schema=wistia\" width=\"940\" height=\"529\" scrolling=\"no\" title=\"Wistia, Inc. embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                        "type": "video"
                      }
                    ],
                    "group": ""
                  }
                </script>
              </a>
            </div>
          </div>
          @if(!empty($sectionOne_image))<img src="{{ asset('/upload') }}/{{ $sectionOne_image }}" loading="eager" alt="Wellness industry employee explaining about the product to client" height="" class="hero-illustration desktop-only"/>@endif
          <img src="{{ asset('theme/assets/img/png/Heroimage-mob-compressed.png') }}" loading="eager" width="314" height="316" alt="Wellness industry employee explaining about the product to client" class="hero-illustration mobile-only align-self-center"/>
        </div>
      </div>
    </section>
    <!-- Customer section -->
    <section class="section customer-section bg-secondary">
        <div class="section-cutout cutout-top-right blue-bg"></div>
        <div class="site-wrapper">
            <div class="_2-col-grid hero-metrics-grid">
                <div class="_3-col-grid home-customer-grid align-self-center">
                    @if($post)
                        @foreach($post as $value)
                            @if($value->section_title=='second_section')
                                <a href="#" class="customer-logo-container">
                                    <img src="{{ asset('/upload') }}/{{ $value->thumbnail }}" loading="lazy"alt="{{ $value->title }}" class="customer-logo desktop-only" />
                                </a>
                            @endif
                        @endforeach
                    @endif
                    <a href="#" class="see-more-customers button secondary-btn align-right">
                        <div class="btn-text secondary-btn-text">See More</div>
                        <img src="{{  asset('theme/assets/icons/teal-chevron-icon.svg') }} " loading="lazy" width="32" height="32" alt="teal-chevron-icon.svg" class="btn-icon"/>
                    </a>
                </div>
                <div class="content-container align-self-center align-items-center align-items-sm-start">
                    <h2>
                        <span>12,000+</span>
                    </h2>
                    <div class="body-medium">businesses in over</div>
                    <h2>
                        <span>50 countries</span>
                    </h2>
                    <div class="body-medium">are powered by Mennr</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home pillar section -->
    <section class="section home-pillar-section">
      <div class="section-cutout cutout-top-right bg-secondary"></div>
      <div class="site-wrapper">
        <div class="body-large">
          @if($home)
            @foreach($home as $value)
                @if($value->section_title == 'third_title')
                    {{ $value->data }}
                @endif
            @endforeach
          @endif
        </div>
        <div class="d-flex d-lg-none flex-column accordion-wrapper">
            @if($post)
              @php $k = 0; @endphp
                @foreach($third_section as $value)
                  @php
                    $third_image[] = $value->image;
                  @endphp
                  <div class="pillar-mobile-accordian">
                    <div id="pillarHeading{{$k}}" class="position-relative" data-bs-toggle="collapse" data-bs-target="#pillarMobile{{$k}}" aria-expanded="@if($k > 0) false @else true @endif" aria-controls="pillarMobile{{$k}}">
                        <h2 class="pillar-accordian-heading">{{ $value->title }}</h2>
                        <div class="body-medium">{{ $value->subtitle }}</div>
                        <img loading="lazy" src="{{ asset('theme/assets/icons/chevron-white.svg') }}" alt="" class="chevron-down"/>
                    </div>
                    <div id="pillarMobile{{$k}}" class="hero-service-animate collapse @if($k > 0) @else show @endif" aria-labelledby="pillarHeading{{$k}}">
                        <p class="body-small home-service-para">
                          {{ $value->description }}
                        </p>
                        <div class="btn-container pillar-mobile-btn-container">
                            <a href="/solutions/elevate-the-customer-experience" onclick="handleButtonClick(this)"class="button-no-shadow rm-32" id="disableRightClick">
                                <img alt="Know more about Growing your business - orange color button" src="{{ asset('theme/assets/icons/btn-trapezoid-bg.svg') }} "loading="lazy" alt="Orange color button" class="button-bg"/>
                                <div class="btn-text">Know more</div>
                            </a>
                            <a href="#">
                                <div class="button secondary-btn text-white">
                                <div class="btn-text secondary-btn-text">
                                    Watch Video
                                </div>
                                <img src="{{ asset('theme/assets/icons/btn-arow-1.svg') }}" loading="lazy" alt="Playbutton look alike - Watch video about Circle of Experience at Zenoti" class="btn-icon"/>
                                </div>
                                <script type="application/json" class="w-json">
                                {
                                    "items": [
                                    {
                                        "type": "video",
                                        "originalUrl": "https://zenoti.wistia.com/medias/fnl5a5t8ka?autoplay=1",
                                        "url": "https://zenoti.wistia.com/medias/fnl5a5t8ka?autoplay=1",
                                        "html": " < iframe class = \"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2Ffnl5a5t8ka&display_name=Wistia%2C+Inc.&url=https%3A%2F%2Fzenoti.wistia.com%2Fmedias%2Ffnl5a5t8ka&image=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F4aa034802640a21211d2d4ac1b4b13c63f191ac7.jpg%3Fimage_crop_resized%3D960x540&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=wistia\" width=\"940\" height=\"529\" scrolling=\"no\" title=\"Wistia, Inc. embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                                        "thumbnailUrl": "https://embed-ssl.wistia.com/deliveries/4aa034802640a21211d2d4ac1b4b13c63f191ac7.jpg?image_crop_resized=960x540",
                                        "width": 940,
                                        "height": 529
                                    }
                                    ]
                                }
                                </script>
                            </a>
                        </div>
                        @if(!empty($value->image))
                            <img
                                loading="lazy"
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                alt="Illustration of a women in chair showing the process of appointment booking with Zenoti in a circle"
                                class="home-pillar-mobile-img"
                            />
                        @endif
                    </div>
                  </div>
                @php $k++; @endphp
              @endforeach
           @endif
        </div>
        <div class="d-none d-lg-flex home-pillar-tab-component position-relative">
          <div id="home-pillar-accordion-desktop">
            @if($post)
              @php $i = 0; @endphp
                @foreach($third_section as $value)
                  @php
                    $third_image[] = $value->image;
                  @endphp
                  <div class="accordion-item" tab="Tab-{{$i}}">
                    <div class="accordion-header" id="heading{{$i}}">
                      <button class="accordion-button @if($i>0) collapsed @else  @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="@if($i>0) false @else true @endif" aria-controls="collapse{{$i}}">
                        <h2 class="text-dark">{{ $value->title }}</h2>
                        <div class="body-medium">{{ $value->subtitle }}</div>
                        <img loading="lazy" src="{{ asset('theme/assets/icons/chevron-white.svg') }}" alt="" class="pillar-tab-chevron"/>
                      </button>
                    </div>
                    <div id="collapse{{$i}}" class="accordion-collapse collapse @if($i>0) @else show @endif" aria-labelledby="heading{{$i}}"data-bs-parent="#home-pillar-accordion-desktop">
                      <div class="accordion-body">
                        <p class="body-small home-service-para">
                          {{ $value->description }}
                        </p>
                        <div class="tab-btn-embed w-embed w-iframe w-script">
                          <div class="btn-container">
                            <button href="/solutions/elevate-the-customer-experience" onclick="handleButtonClick(this)"class="button-no-shadow rm-32" id="disableRightClick">
                              <img alt="Know more about Growing your business - orange color button" src="{{ asset('theme/assets/icons/btn-trapezoid-bg.svg') }} "loading="lazy" alt="Orange color button" class="button-bg"/>
                                <div class="btn-text">Know more</div>
                            </button>
                            <div href="#" class="w-inline-block w-lightbox">
                              <div class="button secondary-btn">
                                <div class="btn-text secondary-btn-text">
                                  Watch Video
                                </div>
                                <img src="{{ asset('theme/assets/icons/btn-arow-1.svg') }}" loading="lazy" alt="Playbutton look alike - Watch video about Circle of Experience at Zenoti" class="btn-icon"/>
                              </div>
                              <script type="application/json" class="w-json">
                                {
                                  "items": [
                                    {
                                      "type": "video",
                                      "originalUrl": "https://zenoti.wistia.com/medias/fnl5a5t8ka?autoplay=1",
                                      "url": "https://zenoti.wistia.com/medias/fnl5a5t8ka?autoplay=1",
                                      "html": " < iframe class = \"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2Ffnl5a5t8ka&display_name=Wistia%2C+Inc.&url=https%3A%2F%2Fzenoti.wistia.com%2Fmedias%2Ffnl5a5t8ka&image=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F4aa034802640a21211d2d4ac1b4b13c63f191ac7.jpg%3Fimage_crop_resized%3D960x540&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=wistia\" width=\"940\" height=\"529\" scrolling=\"no\" title=\"Wistia, Inc. embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                                      "thumbnailUrl": "https://embed-ssl.wistia.com/deliveries/4aa034802640a21211d2d4ac1b4b13c63f191ac7.jpg?image_crop_resized=960x540",
                                      "width": 940,
                                      "height": 529
                                    }
                                  ]
                                }
                              </script>
                            </div>
                          </div>
                          <style>
                            .button-no-shadow {box-shadow: none !important;background: none !important;}
                          </style>
                        </div>
                      </div>
                    </div>
                  </div>
                @php $i++; @endphp
              @endforeach
           @endif
          </div>

          <div class="tabs-content">
            @php $j = 0; @endphp
            @if(!empty($third_image))
            @foreach($third_image as $image)
              <div data-w-tab="Tab-{{$j}}" class="pillar-tab-image collapse{{$j}} @if($j>0) w-tab-pane tab-pane @endif">
                <div class="pillar-image-wrapper">
                  <img
                    loading="lazy"
                    src="{{ asset('/upload') }}/{{ $image }}"
                    alt="Illustration of a women in chair showing the process of appointment booking with Zenoti in a circle"
                    class="home-pillar-img"
                  />
                </div>
              </div>
            @php $j++; @endphp
            @endforeach
            @endif
          </div>

        </div>
      </div>
      <div class="section-cutout cutout-bottom-right bg-secondary"></div>
    </section>
    <!-- Product section -->
    <section class="section section-small bg-secondary">
      <div class="site-wrapper">
        <div class="section-heading-container">
          @if($home)
            @foreach($home as $value)
                @if($value->section_title == 'forth_title')
                <h2 class="section-heading">
                    {{ $value->data }}
                </h2>
                @endif
                @if($value->section_title == 'forth_description')
                <div class="section-heading-subtext">
                    {{ $value->data }}
                </div>
                @endif
            @endforeach
          @endif
        </div>
      </div>
      <div class="_3-col-grid service-grid">
        @if($post)
          @foreach($post as $value)
            @if($value->section_title=='forth_section')
              @if($value->title == "Appointments & Booking")
                @php
                  $element_color = "light-brown";
                @endphp
                @elseif($value->title == "Bussiness Inteligence")
                  @php
                    $element_color = "pink";
                  @endphp
                @elseif($value->title == "Marketing & Sales")
                  @php
                    $element_color = "brown";
                  @endphp
                @elseif($value->title == "Billing & Payments")
                  @php
                    $element_color = "blue";
                  @endphp
                @elseif($value->title == "Bussiness Management")
                  @php
                    $element_color = "green";
                  @endphp
                @elseif($value->title == "Mobile Solutions")
                  @php
                    $element_color = "lemon";
                  @endphp
                @else
                  @php
                    $element_color = "brown";
                  @endphp
              @endif
              <a href="#" class="home-service-card {{ $element_color }}">
                <div>{{ $value->title }}</div>
                <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="{{ $value->title }}" class="services-img desktop-only"/>
                <img src="{{ asset('theme/assets/icons/round-chevron-btn.svg') }}" loading="lazy" alt="" class="service-chevron-btn"/>
              </a>
            @endif
          @endforeach
        @endif
      </div>
      </div>
    </section>
    <!-- Solution section -->
    <section class="section">
      <div class="section-cutout cutout-top-right bg-secondary"></div>
      <div class="site-wrapper">
        <div class="section-heading-container text-white">
          <h2 class="section-heading dark-text">
            @if($home)
              @foreach($home as $value)
                @if($value->section_title == 'fifth_title')
                  @php
                    $fifth_title = $value->data;
                  @endphp
                @elseif($value->section_title == 'fifth_sub_title')
                  @php
                    $fifth_sub_title = $value->data;
                  @endphp
                @elseif($value->section_title == 'fifth_description')
                  @php
                    $fifth_description = $value->data;
                  @endphp
                @endif
              @endforeach
            @endif
              @if(!empty($fifth_title)){{ $fifth_title }}@endif<br/>@if(!empty($fifth_sub_title)){{ $fifth_sub_title }}@endif
          </h2>
          <div class="section-heading-subtext dark-text">
            @if(!empty($fifth_description)){{ $fifth_description }}@endif
          </div>
        </div>
        <div class="_4-col-grid domain-grid">
          @if($post)
            @foreach($post as $value)
              @if($value->section_title=='fifth_section')
                <a href="#" class="domain-card">
                  <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" width="230" height="160"alt="{{ $value->title }} " class="domain-card-img"/>
                  <div class="domain-btn">
                    <div>{{ $value->title }}</div>
                    <div class="domain-chevron w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 13.046 20.435">
                        <g id="chevron-white" transform="translate(-447.478 -5691.282)">
                          <g id="Group_7375" data-name="Group 7375" transform="translate(450.306 5694.111)">
                            <line id="Line_1152" data-name="Line 1152" x2="7.389" y2="7.389" fill="none"stroke="currentColor" stroke-linecap="round" stroke-width="4"/>
                            <line id="Line_1153" data-name="Line 1153" y1="7.389" x2="7.389" transform="translate(0 7.389)" fill="none" stroke="currentColor" stroke-linecap="round"stroke-width="4"/>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </div>
                </a>
              @endif
            @endforeach
          @endif
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- Expertise section -->
    <section class="section section-small">
      <div class="site-wrapper">
        <div class="section-heading-container">
          <h2 class="section-heading">
            @if($home)
              @foreach($home as $value)
                @if($value->section_title == 'sixth_title')
                  @php
                    $sixth_title = $value->data;
                  @endphp
                @elseif($value->section_title == 'sixth_sub_title')
                  @php
                    $sixth_sub_title = $value->data;
                  @endphp
                @elseif($value->section_title == 'sixth_description')
                  @php
                    $sixth_description = $value->data;
                  @endphp
                @endif
              @endforeach
            @endif
            @if(!empty($six_title)){{ $sixth_title }}@endif <br />@if(!empty($sixth_sub_title)){{ $sixth_sub_title }}@endif
          </h2>
          <div class="section-heading-subtext">
            @if(!empty($sixth_description)){{ $sixth_description }}@endif
          </div>
        </div>
        <div class="_3-col-grid expert-grid">
          @if($post)
            @foreach($post as $value)
              @if($value->section_title=='sixth_section')
                <div class="expert-card">
                  <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" width="100" height="100" alt="{{ $value->title }}" class="expert-card-img"/>
                  <img src="{{ asset('theme/assets/img/png/Expert%20Card%20Images_mobile-25.png') }}" loading="lazy" width="100" height="100" alt="Tool icon - Switch your software fast with Zenoti" class="expert-card-img mobile-only"/>
                  <h3 class="expert-heading">{{ $value->title }}</h3>
                  <p>
                    {{ $value->description }}<br/>
                  </p>
                </div>
              @endif
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <!-- Partner section -->
    <section class="section section-small">
      <div class="site-wrapper">
        <div class="section-heading-container">
          <h2 class="section-heading">
            @if($home)
              @foreach($home as $value)
                @if($value->section_title == 'seventh_title')
                  @php
                    $seventh_title = $value->data;
                  @endphp
                @elseif($value->section_title == 'seventh_description')
                  @php
                    $seventh_description = $value->data;
                  @endphp
                @endif
              @endforeach
            @endif
            @if(!empty($seventh_title)){{ $seventh_title }}@endif
          </h2>
          <div class="section-heading-subtext">
            @if(!empty($seventh_description)){{ $seventh_description }}@endif
          </div>
        </div>
        <div class="partner-logo-container">
          @if($post)
            @foreach($post as $value)
              @if($value->section_title=='seventh_section')
                <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="Quickbooks logo - Zenoti&#x27;s partner" class="partner-logo"/>
              @endif
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <!-- Request a free demo form section -->
    <section class="section form-section">
      <div class="section-cutout cutout-top-left"></div>

@endsection

@push('footer-script')

@endpush
