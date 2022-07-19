@extends('admin.layout.layout')
@section('content')

<div class="py-4">
	<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
	    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
	        <li class="breadcrumb-item">
	            <a href="{{ '/dashboard' }}">
	                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
	            </a>
	        </li>
	        <li class="breadcrumb-item"><a href="#">Edit Post</a></li>
	    </ol>
	</nav>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT' , 'enctype' => 'multipart/form-data']) !!}
                @if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
							<li> {{ $error }} </li>
						@endforeach
					</div>
				@endif
				@if(session()->has('message'))
					<div class="alert alert-dismissible" style="color: red">
						{{ session('message') }}
					</div>
				@endif
                {{ Form::hidden('post_id',$post->id) }}
                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="my-1 me-2" for="country">Page</label>
                            {{ form::select('page_title', ['home'=>'Home','Spa'=>'Spa', 'Medspa'=>'MedSpa', 'Salon'=>'Salon', 'Fitness'=>'Fitness', 'Company'=>'Company', 'Appointment and Booking' => 'Appointment and Booking', 'Billing and Payments' => 'Billing and Payments', 'Business Intelligence' => 'Business Intelligence', 'Business Management' => 'Business Management', 'Marketing and Sales' => 'Marketing and Sales', 'Mobile Solutions' => 'Mobile Solutions', 'Resource' => 'Resource'],$post->page_title, ['class'=> 'form-control form-select']) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                    	<div class="mb-4">
                            <label for="name">Section Title</label>

                            {{ form::select('section_title', [
                                'first_section'=>'First Section',
                                'second_section'=>'Second Section',
                                'third_section'=>'Third Section',
                                'forth_section'=>'Forth Section',
                                'fifth_section'=>'Fifth Section',
                                'fifth_a_section'=>'Fifth A Section',
                                'fifth_b_section'=>'Fifth B Section',
                                'sixth_section'=>'Sixth Section',
                                'seventh_section'=>'Seventh Section',
                                'eight_section'=>'Eight Section',
                                'ninth_section'=>'Ninth Section',
                                'tenth_section'=>'Tenth Section',
                            ],$post->section_title, ['class'=> 'form-control form-select']) }}
                        </div>
                        <div class="mb-4">
                            <label for="name">Post Title</label>
                            {{ form::text('title',$post->title, ['class'=> 'form-control']) }}
                        </div>
                        <div class="mb-4">
                            <label for="name">Post Title</label>
                            {{ form::text('sub_title',$post->sub_title, ['class'=> 'form-control']) }}
                        </div>
                        <div class="mb-4">
                            <label for="name">Tags</label>
                            {{ form::text('tags',$post->tags, ['class'=> 'form-control', 'placeholder' => 'comma seperated items e.g Item 1, Item 2 etc']) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <div class="mb-4">
                            <label for="name">Post Description</label>
                            {{ form::textarea('description',$post->description, ['class'=> 'form-control','rows'=> '10']) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">Post Image</label>
                            {{ Form::hidden('old_image',$post->image) }}
                            {!! Form::file('image', ['class'=> 'form-control', 'id'=>'file']) !!}
                            @if($post->image)
                                <div class="mt-3">
                                    <img src="{{ url('/upload') }}/{{ $post->image }}" style="height: 100px;width: 100px;">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">Post Image</label>
                            {{ Form::hidden('old_thumbnail',$post->thumbnail) }}
                            {!! Form::file('thumbnail', ['class'=> 'form-control', 'id'=>'file']) !!}
                            @if($post->thumbnail)
                                <div class="mt-3">
                                    <img src="{{ url('/upload') }}/{{ $post->thumbnail }}" style="height: 100px;width: 100px;">
                                </div>
                            @endif
                        </div>
                    </div>
                    {!! Form::submit('Update', ['class'=> 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@push('footer-scripts')

@endpush
