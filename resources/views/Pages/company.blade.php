@extends('layout/master')
@section('content')
    

    <!-- Hero section -->
    <section class="section hero-section company-bg">
      <div class="site-wrapper">
        <div class="_2-col-grid hero-grid">
          <div class="content-container">
            @foreach($all_posts as $value)
                @if($value->section_title=='first_section')
                    <h1>
                        {{ $value->title }}
                    </h1>
                @endif
            @endforeach
          </div>
          <div class="hero-video-wrapper align-self-center">
            <a
              href="#"
              class="hero-video-container mw-100 d-inline-block w-lightbox"
              aria-label="open lightbox"
              aria-haspopup="dialog"
            >
              <img
                src="{{ asset('theme/assets/img/jpg/maxresdefault.jpeg') }}"
                loading="lazy"
                alt=""
                class="section-video-thumbnail"
              />
              <img
                src="{{ asset('theme/assets/img/svg/blue-play-icon.svg') }}"
                loading="lazy"
                alt="blue play button"
                class="play-icon"
              />
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2-->
    <section class="section">
      <div
        class="section-cutout cutout-top-right customer-bg-cutout-blue"
      ></div>
      <div class="site-wrapper">
        <div class="_2-col-grid center-align story-wrapper">
          <div id="w-node-a55843cd-fd1d-c8f9-7648-f46807086ac4-9e4f2cbc" class="content-container story-sticky-block">
            @foreach($company as $value)
                @if($value->section_title == 'second_title')
                    <h2 class="section-heading big-heading">
                        {{ $value->data }}
                    </h2>
                @endif
                @if($value->section_title == 'second_description')
                    <div class="body-normal">
                        {{ $value->data }}
                    </div>
                @endif
            @endforeach
          </div>
          <div class="story-grid">
            @foreach($history as $value)
              <div>
                <div class="story-content-block">
                  <div class="story-year">{{ $value->year}}</div>
                  <div class="story-circle"></div>
                  <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="company-story-img"/>
                </div>
                <div class="body-normal story-text">
                  {{$value->detail}}
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Section 3 -->
    <section class="section purple-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="_3-col-grid company-success-grid">
          <h2 class="company-success-heading">
            Today, we enjoy success on many measures.
          </h2>
          <div class="company-success-card purple">
            <div>8</div>
            <div class="company-success-text">Offices</div>
          </div>
          <div class="company-success-card yellow">
            <div>650+</div>
            <div class="company-success-text">Employees</div>
          </div>
          <div class="company-success-card green">
            <div>1,000</div>
            <div class="company-success-text">Brands</div>
          </div>
          <div class="company-success-card blue">
            <div>15,000+</div>
            <div class="company-success-text">Businesses</div>
          </div>
          <div class="company-success-card pink">
            <img
              src="{{ asset('theme/assets/img/png/company_delloite.png') }}"
              loading="lazy"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>

    <!-- Section 4 -->
    <section class="section">
      <div class="section-cutout cutout-top-left"></div>
      <div class="site-wrapper">
        <div class="_2-col-grid center-align right-col-big">
          @foreach($all_posts as $value)
            @if($value->section_title=='forth_section')
          <div class="content-container">
            <h2 class="section-heading big-heading">
              {{ $value->title }}
            </h2>
            
            <div class="body-normal">
              {{ $value->description }}
            </div>
            
            <div class="btn-container">
              <a href="#" class="button rm-32">
                <img src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}" loading="lazy" alt="Orange color button" class="button-bg"/>
                <div class="btn-text">Know More</div>
              </a>
            </div>
          </div>
          <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 52vw, (max-width: 1279px) 48vw, 588.0018310546875px" alt="" class="section-img"/>
          @endif
          @endforeach
        </div>
      </div>
    </section>

    <!-- Section 5 -->
    <section class="section light-green-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
            @foreach($company as $value)
                @if($value->section_title == 'fifth_title')
                    <h2 class="section-heading text-dark">
                        {{ $value->data }}
                    </h2>
                @endif
            @endforeach
        </div>
        <div class="_4-col-grid team-grid">
            @foreach($leaders as $value)
                <div class="content-container center-align">
                    <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="team-img"/>
                    <div class="body-medium text-bold">{{ $value->name }}</div>
                    <div class="body-normal">{{ $value->designation }}</div>
                </div>
            @endforeach  
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>

    <!-- Section 6 -->
    <section class="section">
      <div class="site-wrapper">
        <div class="section-heading-container">
            @foreach($company as $value)
                @if($value->section_title == 'fifth_title')
                    <h2 class="section-heading">
                        {{ $value->data }}
                    </h2>
                @endif
            @endforeach
        </div>
        <div class="_4-col-grid team-grid team-5col-addn">
          @foreach($executives as $value)
                <div class="content-container center-align">
                    <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="team-img"/>
                    <div class="body-medium text-bold">{{ $value->name }}</div>
                    <div class="body-normal">{{ $value->designation }}</div>
                </div>
            @endforeach  

          
        </div>
      </div>
    </section>

    <!-- Section 7 -->
    <section class="section blue-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
            @foreach($company as $value)
                @if($value->section_title == 'seventh_title')
                    <h2 class="section-heading text-dark">
                        {{ $value->data }}
                    </h2>
                @endif
                @if($value->section_title == 'seventh_description')
                    <div class="section-heading-subtext">
                        {{ $value->data }}
                    </div>
                @endif
            @endforeach
        </div>
        <div class="_3-col-grid company-success-grid">
            @foreach($all_posts as $value)
              @if($value->section_title=='seventh_section')
          <div class="company-logo-container">
            <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt=""/>
          </div>
           @endif
          @endforeach
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>

    <!-- Section 8-->
    <section class="section">
      <div class="section-cutout cutout-top-left"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
            @foreach($company as $value)
                @if($value->section_title == 'eighth_title')
                    <h2 class="section-heading">
                        {{ $value->data }}
                    </h2>
                @endif
            @endforeach
        </div>
        <div class="_3-col-grid">
          <div class="compay-social-card blue">
            <div class="company-social-block">
              <img
                src="{{ asset('theme/assets/img/svg/wordpress-icon.svg') }}"
                loading="lazy"
                alt=""
                class="company-social-icon"
              />
              <div>
                Bookmark the Zenoti blog and join us for regular posts on beauty
                industry news, best practices and seasonal stories.
              </div>
            </div>
            <div class="company-social-content-wrapper">
              <div>
                <img
                  src="{{ asset('theme/assets/img/png/blog-haircut.png') }}"
                  loading="lazy"
                  alt=""
                  class="company-social-img"
                />
                <div class="body-normal cs-heading">
                  From One Stylist to Another: 9 Hair Tips Your Guests Will Love
                </div>
                <div class="body-small">
                  Elevate your guest’s haircare knowledge and help them feel
                  good and find great with nine top tips from professional
                  stylists.
                </div>
              </div>
              <a
                href="/blogs/from-one-stylist-to-another-9-hair-tips-your-guests-will-love"
                class="small-btn blue-bg w-button"
                >Learn more</a
              >
            </div>
          </div>
          <div class="compay-social-card gray">
            <div class="company-social-block">
              <img
                src="{{ asset('theme/assets/img/svgnews-icon.svg') }}"
                loading="lazy"
                alt=""
                class="company-social-icon"
              />
              <div>See what the media has to say about Zenoti.</div>
            </div>
            <div class="company-social-content-wrapper">
              <div>
                <img
                  src="{{ asset('theme/assets/img/png/go-big-News.png') }}"
                  loading="lazy"
                  alt=""
                  class="company-social-img"
                />
                <div class="body-x-small">12 August, 2020</div>
                <div class="body-normal cs-heading">
                  Zenoti Unveils New Brand Campaign that Celebrates Beauty,
                  Wellness and Fitness Industries
                </div>
                <div class="body-small">
                  Zenoti announced the launch of their new brand campaign – ‘Go
                  Zenoti’. The multimedia campaign comprises video, digital, and
                  social ads and is intended to project Zenoti’s leadership in
                  this category.
                </div>
              </div>
              <a
                href="/press/zenoti-unveils-new-brand-campaign-that-celebrates-beauty-wellness-and-fitness-industries"
                class="small-btn gray-bg w-button"
                >Learn more</a
              >
            </div>
          </div>
          <div class="compay-social-card green">
            <div class="company-social-block">
              <img
                src="{{ ('theme/assets/img/svg/calendar-icon.svg') }}"
                loading="lazy"
                alt=""
                class="company-social-icon"
              />
              <div>
                Learn about new product launches and get expert advice on how
                our cool features accelerate your growth.
              </div>
            </div>
            <div class="company-social-content-wrapper">
              <div>
                <img
                  src="{{ asset('theme/assets/img/png/Innovate.png') }}"
                  loading="lazy"
                  sizes="(max-width: 479px) 87vw, (max-width: 767px) 24vw, (max-width: 991px) 26vw, (max-width: 1279px) 25vw, 302.6799011230469px"
                  alt=""
                  class="company-social-img"
                />
                <div class="body-normal cs-heading">Innovate Online 2021</div>
                <div class="body-small">
                  Join us for Innovate Online, Zenoti’s online user conference
                  series and a ﬁrst-of-its-kind industry experience.
                </div>
              </div>
              <a
                href="https://go.zenoti.com/innovate.html"
                class="small-btn green-bg w-button"
                >Learn more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 9 -->
    <section class="section yellow-bg map-section">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
          @foreach($company as $value)
            @if($value->section_title=='ninth_title') 
              <h2 class="section-heading text-dark">
                {{ $value->data }}
              </h2>
            @endif
          @endforeach
        </div>
      </div>
      <div class="map-wrapper-new">
        @foreach($all_posts as $value)
            @if($value->section_title=='ninth_section')
        <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" sizes="(max-width: 479px) 347.1993103027344px, (max-width: 767px) 93vw, (max-width: 991px) 694.3986206054688px, 991.998046875px" alt=""
          class="map-bg"/>
          @endif
         @endforeach 
        <div class="map-pin-container bellevue">
          <div class="pointer_address">
            <div class="location_name-2">BELLEVUE</div>
            <div class="body-small">
              15395 SE 30th Place, Suite 100Bellevue, WA 98007
            </div>
            <a href="tel:877-481-7634" class="map-link">
              <div class="body-small">Call: 877-481-7634</div> </a
            ><a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container manchester">
          <div class="pointer_address">
            <div class="location_name-2">MANCHESTER</div>
            <div class="body-small">
              Jackson House, Sibson Road, <br />Sale Cheshire, M33 7RR,
              <br />United Kingdom.<a
                href="https://zenoti.webflow.io/company/about-us#"
                ><br
              /></a>
            </div>
            <a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container dubai">
          <div class="pointer_address left">
            <div class="location_name-2">DUBAI</div>
            <div class="body-small">
              3008, Al Shatha Tower<br />Dubai Internet City<br />Dubai, UAE<a
                href="https://zenoti.webflow.io/company/about-us#"
                ><br
              /></a>
            </div>
            <a href="tel:+971527778764" class="map-link">
              <div class="body-small">Call: +971 52 777 8764</div> </a
            ><a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container hyderabad">
          <div class="pointer_address left">
            <div class="location_name-2">HYDERABAD</div>
            <div class="body-small">
              RMZ Futura Block A, Plot No 14 &amp; 15, Hitech city Phase 2,
              Madhapur, Hyderabad, Telangana- 500081
            </div>
            <a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container kuala-lumpur">
          <div class="pointer_address left">
            <div class="location_name-2">KUALA&nbsp;LUMPUR</div>
            <div class="body-small">
              Level 28-03-03A, PJ Exchange No.16A Persiaran Barat Selangor Darul
              Ehsan 46050 Petaling Jaya Malaysia<a
                href="https://zenoti.webflow.io/company/about-us#"
                ><br
              /></a>
            </div>
            <a href="tel:+60379620136" class="map-link">
              <div class="body-small">Call: +60 3 7962 0136</div> </a
            ><a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container jakarta">
          <div class="pointer_address left">
            <div class="location_name-2">JAKARTA</div>
            <div class="body-small">
              DBS Bank Tower 28th Floor Ciputra World One Jl. Prof.Dr.Satrio Kav
              3-5 Jakarta 12940 Indonesia<a
                href="https://zenoti.webflow.io/company/about-us#"
                ><br
              /></a>
            </div>
            <a href="tel:+62-85-817782399" class="map-link">
              <div class="body-small">Call: +62-85-817782399</div> </a
            ><a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container manila">
          <div class="pointer_address left">
            <div class="location_name-2">MANILA</div>
            <div class="body-small">
              6th Floor, Cyber One Building 11 Eastwood Avenue Eastwood City
              Cyberpark Bagumbayan, Quezon City Philippines<a
                href="https://zenoti.webflow.io/company/about-us#"
                ><br
              /></a>
            </div>
            <a href="tel:+639-175365394" class="map-link">
              <div class="body-small">Call: +639-175365394</div> </a
            ><a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
        <div class="map-pin-container brisbane">
          <div class="pointer_address left">
            <div class="location_name-2">BRISBANE</div>
            <div class="body-small">
              Ground Floor - 1 Miles Platting Rd Eight Mile Plains QLD 4113,
              Australia<a href="https://zenoti.webflow.io/company/about-us#"
                ><br
              /></a>
            </div>
            <a href="tel:+61261450267" class="map-link">
              <div class="body-small">Call: +61 261450267</div> </a
            ><a href="mailto:admin@zenoti.com" class="map-link">
              <div class="body-small">Email: admin@zenoti.com</div>
            </a>
          </div>
          <img
            src="{{ asset('theme/assets/img/svg/pointer.svg') }}"
            loading="lazy"
            alt=""
            class="map-pin"
          />
        </div>
      </div>
    </section>


<!-- Request a free demo form section -->
    <section class="section form-section">
      <div class="section-cutout cutout-top-left yellow-bg"></div>
@endsection

@push('footer-script')

@endpush