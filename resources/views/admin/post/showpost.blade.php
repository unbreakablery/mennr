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
	        <li class="breadcrumb-item"><a href="#">Posts List</a></li> 
	    </ol>
	</nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Posts List</h1>
        </div>
        <div>
            <a href="{{ asset('/post-add') }}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Add New
            </a>
        </div>
    </div>
</div>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div id="flash-message" class="alert alert-{{ $msg }}" role="alert">
            {{ session($msg) }}
        </div>
    @endif
@endforeach
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Page</th>
                        <th class="border-0">Section Title</th>
                        <th class="border-0">Post Title</th>
                        <th class="border-0">Image</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">{{ $loop->iteration }}</a></td>
                        <td class="fw-bold align-items-center">{{ $post->page_title}}</td>
                        <td>{{ $post->section_title }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="/upload/{{ $post->image }}" style="height: 50px;width: 50px"></td>
                        <td>
                        	<div class="btn-group ms-2 ms-lg-3">
            					<a href="{{route('post-edit', $post->id)}} " type="button" class="btn btn-sm btn-outline-gray-600">Edit</a>
            					<a href="{{route('post-delete', $post->id)}}" type="button" class="btn btn-sm btn-outline-gray-600">Delete</a>
        					</div>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<h2>{{ $posts->links() }} </h2>

@endsection


@push('footer-script')
    
@endpush