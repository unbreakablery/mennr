@extends('layout/master')
@section('content')

    <!-- Start  Hero section -->
    <section class="section hero-section cyan-bg">
        <div class="site-wrapper">
            @foreach($all_posts as $value)
                @if($value->section_title == 'first_section')
                    <div class="_2-col-grid hero-grid">
                        <div class="content-container">
                            <h1>{{ $value->title }}</h1>
                            <div class="body-medium">
                                {{ $value->description }}
                            </div>
                            <div class="btn-container">
                                <a href="#" aria-label="open lightbox" aria-haspopup="dialog"
                                ><div class="button">
                                        <img
                                            src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}"
                                            loading="lazy"
                                            alt="Orange color button"
                                            class="button-bg"
                                        />
                                        <div class="btn-text">Watch Video</div>
                                    </div></a
                                >
                            </div>
                        </div>
                        <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="eager" alt="" class="hero-illustration align-self-center"/>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- End  Hero section -->

    <!-- Start Section 2 -->
    <section class="section bottom-padding-half">
        <div class="section-cutout cutout-top-right cyan-bg"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($marketingAndSales as $value)
                    @if($value->section_title == 'second_title')
                        <h2 class="section-heading">Automated marketing</h2>
                    @endif
                    @if($value->section_title == 'second_sub_title')
                            <div class="section-heading-subtext">
                                Reduce the time and expense involved in planning and executing
                                consistent, targeted campaigns and grow long-term revenue.
                            </div>
                    @endif
                @endforeach
            </div>
            <!-- Mobile version -->
            <div class="d-flex d-lg-none flex-column">
                @foreach($all_posts as $value)
                    @if($value->section_title == 'second_section')
                        <div class="_3-px-grey-separator"></div>
                        <div class="pillar-mobile-accordian product-page-separator">
                            <div
                                class="position-relative"
                                data-bs-toggle="collapse"
                                data-bs-target="#pillarEMMobileOne"
                                aria-expanded="true"
                                aria-controls="pillarEMMobileOne"
                            >
                                <h2 class="pillar-accordian-heading">{{$value->title}}</h2>
                                <img
                                    src="{{ asset('theme/assets/img/svg/chevron-white.svg') }}"
                                    loading="lazy"
                                    alt=""
                                    class="chevron-down dark-chevron"
                                />
                            </div>
                            <div class="collapse show" id="pillarEMMobileOne">
                                <p class="body-small dark-tab-para">
                                    {{$value->description}}
                                </p>
                                <img
                                    src="{{ asset('/upload') }}/{{ $value->image }}"
                                    loading="lazy"
                                    alt=""
                                    class="prod-page-tab-mob-img"
                                />
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Desktop version -->
            <div
                data-duration-in="6000"
                data-duration-out="500"
                data-current="Tab 1"
                data-easing="linear"
                class="am-pillar-tab-component"
            >
                <div class="tabs-menu order-last" role="tablist">
                    @php $second_section_count = 0; @endphp
                    @foreach($all_posts as $value)
                        @if($value->section_title == 'second_section')
                            @php ++$second_section_count; @endphp
                            <a
                                data-tab="Tab {{$second_section_count}}"
                                class="dark-pillar-tab-link"
                                id="tabs-0-data-tab-{{$second_section_count - 1}}"
                                data-bs-target="tabs-0-data-pane-{{$second_section_count - 1}}"
                                aria-controls="tabs-0-data-pane-{{$second_section_count - 1}}"
                                aria-selected="false"
                            >
                                <div class="service-loader-bar-base light-grey">
                                    <div class="service-loader-bar-main green"></div>
                                </div>
                                <h3 class="am-tab-heading">{{$value->title}}</h3>
                                <div class="hero-service-animate">
                                    <p class="body-small dark-tab-para">
                                        {{$value->description}}
                                    </p>
                                </div>
                            </a>
                        @endif
                    @endforeach

                </div>
                <div class="tabs-content order-first">
                    @php $second_section_count = 0; @endphp
                    @foreach($all_posts as $value)

                        @if($value->section_title == 'second_section')
                            @php ++$second_section_count; @endphp
                            <div
                                data-tab="Tab {{$second_section_count}}"
                                class="tab-pane"
                                id="tabs-0-data-pane-{{$second_section_count - 1}}"
                                role="tabpanel"
                                aria-labelledby="tabs-0-data-tab-{{$second_section_count - 1}}"
                            >
                                <div class="pillar-image-wrapper">
                                    <img
                                        loading="lazy"
                                        src="{{ asset('/upload') }}/{{ $value->image }}"
                                        alt=""
                                        class="prod-tab-img"
                                    />
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="btn-container center-align">
                <a href="#" aria-label="open lightbox" aria-haspopup="dialog">
                    <div class="button">
                        <img
                            src="assets/img/svg/btn-trapezoid-bg.svg"
                            loading="lazy"
                            alt="Orange color button"
                            class="button-bg"
                        />
                        <div class="btn-text">Watch Video</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <section class="section lighter-purple-bg-2 bottom-padding-half">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($marketingAndSales as $value)
                    @if($value->section_title == 'third_title')
                        <h2 class="section-heading text-dark">Centralized lead management</h2>
                    @endif
                    @if($value->section_title == 'third_sub_title')
                        <div class="section-heading-subtext">
                            Convert more leads with an all-in-one lead management system that
                            takes you from inquiry to appointment in just a few clicks - without
                            the overhead of a dedicated team.
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Mobile version -->
            <div class="d-flex d-lg-none flex-column">
                @foreach($all_posts as $value)
                    @if($value->section_title == 'third_section')
                        <div class="_3-px-grey-separator"></div>
                        <div class="pillar-mobile-accordian product-page-separator">
                            <div
                                class="position-relative"
                                data-bs-toggle="collapse"
                                data-bs-target="#pillarManagementMobileOne"
                                aria-expanded="true"
                                aria-controls="pillarManagementMobileOne"
                            >
                                <h2 class="pillar-accordian-heading">{{$value->title}}</h2>
                                <img
                                    src="{{ asset('theme/assets/img/svg/chevron-white.svg') }}"
                                    loading="lazy"
                                    alt=""
                                    class="chevron-down dark-chevron"
                                />
                            </div>
                            <div class="collapse show" id="pillarManagementMobileOne">
                                <p class="body-small dark-tab-para">
                                    {{$value->description}}
                                </p>
                                <img
                                    src="{{ asset('/upload') }}/{{ $value->image }}"
                                    loading="lazy"
                                    alt=""
                                    class="prod-page-tab-mob-img"
                                />
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Desktop version -->
            <div
                data-duration-in="6000"
                data-duration-out="500"
                data-current="Tab 1"
                data-easing="linear"
                class="am-pillar-tab-component"
            >
                <div class="tabs-menu order-last" role="tablist">
                    @php $third_section_count = 0; @endphp
                    @foreach($all_posts as $value)
                        @if($value->section_title == 'third_section')
                            @php ++$third_section_count; @endphp
                                <a
                                    data-tab="Tab {{$third_section_count}}"
                                    class="dark-pillar-tab-link"
                                    id="tabs-1-data-tab-{{$third_section_count - 1}}"
                                    data-bs-target="tabs-1-data-pane-{{$third_section_count - 1}}"
                                    aria-controls="tabs-1-data-pane-{{$third_section_count - 1}}"
                                    aria-selected="false"
                                >
                                    <div class="service-loader-bar-base light-purple">
                                        <div class="service-loader-bar-main purple-blue"></div>
                                    </div>
                                    <h3 class="am-tab-heading">{{$value->title}}</h3>
                                    <div class="hero-service-animate">
                                        <p class="body-small dark-tab-para">
                                            {{$value->description}}
                                        </p>
                                    </div>
                                </a>
                        @endif
                    @endforeach
                </div>
                <div class="tabs-content order-first">
                    @php $third_section_count = 0; @endphp
                    @foreach($all_posts as $value)

                        @if($value->section_title == 'third_section')
                            @php ++$third_section_count; @endphp
                                <div
                                    data-tab="Tab {{$third_section_count}}"
                                    class="tab-pane"
                                    id="tabs-1-data-pane-{{$third_section_count - 1}}"
                                    role="tabpanel"
                                    aria-labelledby="tabs-1-data-tab-{{$third_section_count - 1}}"
                                >
                                    <div class="pillar-image-wrapper">
                                        <img
                                            loading="lazy"
                                            src="{{ asset('/upload') }}/{{ $value->image }}"
                                            alt=""
                                            class="prod-tab-img"
                                        />
                                    </div>
                                </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="btn-container center-align">
                <a href="#" aria-label="open lightbox" aria-haspopup="dialog">
                    <div class="button">
                        <img
                            src="{{ asset('/upload') }}/{{ $value->image }}"
                            loading="lazy"
                            alt="Orange color button"
                            class="button-bg"
                        />
                        <div class="btn-text">Watch Video</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <section class="section">
        <div class="section-cutout cutout-top-right"></div>
        <div class="section-heading-container">
            @foreach($marketingAndSales as $value)
                @if($value->section_title == 'forth_title')
                    <h2 class="section-heading text-dark ch-limit">
                        Generate more revenue with AI-powered advertising
                    </h2>
                @endif
                @if($value->section_title == 'fourth_sub_title')
                    <div class="section-heading-subtext ch-limit">
                        Promote your services and products effectively with ad campaigns
                        across Google, Facebook, and Instagram with ezAds, a simple,
                        self-served advertising tool.
                    </div>
                @endif
            @endforeach
        </div>
        <div class="site-wrapper">
            <div class="_2-col-grid center-align small-gap">
                @foreach($all_posts as $value)
                    @if($value->section_title == 'forth_section')
                        <div class="content-container">
                            {!! $value->description !!}
                            <div class="btn-container">
                                <a href="#" aria-label="open lightbox" aria-haspopup="dialog"
                                ><div class="button">
                                        <img
                                            src="{{ asset('theme/assets/img/svg/chevron-white.svg') }}"
                                            loading="lazy"
                                            alt="Orange color button"
                                            class="button-bg"
                                        />
                                        <div class="btn-text">Watch Video</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="eager" alt="" class="hero-illustration align-self-center"/>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 4 -->

    <!-- Start Section 5 -->
    <section class="section dark-blue-bg">
        <div class="section-cutout cutout-top-right"></div>
        @foreach($all_posts as $value)
            @if($value->section_title == 'fifth_section')
            <div class="site-wrapper">
                <div class="section-img-container center-align">
                    <img
                        src="{{ asset('/upload') }}/{{ $value->image }}"
                        loading="lazy"
                        alt=""
                        class="section-img empower-employees"
                        data-xblocker="passed"
                        style="visibility: visible"
                    />
                </div>
                <div class="section-heading-container zero-bottom-margin">
                    <h2 class="section-heading">
                        {{$value->title}}
                    </h2>
                    <div class="section-heading-subtext max-w-732">
                        {{$value->sub_title}}
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        <div class="section-cutout cutout-bottom-right pastel-orange-bg"></div>
    </section>
    <!-- End Section 5 -->

    <!-- Start Section 6 -->
    <section class="section pastel-orange-bg">
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($marketingAndSales as $value)
                    @if($value->section_title == 'sixth_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            <div class="_3-col-grid pillar-3-col-3d">
                @foreach($all_posts as $value)
                    @if($value->section_title == 'sixth_section')
                        <div class="pillar-3dg-item">
                            <img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="pillar-3dg-img"
                            />
                            <div class="body-medium">
                                {!! $value->description  !!}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 6 -->

    <!-- Start Section 7 -->
    <section class="section yellow-bg">
        <div class="section-cutout cutout-top-right pastel-orange-bg"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($marketingAndSales as $value)
                    @if($value->section_title === 'seventh_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>

            @foreach($all_posts as $value)
                @if($value->section_title === 'seventh_section')
                    <a
                        href="#"
                        class="section-video-wrapper center"
                        aria-label="open lightbox"
                        aria-haspopup="dialog"
                    ><div class="section-video-container">
                            <img
                                src="{{ asset('/upload') }}/{{ $value->thumbnail }}"
                                loading="lazy"
                                alt=""
                                class=""
                                data-xblocker="passed"
                                style="visibility: visible"
                            /><img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt="blue play button"
                                class="play-icon"
                                data-xblocker="passed"
                                style="visibility: visible"
                            />
                        </div>
                    </a>
                @endif
            @endforeach

        </div>
        <div class="section-cutout cutout-bottom-right"></div>
    </section>
<!-- End Section 7 -->

    <!-- Start Section 8 -->
    <section class="section">
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($marketingAndSales as $value)
                    @if($value->section_title === 'eighth_title')
                        <h2 class="section-heading">
                            {{ $value->data }}
                        </h2>
                    @endif
                    @if($value->section_title === 'eighth_sub_title')
                        <div class="section-heading-subtext">
                            {{ $value->data }}
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="_3-col-grid prod-page-features-grid">
                @foreach($all_posts as $value)
                    @if($value->section_title === 'eight_section')
                        <div class="content-container center-align">
                            <img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="prod-3by3-grid-img"
                            />
                            <h3 class="body-medium">{{$value->title}}</h3>
                            <div>
                                {{$value->description}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 8 -->

    <!-- Start Section 9 -->
    <section class="section whitesmoke-sec padding-large">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($marketingAndSales as $value)
                    @if($value->section_title === 'ninth_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            <div class="_4-col-grid also-interested-grid">
                @php
                    $ninth_section_colors = [
                                    'green-alternate', 'light-orange-bg', 'lighter-blue-bg',
                                    'green-alternate', 'light-purple', 'lighter-blue-bg',
                                    'lighter-yellow-bg', 'light-orange-bg',
                                    ];
                    $ninth_section_index = 0;
                @endphp
                @foreach($all_posts as $value)
                    @if($value->section_title === 'ninth_section')
                        <a href="/feedback-reviews" class="interested-in-card {{$ninth_section_colors[$ninth_section_index++]}}"
                        ><img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="iic-img"
                                data-xblocker="passed"
                                style="visibility: visible"
                            />
                            <div>{{$value->title}}</div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 9 -->

<!-- Start FAQ Section 11 -->
<section class="section blue-bg">
    <div class="section-cutout cutout-top-left grey-bg"></div>
    <div class="site-wrapper">
        <div class="section-heading-container">
            <h2 class="section-heading text-dark">Frequently Asked Questions</h2>
        </div>
        <div class="accordion-wrapper">
            @foreach($faq as $index => $value)
                <div class="faq-item">
                    <div
                        class="faq-trigger accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq{{$index}}"
                        aria-expanded="true"
                        aria-controls="faq{{$index}}"
                    >
                        <h2 class="accordion-heading">
                            {{$value->question}}
                        </h2>
                        <div class="plus-icon">
                            <div class="plus-horizontal"></div>
                            <div class="plus-vertical"></div>
                        </div>
                    </div>
                    <div id="faq{{$index}}" class="faq-content collapse">
                        <p class="faq-answer">
                            {{$value->answer}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End FAQ Section 11 -->

    <!-- Request a free demo form section -->
    <section class="section form-section">
        <div class="section-cutout cutout-top-left blue-bg"></div>
@endsection
@push('footer-script')
@endpush
