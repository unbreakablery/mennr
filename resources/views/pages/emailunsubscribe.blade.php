@extends('layout/master')
@section('content')
    <section class="software-works">
        <div class="container px-5 py-4">
            <h2 class="mt-4 mb-3 text-center">UnSubscribe Email</h2>
        </div>
    </section>
    <section class="container">

        <div class="row">
            <div class="col-12">
                @include('error')
                
                {!! Form::open(['route' => ['newsletter.unsubscribe']]) !!}

                <div class="col-lg-12 col-sm-12">
                    <div class="mb-4">
                        <label class="form-label" for="removeemail">Unsubscribe Email </label>
                        {!! Form::checkbox('removeemail', null, false, [
                            'class' => 'form-check-input',
                            'id' => 'removeemail',
                            'required' => 'required',
                        ]) !!}
                        @error('removeemail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        {{ Form::hidden('email', $email) }}
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {!! Form::submit('Unsubscribe', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection
@push('footer-scripts')
@endpush
