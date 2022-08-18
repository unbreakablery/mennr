@extends('admin.layout.layout')
@section('content')
<!---->

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="{{ '/dashboard' }}">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Contact Details</a></li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                {!! Form::model($contact, ['route' => ['contact.update', $contact->id],  'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </div>
                @endif
                @include('error')

                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-6">
                        <div class="mb-4">
                            <label for="description" class="my-1 me-2">Description</label>
                            {{ Form::textarea('description',null, ['class'=> 'form-control', 'rows'=> '5']) }}
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6">
                        <div class="mb-4">
                            <label for="address" class="my-1 me-2">Address</label>
                            {{ Form::textarea('address',null, ['class'=> 'form-control', 'rows'=> '2']) }}
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label for="email">Email</label>
                            {{ Form::text('email',null, ['class'=> 'form-control']) }}
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <label for="phone">Phone</label>
                            {{ Form::text('phone',null, ['class'=> 'form-control']) }}
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
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