<!-- Header start-->
<header>
  <div class="mennr-nav">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo.png') }}" alt="Mennr" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('solutions') }}"
                id="solution-menu">Solutions</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/solutions#schedule-appointment"><img src="/images/icon-appointment.svg">Schedule Appointment</a></li>
                <li><a class="dropdown-item" href="/solutions#point-sale"><img src="/images/icon-point-of-sale.svg">Point of Sale</a></li>
                <li><a class="dropdown-item" href="/solutions#online-booking"><img src="/images/icon-online-booking.svg">Online Booking</a></li>
                <li><a class="dropdown-item" href="/solutions#marketing"><img src="/images/icon-marketing.svg">Marketing</a></li>
                <li><a class="dropdown-item" href="/solutions#analytics-reports"><img src="/images/icon-analytics.svg">Analytics & Reports</a></li>
                <li><a class="dropdown-item" href="/solutions#feedback-system"><img src="/images/icon-feedback.svg">Feedback System</a></li>
                <li><a class="dropdown-item" href="/solutions#repeat-clients"><img src="/images/icon-repeat-clients.svg">Repeat Clients</a></li>
                <li><a class="dropdown-item" href="/solutions#book-keeping"><img src="/images/icon-book-keeping.svg">Book Kepping</a></li>
                <li><a class="dropdown-item" href="/solutions#send-notification"><img src="/images/icon-send-notification.svg">Send Notification</a></li>
                <li><a class="dropdown-item" href="/solutions#multi-location"><img src="/images/icon-multi-location.svg">Manage Multi-Location</a></li>
                <li><a class="dropdown-item" href="/solutions#sell-online"><img src="/images/icon-sell-online.svg">Sell Online</a></li>
                <li><a class="dropdown-item" href="/solutions#business-intelligence"><img src="/images/icon-business-int.svg">Business Intelligence</a></li>
                <li><a class="dropdown-item" href="/solutions#security"><img src="/images/icon-security.svg">Security</a></li>
                <li><a class="dropdown-item" href="/solutions#integrations"><img src="/images/icon-integrations.svg">Integrations</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contacts') }}">Contact</a>
            </li>
          </ul>

          <div class="nav-btn-group">
            @auth
              {{-- user logged in --}}
              <a class="btn btn-link user-dashboard" href="{{ route('customer.dashboard') }}"> {{ auth()->user()->name ?? 'Profile' }}</a>
              <a class="btn btn-outline-secondary" href="{{ route('customer.dashboard') }}">Start Your Free Trial</a>
            @else
              {{-- not logged in --}}
              <a class="btn btn-outline-secondary" href="{{ route('customer.signup') }}">Start Your Free Trial</a>
            @endauth
            <a class="btn btn-primary" href="/get-free-demo">Get A Free Demo</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
<!-- Header end-->
