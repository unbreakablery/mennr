@extends('layout/master')
@push('styles')
<link href="{{ asset('css/pricing.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Top Pricing Banner start -->
<section class="pricing-main">
  <div class="text-center">
    <div class="container">
      <h1>{!! !empty($sections->section_1_title)
          ? $sections->section_1_title
          : 'Everything you need to grow<br/>your Saas business' !!}</h1>

      @if (!empty($sections->section_1_description))
        {!! $sections->section_1_description !!}
      @else
        <p>A complete toolkit for scaling your business at a fraction of the price of other tools</p>
        <h2>How Mennr compares to the alternatives</h2>
      @endif
    </div>
  </div>
</section>
<!-- Top Pricing Banner end -->

@if (!empty($plans) && count($plans) > 0)
<!-- pricing table Start -->
<section class="pricing-table-section py-5 my-4">
  <div class="container">
    <h2 class="mt-2 mb-5 pb-4 text-center">Our Plans</h2>
    <div class="row">
      @foreach ($plans as $p)
        <div class="col-md-4">
          <div class="pricing-table-box {{ $p->type === 'yearly' ? 'active-pricing-table' : '' }}">
            <div class="plan-header">
              <h2>{!! $p->title !!}</h2>
              @if ($p->type === 'custom')
              <h3>Custom Price</h3>
              @else
              <h3>${!! round($p->price) !!}<sub>/{!! UtilsHelper::getPlanTypeText($p->type) !!}</sub></h3>
              @endif
              <p>{!! $p->description !!}</p>
            </div>
            <div class="brd-btm"></div>
            <div class="plan-list">
              <h2>Features</h2>
              {!! $p->features !!}
            </div>
            <div class="d-flex justify-content-center my-4">
              <a href="{{ $p->type === 'custom' ? (Auth::user() ? route('customer.dashboard') : route('customer.signup')) : route('get_free_demo.index') }}"
                class="btn btn-primary get-a-free-btn">{{ $p->type === 'custom' ? 'Customize my plan' : 'Get A Free Demo' }}</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- pricing table End -->
@endif

<!--  Pricing compare table start -->
<section class="price-compare-table py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="py-5 mb-4 text-center">How we compare to others</h2>
        <div class="table-responsive">
          <table class="table pricing-table">
            <thead>
              <tr>
                <th>Features</th>
                <th><a href="#">
                    <picture>
                      <source srcset="images/logo-inverse-mobile.png" media="(max-width: 992px)">
                      <img src="images/logo-inverse.png" alt="" width="100%" />
                    </picture>
                  </a></th>
                <th>Intercom</th>
                <th>MixPanel</th>
                <th>HubSpot</th>
                <th>Google<br>Analytics</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <h3>Unlimited Integrations</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Unlimited Active Models</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Unlimited Lookback</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Real-time Data Refresh</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Priority Support SLA</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Community Access</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Dedicated CSM</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Premium Integrations</h3>
                  <p>Live chat and marketing automation</p>
                </td>
                <td><img src="images/icon-right.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
                <td><img src="images/icon-close.svg" alt="" /></td>
              </tr>
              <tr>
                <td>
                  <h3>Price</h3>
                </td>
                <td><b>$79</b><br><span>/Month</span></td>
                <td><b>$149</b><br><span>/Month</span></td>
                <td><b>$25</b><br><span>/Month</span></td>
                <td><b>$50</b><br><span>/Month</span></td>
                <td><b>$169</b><br><span>/Month</span></td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  Pricing compare table end -->

<!-- Faq Start -->
@if (!empty($faqs) && $faqs->count() > 0)
<section class="faq-section">
  <h2 class="mt-2 mb-4 text-center">FAQ’s</h2>
  <div class="faq-bg">
    <div class="accordion accordion-flush" id="accordionFlushExample">

      @foreach ($faqs as $key => $item)
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-{{ $item->id }}">
            <button class="accordion-button @if ($key != 0) collapsed @endif" type="button"
              data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $item->id }}" aria-expanded="false"
              aria-controls="flush-collapse-{{ $item->id }}">
              {!! $item->question !!}
            </button>
          </h2>
          <div id="flush-collapse-{{ $item->id }}"
            class="accordion-collapse collapse @if ($key == 0) show @endif"
            aria-labelledby="flush-heading-{{ $item->id }}" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              {!! $item->answer !!}
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>
@endif
<!-- Faq End -->

<!-- Ready to See Start -->
<section class="ready-to-see-section py-5">
  <div class="container">
    <div class="ready-to-see-box">
      <h2>Ready to see how the Mennr <br>Software can help your business <br>to grow?</h2>
      <div class="get-a-free-demo-btn">
        <a href="{{ route('get_free_demo.index') }}"> GET A FREE DEMO</a>
      </div>
    </div>
  </div>
</section>
<!-- Ready to See End -->

@endsection
@push('footer-scripts')
  <script>
    $(document).ready(function() {
      $('#without_mennr').on('click', function() {
        $(this).toggleClass('btn-primary');
        $('#with_mennr').removeClass('btn-primary');
        $('.compare-left-part').show();
        $('.compare-right-part').hide();
      })
      $('#with_mennr').on('click', function() {
        $(this).toggleClass('btn-primary');
        $('#without_mennr').removeClass('btn-primary');
        $('.compare-left-part').hide();
        $('.compare-right-part').show();
      })
    });
  </script>
@endpush
