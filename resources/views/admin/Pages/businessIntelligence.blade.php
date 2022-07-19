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
	        <li class="breadcrumb-item"><a href="#">Business Intelligence Page</a></li>
	    </ol>
	</nav>
</div>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div id="flash-message" class="alert alert-{{ $msg }}" role="alert">
            {{ session($msg) }}
        </div>
    @endif
@endforeach
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
            {!! Form::open(['route' => 'page.create', 'enctype' => 'multipart/form-data']) !!}
            @if($errors->any())
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<li> {{ $error }} </li>
					@endforeach
				</div>
			@endif
                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-6">
                    	<div class="mb-3">
                            <label for="name">Title</label>
                            {!! Form::text('title', 'Business Intelligence', ['class'=> 'form-control', 'required'=>'required','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                       	<div class="mb-4">
                            <label>Second Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'second_title') !!}
                            @if(!$page->toArray())
                            	{!! Form::text('second_title', '', ['class'=> 'form-control']) !!}
                            @else
								@foreach($page as $value)
									@if($value->section_title == 'second_title')
										{!! Form::text('second_title', $value->data, ['class'=> 'form-control']) !!}
									@endif
								@endforeach
							@endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6"></div>
                    <!--Third Secton -->
					<div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Third Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'third_title') !!}
                            @if(!$page->toArray())
                                {!! Form::text('third_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'third_title')
                                        {!! Form::text('third_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6"></div>
					<!--End Third Secton -->
                    <!-- forth section -->
                    <div class="col-lg-6 col-sm-6">
                      	<div class="mb-4">
                            <label>Forth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'forth_title') !!}
                            @if(!$page->toArray())
                            	{!! Form::text('forth_title', '', ['class'=> 'form-control']) !!}
                            @else
								@foreach($page as $value)
									@if($value->section_title == 'forth_title')
										{!! Form::text('forth_title', $value->data, ['class'=> 'form-control']) !!}
									@endif
								@endforeach
							@endif
                        </div>
                        <div class="mb-4">
                            <label>Sub Title</label>
                            {!! Form::hidden('txt_name[]', 'fourth_sub_title') !!}
                            @if(!$page->toArray())
                                {!! Form::text('fourth_sub_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'fourth_sub_title')
                                        {!! Form::text('fourth_sub_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6"></div>
                    <!--end forth section -->

                    <!-- six section -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Sixth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'sixth_title') !!}
                            @if(!$page->toArray())
                                {!! Form::text('sixth_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'sixth_title')
                                        {!! Form::text('sixth_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="mb-4">
                            <label>Sub Title</label>
                            {!! Form::hidden('txt_name[]', 'sixth_sub_title') !!}
                            @if(!$page->toArray())
                                {!! Form::text('sixth_sub_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'sixth_sub_title')
                                        {!! Form::text('sixth_sub_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6"></div>
                    <!-- end six section-->

                    <!-- start eight section-->
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Eigth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'eighth_title') !!}
                            @if(!$page->toArray())
                                {!! Form::text('eighth_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'eighth_title')
                                        {!! Form::text('eighth_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6"></div>
                    <!-- end eight section -->

                    <!-- start tenth section-->
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Tenth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'tenth_title') !!}
                            @if(!$page->toArray())
                                {!! Form::text('tenth_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'tenth_title')
                                        {!! Form::text('tenth_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6"></div>
                    <!-- end tenth section -->

                    {!! Form::submit('Save', ['class'=> 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@push('footer-scripts')

@endpush
