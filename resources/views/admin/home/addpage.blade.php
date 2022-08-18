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
	        <li class="breadcrumb-item"><a href="#">Home Page</a></li>
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
            {!! Form::open(['route' => 'page-create', 'enctype' => 'multipart/form-data']) !!}
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
                            {!! Form::text('title', 'home', ['class'=> 'form-control', 'required'=>'required','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6">
                    	<div class="mb-3">
                            <label for="image" class="form-label">Banner Image</label>
                            {!! Form::hidden('image[]', 'banner_image') !!}
							{!! Form::file('banner_image',['class'=> 'form-control','id'=>'file']) !!}
                        </div>
                        <div class="mb-3">
                        	@if($page->count() > 0)
                        		@foreach($page as $value)
									@if($value->section_title == 'banner_image')
										<img src="{{ asset('/upload') }}/{{ $value->data }}" style="height: 200px;width: 200px;">
									@endif
								@endforeach
							@endif
						</div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                       	<div class="mb-4">
                            <label>Second Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'second_title') !!}
                            @if($page->count() == 0)
                            	{!! Form::text('second_title', '', ['class'=> 'form-control', 'required' =>'required']) !!}
                            @else
								@foreach($page as $value)
									@if($value->section_title == 'second_title')
										{!! Form::text('second_title', $value->data, ['class'=> 'form-control', 'required' =>'required']) !!}
									@endif
								@endforeach
							@endif
                        </div>
                    </div>
                    <!--Third Secton -->
						<!--third section is post -->
					<!--End Third Secton -->
                    <div class="col-lg-6 col-sm-6">
                      	<div class="mb-4">
                            <label>Forth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'forth_icon') !!}
                            @if($page->count() == 0)
                            	{!! Form::text('forth_icon', '', ['class'=> 'form-control', 'required' =>'required']) !!}
                            @else
								@foreach($page as $value)
									@if($value->section_title == 'forth_icon')
										{!! Form::text('forth_icon', $value->data, ['class'=> 'form-control', 'required' =>'required']) !!}
									@endif
								@endforeach
							@endif
                        </div>
                    </div>
                    {!! Form::submit('Save', ['class'=> 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@push('footer-scripts')
<script type="text/javascript">
	$(function(){
		if($("#editor").length){
			CKEDITOR.replace('editor',{});
		}
		$('.editor').each(function(){
			CKEDITOR.replace($(this).attr('id'));
		});
	});
</script>
@endpush
