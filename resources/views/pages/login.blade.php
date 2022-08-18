@extends('layout/master')
@section('content')
    <section class="software-works">
        <div class="container px-5 py-4">
            <h2 class="mt-4 mb-3 text-center">Sign In</h2>

        </div>
    </section>
    <section class="signin-page-content container">
        <div class="row mt-3">
            <div class="col-12">
                @include('error')
                <div class="tm-signin-form-wrap">
                    {!! Form::open(['route' => ['customer.login'], 'enctype' => 'multipart/form-data']) !!}

                    <div class="mb-3">
                        {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Your Email', 'required' => 'required', 'aria-describedby' => 'emailHelp']) }}
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password', 'required' => 'required']) }}
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footer-scripts')
@endpush
