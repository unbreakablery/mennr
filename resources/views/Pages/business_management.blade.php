@extends('layout/master')
@section('content')

    <!-- Start Hero section -->
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

    <!-- Section 2 -->
    <section class="section bottom-padding-half">
        <div class="section-cutout cutout-top-right light-orange-bg"></div>
        <div class="site-wrapper">
            <ul
                class="nav nav-tabs d-flex justify-content-center border-bottom-0"
                id="myTab"
                role="tablist"
            >
                @php $second_section_ids = ['front-desk', 'profile', 'contact', 'disabled']; @endphp
                @foreach($businessManagement as $index => $value)
                    @if($value->section_title == 'second_section')
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link {{$index == 0 ? 'active' : ''}}"
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
                    @php $second_section_index  = 0 ; @endphp
                    @foreach($all_posts as  $value)
                        @if($value->section_title == 'second_section')
                        <div
                            class="tab-pane fade show {{$second_section_index == 0 ? 'active' : ''}}"
                            id="{{$second_section_ids[$second_section_index]}}-pane"
                            role="tabpanel"
                            aria-labelledby="{{$second_section_ids[$second_section_index++]}}"
                            tabindex="0"
                        >
                            <div class="_2-col-grid pw-tab-grid">
                                <img
                                    width="494"
                                    height="445"
                                    src="{{ asset('/upload') }}/{{ $value->image }}"
                                    loading="lazy"
                                    alt=""
                                    class="pw-tab-img"
                                />
                                <div class="content-container">
                                    <h3 class="pw-tab-heading blue">{{ $value->sub_title }}</h3>
                                    <div class="body-medium pw-tab-text">
                                        {{ $value->description }}
                                    </div>
                                    <div class="pw-tab-tags-wrapper">
                                        @php
                                            $second_section_colors = ['purple', 'cyan', 'pink', 'blue', 'yellow', 'green','purple', 'cyan', 'pink'];
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
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <section class="section honeydew-green bottom-padding-half">
        <div class="section-cutout cutout-top-right"></div>
        <div class="site-wrapper">
            <div class="section-heading-container more-top-margin">
                @foreach($businessManagement as $value)
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
            @foreach($all_posts as $value)
                @if($value->section_title == 'third_section')
                <div class="section-img-container center-align">
                    <img
                        src="{{ asset('/upload') }}/{{ $value->image }}"
                        loading="lazy"
                        alt=""
                        class="section-img max-w-640"
                    />
                </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <section class="section">
        <div class="section-cutout cutout-top-right honeydew-green"></div>
        <div class="site-wrapper">
            @foreach($all_posts as $value)
                @if($value->section_title == 'forth_section')
                    <div class="_2-col-grid mmb-do-what-couldnt">
                        <div class="content-container tab-center">
                            <h2 class="section-heading text-dark">
                                {{$value->title}}
                            </h2>
                            <div class="body-medium">
                                {{$value->description}}
                            </div>
                        </div>
                        <img
                            src="{{ asset('/upload') }}/{{ $value->image }}"
                            loading="lazy"
                            alt=""
                            class="section-img"
                        />
                    </div>
                @endif
            @endforeach
        </div>
        <div class="section-cutout cutout-bottom-right lighter-purple-bg-2"></div>
    </section>
    <!-- End Section 4 -->

    <!-- Start Section 5 -->
    <section class="section lighter-purple-bg-2 section-small">
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($businessManagement as $value)
                    @if($value->section_title == 'fifth_title')
                        <h2 class="section-heading text-dark">
                            Our all-in-one platform boosts productivity and growth
                        </h2>
                    @endif
                    @if($value->section_title == 'fifth_sub_title')
                        <div class="section-heading-subtext">
                            With a unified brand and streamlined operations, Zenoti delivers
                            significant growth potential, operational efficiencies, and cost
                            savings.
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="_3-col-grid pillar-3-col-3d">
                @php $fifth_section_index = 0; @endphp
                @foreach($all_posts as $value)
                    @if($value->section_title == 'fifth_section')
                        <div class="pillar-3dg-item {{ ++$fifth_section_index > 3 ? 'pillar-2' : '' }}">
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
    <!-- End Section 5 -->

    <!-- Start Section 6 -->
    <section class="section">
        <div class="section-cutout cutout-top-right lighter-purple-bg-2"></div>
        <div class="site-wrapper">
            <div class="section-heading-container">
                @foreach($businessManagement as $value)
                    @if($value->section_title == 'sixth_title')
                        <h2 class="section-heading text-dark">
                            {{ $value->data }}
                        </h2>
                    @endif
                @endforeach
            </div>
            @foreach($all_posts as $value)
                @if($value->section_title == 'sixth_section')
                    <div
                        href="#"
                        class="section-video-wrapper center"
                        aria-label="open lightbox"
                        aria-haspopup="dialog"
                    ><div class="section-video-container">
                            <img
                                src="{{ asset('/upload') }}/{{ $value->image }}"
                                loading="lazy"
                                alt=""
                                class="section-video-thumbnail"
                            /><img
                                src="assets/img/svg/blue-play-icon.svg"
                                loading="lazy"
                                alt="blue play button"
                                class="play-icon"
                            />
                        </div>
                    >
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- End Section 6 -->

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
