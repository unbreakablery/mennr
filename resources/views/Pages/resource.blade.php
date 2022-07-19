@extends('layout/master')
@section('content')

   <!--Top Posts Banner Carousel-->
    <section class="section post-hero-section wf-section">
      	<div class="site-wrapper">
			<div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
			    <div class="carousel-inner">
			        @php $i = 1; @endphp
          			@foreach($first_section as $value)
         				@if($value->section_title=='first_section')
		         			@if($i == 1)
		         				@php 
		         					$text_id = "w-node-ddd59e0a-d406-9119-fbd7-b7a5fd3d59d2-6b4f2dcd"; 
		         					$image_id = "w-node-d9bb1fec-65a1-cb08-6a99-0a25e165e10e-6b4f2dcd";
		         				@endphp
		         			@elseif($i == 2)
		         				@php 
		         					$text_id = "w-node-befd78de-1882-9a2b-2bd3-29011bdaa15b-6b4f2dcd"; 
		         					$image_id = "w-node-befd78de-1882-9a2b-2bd3-29011bdaa165-6b4f2dcd";
		         				@endphp
		         			@elseif($i == 3)
		         				@php 
		         					$text_id = "w-node-d3ca7017-3fc2-3535-23dd-e2746a9fd325-6b4f2dcd"; 
		         					$image_id = "w-node-d3ca7017-3fc2-3535-23dd-e2746a9fd32f-6b4f2dcd";
		         				@endphp
		         			@else
		         				@php 
		         					$text_id="w-node-ddd59e0a-d406-9119-fbd7-b7a5fd3d59d2-6b4f2dcd"; 
		         					$image_id = "w-node-d9bb1fec-65a1-cb08-6a99-0a25e165e10e-6b4f2dcd";
		         				@endphp
         					@endif
				            <div class="carousel-item @if($i == 1) active @else  @endif">
				             	<div class="_2-col-grid hero-grid">
		                			<div id="{{ $text_id }}" class="content-container post-hero-slider">
		                  				<div>
				                    		<div class="post-preheading green">Top Posts</div>
							                <h1>
							                    {{ $value->title }}
							                </h1>
						                    <p>
						                      {{ $value->description }}
						                    </p>
				                  		</div>
						                <div class="btn-container">
						                    <a href="#" class="read-more-btn w-button">Read&nbsp;More</a>
						                </div>
		                			</div>
	                				<div id="{{ $image_id }}" class="post-hero-img-container">
	                  					<img alt="{{ $value->title }}" loading="lazy" src="{{ asset('/upload') }}/{{ $value->image }}" sizes="(max-width: 479px) 93vw, (max-width: 706px) 95vw, (max-width: 767px) 671px, (max-width: 991px) 44vw, (max-width: 1279px) 40vw, 499.984375px" class="post-hero-img"/>
	                				</div>
				              	</div>
				            </div>
				        @endif
				        @php $i++; @endphp
				    @endforeach
				</div>
				         
				<div class="carousel-indicators slide-nav resources-indicators">
				    <div class="active slider-dot" data-bs-target="#carouselIndicators" data-bs-slide-to="0" data-bs-interval="6000" aria-current="true" aria-label="Slide 1"></div>
            		<div class="slider-dot" data-bs-target="#carouselIndicators" data-bs-slide-to="1" data-bs-interval="6000" aria-label="Slide 2"></div>
            		<div class="slider-dot" data-bs-target="#carouselIndicators" data-bs-slide-to="2" data-bs-interval="6000" aria-label="Slide 3"></div>
				</div>
			</div>
      	</div>
    </section>


      <!-- Request a free demo form section -->
    <section class="section form-section">
      <div class="section-cutout cutout-top-left"></div>
@endsection

@push('footer-script')

@endpush