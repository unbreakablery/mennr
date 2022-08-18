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
	        <li class="breadcrumb-item"><a href="#">Medspa Page</a></li> 
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
                            {!! Form::text('title', 'Medspa', ['class'=> 'form-control', 'required'=>'required','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                       	<div class="mb-4">
                            <label>Second Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'second_title') !!}
                            @if($page->count() == 0)
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
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <br>
                            <label>Description</label>
                            {!! Form::hidden('txt_name[]', 'second_description') !!}
                            @if($page->count() == 0)
                                {!! Form::textarea('second_description', '', ['class'=> 'form-control', 'rows'=> '4']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'second_description')
                                        {!! Form::textarea('second_description', $value->data, ['class'=> 'form-control', 'rows'=> '4']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>  
                    </div>
                    <!--Third Secton -->
					<div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Third Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'third_title') !!}
                            @if($page->count() == 0)
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
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <br>
                            <label>Description</label>
                            {!! Form::hidden('txt_name[]', 'third_description') !!}
                            @if($page->count() == 0)
                                {!! Form::textarea('third_description', '', ['class'=> 'form-control', 'rows'=> '4']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'third_description')
                                        {!! Form::textarea('third_description', $value->data, ['class'=> 'form-control', 'rows'=> '4']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>  
                    </div>
					<!--End Third Secton -->
                    <!-- forth section -->
                    <div class="col-lg-6 col-sm-6">
                      	<div class="mb-4">
                            <label>Forth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'forth_title') !!}
                            @if($page->count() == 0)
                            	{!! Form::text('forth_title', '', ['class'=> 'form-control']) !!}
                            @else
								@foreach($page as $value)
									@if($value->section_title == 'forth_title')
										{!! Form::text('forth_title', $value->data, ['class'=> 'form-control']) !!}
									@endif
								@endforeach
							@endif
                        </div> 
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <br>
                            <label>Description</label>
                            {!! Form::hidden('txt_name[]', 'forth_description') !!}
                            @if($page->count() == 0)
                                {!! Form::textarea('forth_description', '', ['class'=> 'form-control', 'rows'=> '4']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'forth_description')
                                        {!! Form::textarea('forth_description', $value->data, ['class'=> 'form-control', 'rows'=> '4']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>  
                    </div>
                    <!--end forth section -->
                    <!--fifth section -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Fifth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'fifth_title') !!}
                            @if($page->count() == 0)
                                {!! Form::text('fifth_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'fifth_title')
                                        {!! Form::text('fifth_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <br>
                            <label>Description</label>
                            {!! Form::hidden('txt_name[]', 'fifth_description') !!}
                            @if($page->count() == 0)
                                {!! Form::textarea('fifth_description', '', ['class'=> 'form-control', 'rows'=> '6']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'fifth_description')
                                        {!! Form::textarea('fifth_description', $value->data, ['class'=> 'form-control', 'rows'=> '6']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>  
                    </div>
                    <!--end fifth section -->
                    <!-- six section -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Sixth Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'sixth_title') !!}
                            @if($page->count() == 0)
                                {!! Form::text('sixth_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'sixth_title')
                                        {!! Form::text('sixth_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <br>
                            <label>Description</label>
                            {!! Form::hidden('txt_name[]', 'sixth_description') !!}
                            @if($page->count() == 0)
                                {!! Form::textarea('sixth_description', '', ['class'=> 'form-control', 'rows'=> '6']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'sixth_description')
                                        {!! Form::textarea('sixth_description', $value->data, ['class'=> 'form-control', 'rows'=> '6']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>  
                    </div>
                    <!-- end six section-->
                    <!-- seven section-->
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label>Seventh Section</label><br>
                            <label>Title</label>
                            {!! Form::hidden('txt_name[]', 'seventh_title') !!}
                            @if($page->count() == 0)
                                {!! Form::text('seventh_title', '', ['class'=> 'form-control']) !!}
                            @else
                                @foreach($page as $value)
                                    @if($value->section_title == 'seventh_title')
                                        {!! Form::text('seventh_title', $value->data, ['class'=> 'form-control']) !!}
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- end seven section-->
                    
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