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
	        <li class="breadcrumb-item"><a href="#">Subscriber List</a></li> 
	    </ol>
	</nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Subscriber List</h1>
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
                        <th class="border-0">Email</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($emailList as $value)
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">{{ $loop->iteration }}</a></td>
                        <td class="fw-bold align-items-center adjust">{{ $value->email }}</td>
                        <td>
                            @if($value->status == 1)
                                <span class="text-success">Active</span>
                            @else
                                <span class="text-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                        	<div class="btn-group ms-2 ms-lg-3">

                                {!! Form::open(['route' => ['newsletter.delete', $value->id], 'method' => 'DELETE' , 'enctype' => 'multipart/form-data']) !!}
                                    {!! Form::submit('Delete', ['class'=> 'btn btn-sm btn-outline-gray-600']) !!}
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
<h2>{{ $emailList->links() }} </h2>

@endsection


@push('footer-script')
    
@endpush