@extends('admin.layout.layout')
@section('content')
<style type="text/css">
    .adjust {text-overflow: ellipsis;
        overflow: hidden;
        white-space: break-spaces !important;}
</style>
<div class="py-4">
	<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
	    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
	        <li class="breadcrumb-item">
	            <a href="{{ '/dashboard' }}">
	                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
	            </a>
	        </li>
	        <li class="breadcrumb-item"><a href="#">Leaders List</a></li> 
	    </ol>
	</nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Leaders List</h1>
        </div>
        <div>
            <a href="{{ route('leaders.create') }}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
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
                        <th class="border-0">Name</th>
                        <th class="border-0">Designation</th>
                        <th class="border-0">Group</th>
                        <th class="border-0">Image</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaders as $leader)
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">{{ $loop->iteration }}</a></td>
                        <td class="fw-bold align-items-center adjust">{{ $leader->name }}</td>
                        <td class="adjust">{{ $leader->designation }}</td>
                        <td class="adjust">{{ $leader->group }}</td>
                        <td class="adjust"><img src="/upload/{{ $leader->image }}" style="height: 50px;width: 50px"></td>
                        <td>
                        	<div class="btn-group ms-2 ms-lg-3">
            					<a href="{{ route('leaders.edit', $leader->id) }}" type="button" class="btn btn-sm btn-outline-gray-600">Edit</a>

                                {!! Form::open(['route' => ['leaders.destroy', $leader->id], 'method' => 'DELETE' , 'enctype' => 'multipart/form-data']) !!}
                                    {!! Form::submit('Delete', ['class'=> 'btn btn-sm btn-outline-gray-600', 'style' => 'border-top-left-radius:0px;border-bottom-left-radius:0px;']) !!}
                                {!! Form::close() !!}
        					</div>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<h2>{{ $leaders->links() }} </h2>

@endsection


@push('footer-script')
    
@endpush