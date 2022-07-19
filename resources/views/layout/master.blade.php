<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Salon Software | Spa Software | Med Spa Software | Zenoti</title>

    <meta content="The #1 cloud software for salons, spas and med spas. Over 12,000+ businesses in 50 countries around the world use Zenoti every day to power their business." name="description"/>
    <meta content="Salon Software | Spa Software | Med Spa Software | Zenoti" property="og:title"/>
    <meta content="The #1 cloud software for salons, spas and med spas. Over 12,000+ businesses in 50 countries around the world use Zenoti every day to power their business." property="og:description"/>
    <meta content="{{ asset('theme/assets/img/png/Zenoti.png') }}"property="og:image"/>
    <meta content="Salon Software | Spa Software | Med Spa Software | Zenoti" property="twitter:title"/>
    <meta content="The #1 cloud software for salons, spas and med spas. Over 12,000+ businesses in 50 countries around the world use Zenoti every day to power their business." property="twitter:description"/>
    <meta content="{{ asset('theme/assets/img/png/Zenoti.png') }}"property="twitter:image"/>
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <!-- Favicons -->
    <link href="{{ asset('theme/assets/img/favicon.png') }}" rel="shortcut icon" type="image/x-icon"/>
    <link href="{{ asset('theme/assets/img/webclip.png') }}" rel="apple-touch-icon"/>
    <link href="https://www.zenoti.com/" rel="canonical" />
    <!-- Google Tag Manager -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"/>

    <!-- Bootstrap v5.2.0 -->
    <link href="{{ asset('theme/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('theme/assets/css/utils/basic.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/button.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/card.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/grid.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/navbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/section.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/section-cutout.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/site-warpper.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/text-field.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/tab.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/pillar.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/color.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/hero-section.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/request-section.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/faq-section.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/testimonial-section.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/pages/home.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/pages/resources.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/utils/tab.css') }}" rel="stylesheet" />

  </head>
  <body>
    <!-- Page Header -->
    <div class="container-main">
        @include('layout/header')
        @yield('content')
        @include('layout/footer')
    </div>
    @stack('footer-scripts')
  </body>
</html>
