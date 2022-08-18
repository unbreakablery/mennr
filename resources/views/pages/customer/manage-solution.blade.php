@extends('layout/master')

@push('styles')
  <link href="{{ asset('css/pricing-plan.css') }}" rel="stylesheet">
@endpush

@section('content')
  <!-- Hero section start-->
  <section class="page-hero-main">
    <div class="container">
      <div class="text-center">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="mb-3">Dashboard</h1>
            {{-- <p class="mb-0">Automated features used to simplify day-to-day operations, manage reports,<br /> Engage
              customers, analyse performance etc..</p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end-->
  <section class="container mb-3 mt-3">

    @include('error')

    <div class="row">

      @include('layout.customer-sidebar')

      <div class="col-lg-9 col-md-9">
        <h3>Manage Solution</h3>

        @if ($activePlan)
          <p> You have already active plan.</p>
        @else
          <p> You have no active plan. Please select plan.</p>
        @endif

        <div class="row py-5 table-wrap-container">
          @if (empty($selectedplan))
            @forelse ($plans as $plan)
              <div class="col-md-4">
                <div class="pricing-gray-box">
                  <div class="plan-header">
                    <h2>{!! $plan->type !!}</h2>
                    <p>{!! $plan->description !!}</p>
                    <h3>${{ $plan->price }}<span>/month</span></h3>
                  </div>
                  <div class="plan-features">
                    {!! $plan->features !!}
                  </div>
                  <div class="d-flex justify-content-start">
                    <a href="{{ route('pricing.payment', ['plan' => $plan->id]) }}"
                      class="btn btn-primary get-a-free-btn">Get
                      started</a>
                  </div>
                </div>
              </div>
            @empty
              <p>No Pleans Avilable.</p>
            @endforelse
          @else
            <div class="col-md-4">
              <div class="pricing-gray-box">
                <div class="plan-header">
                  <h2>{!! $selectedplan->type !!}</h2>
                  <p>{!! $selectedplan->description !!}</p>
                  <h3>${{ $selectedplan->price }}<span>/month</span></h3>
                </div>
                <div class="selectedplan-features">
                  {!! $selectedplan->features !!}
                </div>
              </div>
            </div>
          @endif

        </div>

      </div>
    </div>

  </section>
@endsection
@push('footer-scripts')
@endpush
