@extends('layout/master')
@section('content')

    <!-- Start Hero section -->
    <section class="section hero-section light-green-bg">
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
        <div class="section-cutout cutout-top-right light-green-bg"></div>
        <div class="site-wrapper">
            <ul
                class="nav nav-tabs d-flex justify-content-center border-bottom-0"
                id="myTab"
                role="tablist"
            >
                @php $second_section_ids = ['front-desk', 'guests', 'manager']; @endphp
                @foreach($mobileSolutions as $index => $value)
                    @if($value->section_title == 'second_section')
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link {{ $index == 0 ? 'active' : ''}}"
                                id="{{$second_section_ids[$index]}}-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#{{$second_section_ids[$index]}}-pane"
                                type="button"
                                role="tab"
                                aria-controls="{{$second_section_ids[$index]}}-pane"
                                aria-selected="true"
                            >
                                {{ $value->data }}
                            </button>
                        </li>
                    @endif
                @endforeach

            </ul>
            <div class="pw-tabs-content tab-content" id="myTabContent">
                @php $second_section_index = 0 ; @endphp
                @foreach($all_posts as  $value)
                    @if($value->section_title == 'second_section')
                        <div
                            class="tab-pane fade {{$second_section_index == 0 ? ' show active' : ''}}"
                            id="{{$second_section_ids[$second_section_index]}}-pane"
                            role="tabpanel"
                            aria-labelledby="{{$second_section_ids[$second_section_index++]}}"
                            tabindex="0"
                        >
                            <div class="_2-col-grid pw-tab-grid">
                                <img
                                    loading="lazy"
                                    src="{{ asset('/upload') }}/{{ $value->image }}"
                                    alt=""
                                    class="pw-tab-img"
                                />
                                <div class="content-container">
                                    <h3 class="pw-tab-heading blue">
                                        {{ $value->title }}
                                    </h3>
                                    {!! $value->description  !!}
                                </div>
                                <div class="pw-tab-tags-wrapper center-bottom">
                                    @php
                                        $second_section_colors = ['purple', 'cyan', 'pink', 'blue', 'yellow', 'green'];
                                    @endphp
                                    @foreach(explode(',', $value->tags) as $index => $tag)
                                        <a href="/appointment-management" class="pw-tab-tag {{$second_section_colors[$index]}}">
                                            <img
                                                loading="lazy"
                                                src="assets/img/png/mmb-tag-appoint-booking-manag.png"
                                                alt=""
                                                class="pw-tag-img"
                                            />
                                            <div>{{$tag}}</div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <section class="section orange-pink-bg">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($mobileSolutions as $value)
                    @if($value->section_title == 'third_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            @foreach($all_posts as $value)
                @if($value->section_title == 'third_section')
                    <a
                        href="#"
                        class="section-video-wrapper center w-lightbox"
                        aria-label="open lightbox"
                        aria-haspopup="dialog"
                    ><div class="section-video-container">
                            <img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="section-video-thumbnail"
                                data-xblocker="passed"
                                style="visibility: visible"
                            /><img
                                src="assets/img/svg/blue-play-icon.svg"
                                loading="lazy"
                                alt="blue play button"
                                class="play-icon"
                                data-xblocker="passed"
                                style="visibility: visible"
                            />
                        </div></a>
                @endif
            @endforeach
        </div>
        <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <section class="section section-small">
        <div class="site-wrapper">
            @foreach($all_posts as $value)
                @if($value->section_title == 'forth_section')
                    <div class="_2-col-grid center-align">
                        <img
                            src="{{ asset('/upload') }}/{{ $value->image }}"
                            loading="lazy"
                            id="w-node-d7407ea8-da50-76ee-09f1-ecae1b74b42a-7b4f2d95"
                            alt=""
                            class="section-img"
                            data-xblocker="passed"
                            style="visibility: visible"
                        />
                        <div class="content-container">
                            <h2 class="section-heading">
                                {{ $value->title }}
                            </h2>
                            <div class="btn-container mob-center">
                                <a
                                    href="https://www.zenoti.com/e-books/the-benefits-of-going-mobile-for-your-salon-or-spa"
                                    target="_blank"
                                    class="button"
                                >
                                    <img
                                        src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}"
                                        loading="lazy"
                                        alt="Orange color button"
                                        class="button-bg"
                                    />
                                    <div class="btn-text">Download eBook</div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- End Section 4 -->

    <!-- Start Section 5 -->
    <section class="section lighter-purple-bg">
        <div class="section-cutout cutout-top-left"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($mobileSolutions as $index => $value)
                    @if($value->section_title == 'fifth_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            <div class="_3-col-grid pillar-3-col-3d">
                @php $fifth_section_index = 0; @endphp
                @foreach($all_posts as $value)
                    @if($value->section_title == 'fifth_section')
                        <div
                            id="w-node-c52fe05c-7a51-f0e0-2906-e826a53521af-7b4f2d95"
                            class="pillar-3dg-item"
                        >
                            <img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="pillar-3dg-img ms-book-now"
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
    <!-- End Section 5 -->

    <!-- Start Section 6 -->
    <section class="section yellow-bg ct-slide-section">
        <div class="section-cutout cutout-top-right lighter-purple-bg"></div>
        <div class="site-wrapper">
            <div
                id="carouselIndicators"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner overflow-visible">
                    <div class="carousel-item active">
                        @foreach($all_posts as $value)
                            @if($value->section_title == 'sixth_section')
                                <div class="customer-testimonial-slide wider">
                                    <div class="body-medium text-center">
                                        {{ $value->description  }}
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
                                            <div class="ct-author-name">
                                                {{ $value->title }}
                                            </div>
                                            <div class="ct-author-designation">{{ $value->sub_title }}</div>
                                            <img
                                                src="{{ asset('/upload') }}/{{ $value->thumbnail }}"
                                                loading="lazy"
                                                alt=""
                                                class="ct-author-logo miniluxe"
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
                            @endif
                        @endforeach
                    </div>
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
    </section>
    <!-- End Section 6 -->

    <!-- Start Section 7 -->
    <section class="section">
        <div class="section-cutout cutout-top-left yellow-bg"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($mobileSolutions as $index => $value)
                    @if($value->section_title == 'seventh_section')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            <div class="_4-col-grid also-interested-grid _3c">
                @php
                    $seventh_section_colors = [
                                                'lighter-yellow-bg', 'light-orange-bg', 'light-cyan-bg',
                                                'lighter-purple-bg', 'light-blue', 'lighter-pink-bg'
                                             ];
                    $seventh_section_count = 0;
                @endphp
                @foreach($all_posts as  $value)
                    @if($value->section_title == 'seventh_section')
                        <a href="/analytics" class="interested-in-card {{$seventh_section_colors[$seventh_section_count++]}}"
                        ><img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="iic-img"
                                data-xblocker="passed"
                                style="visibility: visible"
                            />
                            <div>{{ $value->title }}</div></a>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- Start Section 7 -->

<!-- Start FAQ Section 11 -->
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
<!-- End FAQ Section 11 -->

    <!-- Request a free demo form section -->
    <section class="section form-section">
        <div class="section-cutout cutout-top-left blue-bg"></div>
@endsection
@push('footer-script')
@endpush
