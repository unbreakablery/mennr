<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mennr</title>
  <!-- Favicons -->
  <link href="{{ asset('/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
  <link href="https://www.mennr.com/" rel="canonical" />

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/slick.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  @stack('styles')
</head>

<body>
  @yield('content')
  @include('layout/footer')
  
  @stack('footer-scripts')
</body>

</html>
