@extends('layout/master')
@section('content')

    <!-- Hero section -->
    <section class="section hero-section">
      <div class="site-wrapper">
        <div class="_2-col-grid hero-grid">
        	@foreach($all_posts as $value)
            	@if($value->section_title=='first_section')
          			<div class="content-container align-self-center">
			            <h1>
			              {{ $value->title }}
			            </h1>
			            <div class="body-medium">
			              {{ $value->description }}
			            </div>
            			<div class="btn-container">
             				<a href="#" class="button rm-32" data-bs-toggle="modal" data-bs-target="#requestDemoModal">
                				<img src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}" loading="lazy" alt="Request demo with Zenoti - orange color button" class="button-bg brown-bg"/>
                				<div class="btn-text">Get A Free Demo</div>
              				</a>
              				<a data-w-id="9d136af9-44ac-0be2-011d-ad6114dd58ec" href="#" class="button secondary-btn">
                				<div class="btn-text secondary-btn-text">
                  					Download Datasheet
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
    <!-- Section 2 -->
    <section class="section">
      <div class="section-cutout cutout-top-right blue-bg"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($fitness as $value)
            	@if($value->section_title == 'second_title')
          			<h2 class="section-heading">
            			{{ $value->data }}
          			</h2>
          		@endif
          		@if($value->section_title == 'second_description')
          			<div class="section-heading-subtext">
            			{{ $value->data }}
          			</div>
           		@endif
          @endforeach
        </div>
        <div class="_8-col-grid">
        	@foreach($all_posts as $value)
              @if($value->section_title=='second_section')
                @if($value->title == "Online options")
                  @php 
                    $id = "w-node-c007bd62-b28e-d0f2-a24c-999967711296-cd4f2d78"; 
                  @endphp
                @elseif($value->title == "Front desk")
                  @php 
                    $id ="w-node-c8a61df0-1c79-2e67-4b58-5ae253329b51-cd4f2d78";
                  @endphp
                @elseif($value->title == "Track")
                  @php 
                    $id = "w-node-_09294154-3321-427a-cb94-e7549dd37d8d-cd4f2d78";
                  @endphp
                @elseif($value->title == "Messaging")
                  @php 
                    $id="w-node-b829a609-16af-af58-71aa-9101d3bc074e-cd4f2d78";
                  @endphp
                @elseif($value->title == "Instructor")
                  @php 
                    $id="w-node-e03b0081-8e50-399b-1463-bd575c62e06b-cd4f2d78";
                  @endphp
                @elseif($value->title == "Class schedules")
                  @php 
                    $id="w-node-_0de08274-a80c-76d5-3cec-9fad5528970d-cd4f2d78";
                  @endphp
                @elseif($value->title == "Automated")
                  @php 
                    $id="w-node-_3e8951f5-280a-6783-1071-1ad9bee8f94a-cd4f2d78";
                  @endphp
                @else
                  @php 
                    $id="w-node-_09294154-3321-427a-cb94-e7549dd37d8d-cd4f2d78"; 
                  @endphp
                @endif
          		<div id="{{ $id }}" class="content-container center-align">
            		<img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="card-img-120"/>
            		<div class="body-normal fw-bold">
            			{{ $value->description }}  			
            		</div>
          		</div>
          	@endif
          @endforeach
        </div>
      </div>
    </section>
    <!-- Section 3 -->
    <section class="section blue-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($fitness as $value)
            	@if($value->section_title == 'third_title')
		        	<h2 class="section-heading text-dark">
		            	{{ $value->data }}
		          	</h2>
          		@endif
            	@if($value->section_title == 'third_description')
          			<div class="section-heading-subtext">
            			{{ $value->data }}
          			</div>
          		@endif
          	@endforeach
        </div>
        <div class="_6-col-grid alternate">
          
          @foreach($all_posts as $value)
              @if($value->section_title=='third_section')
                @if($value->title == "Packages")
                  @php 
                    $id = "w-node-_1915050d-c068-819d-2256-30bb95dbe2d2-904f2de6"; 
                    $class = "pink";
                  @endphp
                @elseif($value->title == "Offer")
                  @php 
                    $id ="w-node-_1915050d-c068-819d-2256-30bb95dbe2d6-904f2de6";
                    $class = "green"; 
                  @endphp
                @elseif($value->title == "Alerts")
                  @php 
                    $id = "w-node-_1915050d-c068-819d-2256-30bb95dbe2da-904f2de6";
                    $class = "magenta";
                  @endphp
                @elseif($value->title == "platform")
                  @php 
                    $id="w-node-_1915050d-c068-819d-2256-30bb95dbe2de-904f2de6";
                    $class = "blue";
                  @endphp
                @elseif($value->title == "Membership")
                  @php 
                    $id="w-node-_1915050d-c068-819d-2256-30bb95dbe2e2-904f2de6";
                    $class = "yellow"; 
                  @endphp
                @else
                  @php 
                    $id="w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d2d-124f2d93"; 
                    $class = "magenta";
                  @endphp
                @endif
          <div id="{{$id}}" class="card-layout-2 {{$class}}">
            <img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="card-layout-2-icon"/>
            <div class="body-normal">
                {{ $value->description }}
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- Section 4 -->
    <section class="section">
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($fitness as $value)
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
        </div>
        <div class="_3-col-grid growth-grid">
        	@foreach($all_posts as $value)
             	@if($value->section_title=='forth_section')
          			<div class="d-flex flex-column text-center text-lg-start flex-lg-row align-items-center">
            			<img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="horizontal-content-img"/>
			            <div class="body-normal fw-bold">
			            	{{ $value->title }}
			            </div>
          			</div>
          		@endif
          @endforeach
        </div>
      </div>
    </section>
    <!-- Section 5 -->
    <section class="section yellow-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($fitness as $value)
            	@if($value->section_title == 'fifth_title')
          			<h2 class="section-heading text-dark">
            			{{ $value->data }}
          			</h2>
          		@endif
          	@endforeach
        </div>
        <div class="_2-col-grid fitness-grid">
          <a href="#" class="lightbox position-relative" aria-label="open lightbox" aria-haspopup="dialog">
            <img src="{{ asset('theme/assets/img/png/MicrosoftTeams-image-_174_ (1).png') }}" loading="lazy"
              sizes="(max-width: 479px) 93vw, (max-width: 767px) 96vw, (max-width: 991px) 44vw, (max-width: 1279px) 40vw, 504px"
              srcset="
                {{ asset('theme/assets/img/png/MicrosoftTeams-image-_174_%20(1)-p-500.png') }}   500w,
                {{ asset('theme/assets/img/png/MicrosoftTeams-image-_174_%20(1)-p-800.png') }}   800w,
                {{ asset('theme/assets/img/png/MicrosoftTeams-image-_174_%20(1)-p-1080.png') }} 1080w,
                {{ asset('theme/assets/img/png/MicrosoftTeams-image-_174_ (1).png') }}        1920w
              "alt="" class="section-lightbox-img"/>
            <img src="{{ asset('theme/assets/img/svg/btn-arow-1.svg') }}" loading="lazy" alt="playbutton lookalike arrow" class="play-icon"/>
            <script type="application/json" class="w-json">
              {
                "items": [
                  {
                    "url": "https://fast.wistia.net/embed/iframe/bjh73c8g38?pageUrl=https%3A%2F%2F",
                    "originalUrl": "https://fast.wistia.net/embed/iframe/bjh73c8g38?pageUrl=https%3A%2F%2F",
                    "width": 940,
                    "height": 529,
                    "thumbnailUrl": "https://embed-ssl.wistia.com/deliveries/b5a7f990c8d381a6284e094852f0a3dc.jpg?image_crop_resized=960x540",
                    "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2Fbjh73c8g38%3FpageUrl%3Dhttps%253A%252F%252F&display_name=Wistia%2C+Inc.&url=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2Fbjh73c8g38%3FpageUrl%3Dhttps%253A%252F%252F&image=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Fb5a7f990c8d381a6284e094852f0a3dc.jpg%3Fimage_crop_resized%3D960x540&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=wistia\" width=\"940\" height=\"529\" scrolling=\"no\" title=\"Wistia, Inc. embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                    "type": "video"
                  }
                ],
                "group": ""
              }
            </script>
          </a>
          @foreach($all_posts as $value)
          	@if($value->section_title=='fifth_a_section')
         		<div class="content-container fitness-video-header align-self-center">
            		<h3 class="fitness-heading">{{ $value->title }} </h3>
            		<div class="body-medium">
             			{{ $value->description }}
            		</div>
          		</div>
           	@endif
          @endforeach
        </div>
        <div class="_2-col-grid fitness-grid offset">
        @foreach($all_posts as $value)
          	@if($value->section_title=='fifth_b_section')
          <div class="content-container fitness-video-header align-self-center">
            <h3 class="fitness-heading">{{ $value->title }}</h3>
            <div class="body-medium">
              {{ $value->description }}
            </div>
          </div>
         	@endif
         @endforeach
          <a
            href="#"
            class="lightbox position-relative"
            aria-label="open lightbox"
            aria-haspopup="dialog"
          >
            <img
              src="{{ asset('theme/assets/img/png/MicrosoftTeams-image-_173_ (1).png')}}"
              loading="lazy"
              sizes="(max-width: 479px) 93vw, (max-width: 767px) 96vw, (max-width: 991px) 44vw, (max-width: 1279px) 40vw, 504px"
              srcset="
                {{ asset('theme/assets/img/png/MicrosoftTeams-image-_173_%20(1)-p-500.png') }}   500w,
                {{ asset('theme/assets/img/png/MicrosoftTeams-image-_173_%20(1)-p-800.png') }}   800w,
                {{ asset('assets/img/png/MicrosoftTeams-image-_173_%20(1)-p-1080.png') }} 1080w,
                {{ asset('assets/img/png/MicrosoftTeams-image-_173_ (1).png') }}        1920w
              "
              alt=""
              class="section-lightbox-img"
            />
            <img
              src="{{ asset('theme/assets/img/svg/btn-arow-1.svg')}}"
              loading="lazy"
              alt="playbutton lookalike arrow"
              class="play-icon"
            />
            <script type="application/json" class="w-json">
              {
                "items": [
                  {
                    "url": "https://fast.wistia.net/embed/iframe/750425tc9r?pageUrl=https%3A%2F%2F",
                    "originalUrl": "https://fast.wistia.net/embed/iframe/750425tc9r?pageUrl=https%3A%2F%2F",
                    "width": 940,
                    "height": 529,
                    "thumbnailUrl": "https://embed-ssl.wistia.com/deliveries/5dc8fa3d1782310d74b02e424555cc37.jpg?image_crop_resized=960x540",
                    "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2F750425tc9r%3FpageUrl%3Dhttps%253A%252F%252F&display_name=Wistia%2C+Inc.&url=https%3A%2F%2Ffast.wistia.net%2Fembed%2Fiframe%2F750425tc9r%3FpageUrl%3Dhttps%253A%252F%252F&image=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F5dc8fa3d1782310d74b02e424555cc37.jpg%3Fimage_crop_resized%3D960x540&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=wistia\" width=\"940\" height=\"529\" scrolling=\"no\" title=\"Wistia, Inc. embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                    "type": "video"
                  }
                ],
                "group": ""
              }
            </script>
          </a>
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- Section 6 -->
    <section class="section">
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($fitness as $value)
              	@if($value->section_title == 'sixth_title')
		        	<h2 class="section-heading">
		            	{{ $value->data }}
		          	</h2>
           		@endif
              	@if($value->section_title == 'sixth_description')
          			<div class="section-heading-subtext">
            			{{ $value->data }}
          			</div>
           		@endif
            @endforeach
        </div>
        <div class="_6-col-grid">
        	@foreach($all_posts as $value)
            	@if($value->section_title=='sixth_section')
          			<div class="content-container center-align">
            			<img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="fitness-need-img"/>
            			<div class="body-normal fw-bold">{{ $value->title }}</div>
          			</div>
           		@endif
          	@endforeach
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- Section 7 -->
    <section class="section">
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($fitness as $value)
            	@if($value->section_title == 'seventh_title')
          			<h2 class="section-heading">
            			{{ $value->data }}
          			</h2>
          		@endif
              	@if($value->section_title == 'seventh_description')
          			<div class="section-heading-subtext margin-bottom10px">
            			{{ $value->data }}
          			</div>
           		@endif
            @endforeach
        </div>
      </div>
    </section>
    <!-- Section 8 -->
    <section class="section blue-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
          @foreach($fitness as $value)
              @if($value->section_title == 'eighth_title')
                <h2 class="section-heading text-dark">{{ $value->data }}</h2>
              @endif
            @endforeach
        </div>
        <div class="accordion-wrapper">
          @php $i = 0; @endphp
            @foreach($faq as $value)
            <div class="faq-item">
                <div class="faq-trigger accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq{{$i}}" aria-expanded="true" aria-controls="faq{{$i}}">
                  <h2 class="accordion-heading">
                      {{ $value->question }}<br />
                  </h2>
                    <div class="plus-icon">
                      <div class="plus-horizontal"></div>
                      <div class="plus-vertical"></div>
                    </div>
                </div>
                <div id="faq{{$i}}" class="faq-content collapse">
                    <p class="faq-answer">
                      {{ $value->answer }}<br />
                    </p>
                </div>
              </div>
            @php $i++ @endphp
            @endforeach
        </div>
      </div>
    </section>
    <!-- Request a free demo form section -->
    <section class="section form-section">
      <div class="section-cutout cutout-top-left blue-bg"></div>
   

@endsection

@push('footer-script')

@endpush