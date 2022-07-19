@extends('layout/master')
@section('content')

    <!-- Hero section -->
    <section class="section hero-section light-orange-bg">
        <div class="site-wrapper">
            <div class="_2-col-grid hero-grid">
                @foreach($all_posts as $value)
                    @if($value->section_title == 'first_section')
                        <div class="content-container">
                            <h1>
                                {{ $value->title }}
                            </h1>
                            <div class="body-medium">
                                {{ $value->description }}
                            </div>
                            <div class="btn-container">
                                <a href="#" aria-label="open lightbox" aria-haspopup="dialog">
                                    <div class="button">
                                        <img
                                            src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}"
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
    <!-- End Hero section -->

    <!-- Start Section 2 -->
    <section class="section bottom-padding-half">
        <div class="section-cutout cutout-top-right light-orange-bg"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($billingAndPayments as $value)
                    @if($value->section_title == 'second_title')
                        <h2 class="section-heading">
                            {{ $value->data }}
                        </h2>
                    @endif
                    @if($value->section_title == 'second_sub_title')
                        <div class="section-heading-subtext">
                            {{ $value->data }}
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
                                data-bs-target="#pillarPOSMobileOne"
                                aria-expanded="true"
                                aria-controls="pillarPOSMobileOne"
                            >
                                <h2 class="pillar-accordian-heading">{{$value->title}}</h2>
                                <img
                                    src="{{ asset('theme/assets/img/svg/chevron-white.svg') }}"
                                    loading="lazy"
                                    alt=""
                                    class="chevron-down dark-chevron"
                                />
                            </div>
                            <div class="collapse show" id="pillarPOSMobileOne">
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
                                data-tab="Tab {{$second_section_count - 1}}"
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
        </div>
    </section>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <section class="section cyan-bg bottom-padding-half">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($billingAndPayments as $value)
                    @if($value->section_title == 'third_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                        @if($value->section_title == 'third_sub_title')
                            <div class="section-heading-subtext">
                                {{ $value->data }}
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
                                data-tab="Tab {{$third_section_count - 1}}"
                                class="dark-pillar-tab-link"
                                id="tabs-1-data-tab-{{$third_section_count - 1}}"
                                data-bs-target="tabs-1-data-pane-{{$third_section_count - 1}}"
                                aria-controls="tabs-1-data-pane-{{$third_section_count - 1}}"
                                aria-selected="false"
                            >
                                <div class="service-loader-bar-base light-cyan">
                                    <div class="service-loader-bar-main dark-green"></div>
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
                                        src="{{ asset('/upload') }}/{{ $value->image }}"
                                        loading="lazy"
                                        alt=""
                                        class="prod-tab-img"
                                    />
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <section class="section">
        <div class="section-cutout cutout-top-right cyan-bg"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($billingAndPayments as $value)
                    @if($value->section_title === 'forth_title')
                        <h2 class="section-heading">{{ $value->data }}</h2>
                    @endif
                @endforeach
                @foreach($billingAndPayments as $value)
                    @if($value->section_title === 'fourth_sub_title')
                        <div class="section-heading-subtext">
                            {{ $value->data }}
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="_4-col-grid">
                @foreach($all_posts as $value)
                    @if($value->section_title === 'forth_section')
                    <div class="content-container center-align">
                        <img
                            src="{{ asset('/upload') }}/{{ $value->image }}"
                            loading="lazy"
                            alt=""
                            class="prod-3d-img"
                        />
                        <h3 class="body-medium">{{$value->title}}</h3>
                        <p>{{$value->description}}<br /></p>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 4 -->

    <!-- Start Section 5 -->
    <section class="section yellow-bg ct-slide-section">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div
                id="carouselIndicators"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner overflow-visible">
                    @foreach($all_posts as $value)
                        @if($value->section_title === 'fifth_section')
                            <div class="carousel-item active">
                                <div class="customer-testimonial-slide">
                                    <div class="body-medium text-center">
                                        {{$value->description}}
                                    </div>
                                    <div class="testimonial-separator"></div>
                                    <div class="d-flex">
                                        <img
                                            src="{{ asset('/upload') }}/{{ $value->image }}"
                                            loading="lazy"
                                            alt=""
                                            class="customer-testimonial-author-img"
                                        />
                                        <div class="d-flex flex-column">
                                            <div class="ct-author-name">{{$value->title}}</div>
                                            <div class="ct-author-designation">
                                                {{$value->sub_title}}
                                            </div>
                                            <img
                                                src="{{ asset('/upload') }}/{{ $value->thumbnail }}"
                                                loading="lazy"
                                                alt=""
                                                class="ct-author-logo ckt"
                                            />
                                        </div>
                                    </div>
                                    <img
                                        src="{{ asset('theme/assets/img/svg/ct-inverted-comma.svg') }}"
                                        loading="lazy"
                                        alt="inverted comma graphic"
                                        class="ct-inverted-comma"
                                    />
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="carousel-indicators ct-slide-nav testimonial-indicators">
                    <div
                        class="active slider-dot"
                        data-bs-target="#carouselIndicators"
                        data-bs-slide-to="0"
                        data-bs-interval="6000"
                        aria-current="true"
                        aria-label="Slide 1"
                    ></div>
                </div>
            </div>
        </div>
        <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- End Section 5 -->

    <!-- Start Section 6 -->
    <section class="section">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($billingAndPayments as $value)
                    @if($value->section_title === 'sixth_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                    @if($value->section_title === 'sixth_sub_title')
                        <div class="section-heading-subtext">
                            {{ $value->data }}
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="_3-col-grid prod-page-features-grid">
                @foreach($all_posts as $value)
                    @if($value->section_title === 'sixth_section')
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
    <!-- End Section 6 -->

    <!-- Section 7 -->
    <section class="section lighter-purple-bg-2">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            @foreach($all_posts as $value)
                @if($value->section_title === 'seventh_section')
                    <div class="_2-col-grid center-align">
                        <div class="content-container mobile-center-align">
                            <h2 class="section-heading text-dark">{{$value->title}}</h2>
                            <div class="body-medium">
                                {{$value->description}}
                            </div>
                        </div>
                        <img
                            src="{{ asset('/upload') }}/{{ $value->image }}"
                            loading="lazy"
                            alt=""
                            class="section-img mob-60"
                        />
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- End Section 7 -->

    <!-- Start Section 8 -->
    <section class="section">
        <div class="section-cutout cutout-top-left lighter-purple-bg-2"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($billingAndPayments as $value)
                    @if($value->section_title === 'eighth_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            <div class="_4-col-grid also-interested-grid">
                @foreach($all_posts as $value)
                    @if($value->section_title === 'eight_section')
                        <a href="/reports" class="interested-in-card lighter-yellow-bg">
                            <img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="iic-img"
                            />
                            <div>{{$value->title}}</div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 8 -->

    <!-- Start FAQ Section 9 -->
    <section class="section blue-bg">
        <div class="section-cutout cutout-top-right"></div>
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
    <!-- End FAQ Section 9 -->

    <!-- Request a free demo form section -->
    <section class="section form-section">
        <div class="section-cutout cutout-top-left blue-bg"></div>
@endsection
@push('footer-script')
@endpush
