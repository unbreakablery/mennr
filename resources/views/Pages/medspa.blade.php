@extends('layout/master')
@section('content')
    <!-- Hero section -->
    <section class="section hero-section mid-blue-bg">
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
			                	<img src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}" loading="lazy" alt="Request demo with Zenoti - orange color button"class="button-bg brown-bg"/>
			                	<div class="btn-text">Get A Free Demo</div>
			              	</a>
			            </div>
          			</div>
          			<img src="{{ asset('/upload') }}/{{ $value->image }}" loading="eager" alt="" class="hero-illustration"/>
          		@endif
          @endforeach
        </div>
      </div>
    </section>
    <!-- Section 2 -->
    <section class="section">
      <div class="section-cutout cutout-top-right mid-blue-bg"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($medspa as $value)
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
        <div class="_2-col-grid">
        	@foreach($all_posts as $value)
            	@if($value->section_title=='second_section')  
          			<div class="content-container center-align">
            			<img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="card-img-120"/>
            			<div class="body-normal fw-bold">{{ $value->title }}</div>
            			<div>
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
        	@foreach($medspa as $value)
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
             		@if($value->title == "Calendar")
             			@php 
             				$id = "w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d2d-124f2d93"; 
             				$class = "magenta";
             			@endphp
             		@elseif($value->title == "Automated")
             			@php 
             				$id ="w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d29-124f2d93";
             				$class = "green"; 
             			@endphp
             		@elseif($value->title == "Radeemtion")
             			@php 
             				$id = "w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d25-124f2d93";
             				$class = "pink";
             			@endphp
             		@elseif($value->title == "Employement")
             			@php 
             				$id="w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d31-124f2d93";
             				$class = "blue";
             			@endphp
             		@elseif($value->title == "Inventory")
             			@php 
             				$id="w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d35-124f2d93";
             				$class = "yellow"; 
             			@endphp
             		@else
             			@php 
             				$id="w-node-_71c3643e-c7bb-cb8a-7f9e-e7758f745d2d-124f2d93"; 
             				$class = "magenta";
             			@endphp
             		@endif
          			<div id="{{ $id }}" class="card-layout-2 {{ $class }}">
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
        	@foreach($medspa as $value)
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
        <div class="_2-col-grid">
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
        	@foreach($medspa as $value)
            	@if($value->section_title == 'fifth_title')
          			<h2 class="section-heading text-dark">
            			{{ $value->data }}
          			</h2>
          		@endif
          		@if($value->section_title == 'fifth_description')
          			<div class="section-heading-subtext">
            			{{ $value->data }}
          			</div>
          		@endif
          	@endforeach
        </div>
        <div class="card-flex-container solutions">
        	@foreach($all_posts as $value)
            	@if($value->section_title=='fifth_section')
		         	<div class="content-container center-align solution">
		            	<img src="{{ asset('/upload') }}/{{ $value->image }}" loading="lazy" alt="" class="section-icon"/>
		            	<div class="body-normal icon-heading"> {{ $value->title }} </div>
		          	</div>
          		@endif
          	@endforeach
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right"></div>
    </section>
    <!-- Section 6 -->
    <section class="section">
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($medspa as $value)
            	@if($value->section_title == 'sixth_title')
          			<h2 class="section-heading">
            			{{ $value->data }}
          			</h2>
          		@endif
           		@if($value->section_title == 'sixth_description')
					<div class="section-heading-subtext margin-bottom10px">
           				{{ $value->data }}
          			</div>
          		@endif
          	@endforeach
        </div>
      </div>
    </section>
    <!-- Section 7 -->
    <section class="section blue-bg">
      <div class="section-cutout cutout-top-right"></div>
      <div class="site-wrapper">
        <div class="section-heading-container">
        	@foreach($medspa as $value)
            	@if($value->section_title == 'seventh_title')
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