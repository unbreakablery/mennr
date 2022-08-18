<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Primary Meta Tags -->
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta name="author" content="Themesberg">
  <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
  <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
  <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
  <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Sweet Alert -->
  <link type="text/css" href="{{ asset('admin_theme/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="{{ asset('admin_theme/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="{{ asset('admin_theme/css/volt.css') }}" rel="stylesheet">

  <!-- Theme included stylesheets -->
  <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('admin.dashboard') }}">
      <img class="navbar-brand-dark" src="{{ asset('admin_theme/assets/img/brand/light.svg') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('admin_theme/assets/img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="{{ asset('admin_theme/assets/img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, Jane</h2>
            <a href="{{ route('admin.logout') }}" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                </path>
              </svg>
              Sign Out
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="{{ asset('admin_theme/assets/img/brand/light.svg') }}" height="20" width="20" alt="Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">Mennr</span>
          </a>
        </li>

        <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#main-pages">
            <span>
              <span class="sidebar-text">Pages</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('home.add') }}">
                  <span class="sidebar-text">Home</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('solutions.add') }}">
                  <span class="sidebar-text">Solutions</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('company.add') }}">
                  <span class="sidebar-text">Company</span>
                </a>
              </li>
            </ul>
          </div> -->
          <!-- <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#solution-pages">
              <span>
                <span class="sidebar-text">Solutions</span>
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
              </span>
            </span>
          </div> -->
          <!--
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('spa.add') }}">
                  <span class="sidebar-text">Spa</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('medspa.add') }}">
                  <span class="sidebar-text">Med Spa</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('salon.add') }}">
                  <span class="sidebar-text">Salon</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('fitness.add') }}">
                  <span class="sidebar-text">Fitness</span>
                </a>
              </li>
            </ul>
          </div>
          -->
          <!-- <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('appointments-and-booking.add') }}">
                  <span class="sidebar-text">Appointments & Booking</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('billing-and-payments.add') }}">
                  <span class="sidebar-text">Billing & Payments</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('business-management.add') }}">
                  <span class="sidebar-text">Business Management</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="solution-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('marketing-and-sales.add') }}">
                  <span class="sidebar-text">Marketing and Sales</span>
                </a>
              </li>
            </ul>
          </div> -->
          <!--
          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#product-pages">
              <span>
                <span class="sidebar-text">Products</span>
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
              </span>
            </span>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="product-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('appointments-and-booking.add') }}">
                  <span class="sidebar-text">Appointments & Booking</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="product-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('billing-and-payments.add') }}">
                  <span class="sidebar-text">Billing & Payments</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="product-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('business-intelligence.add') }}">
                  <span class="sidebar-text">Business Intelligence</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="product-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('business-management.add') }}">
                  <span class="sidebar-text">Business Management</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="product-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('mobile-solutions.add') }}">
                  <span class="sidebar-text">Mobile Solutions</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse ms-4" role="list" id="product-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('marketing-and-sales.add') }}">
                  <span class="sidebar-text">Marketing and Sales</span>
                </a>
              </li>
            </ul>
          </div>
          -->
          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('blog.add') }}">
                  <span class="sidebar-text">Blog</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('Careers.add') }}">
                  <span class="sidebar-text">Careers</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item ">
                    <a href="{{ route('about.add') }}" class="nav-link">
                        <span class="sidebar-text">About</span>
                    </a>
                </li>
            </ul>
          </div>

          <div class="multi-level collapse " role="list" id="main-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('Pricing.add') }}">
                  <span class="sidebar-text">Pricing</span>
                </a>
              </li>
            </ul>
          </div>

        </li>
        <li class="nav-item ">
          <a href="{{ route('posts.index') }}" class="nav-link">
            <span class="sidebar-text">Posts</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('testimonials.index') }}" class="nav-link">
            <span class="sidebar-text">Testimonials</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('plans.index') }}" class="nav-link">
            <span class="sidebar-text">Plans</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('faq.index') }}" class="nav-link">
            <span class="sidebar-text">FAQ</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('leaders.index') }}" class="nav-link">
            <span class="sidebar-text">Leaders</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('history.index') }}" class="nav-link">
            <span class="sidebar-text">History</span>
          </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('socialmedia.index') }}" class="nav-link">
              <span class="sidebar-text">Social Media</span>
            </a>
          </li>
        <li class="nav-item ">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#contact-pages">
            <span>
              <span class="sidebar-text">Contact</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="contact-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('contact.edit', ['contact' => 1]) }}">
                  <span class="sidebar-text">Contact Details</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse " role="list" id="contact-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('contact.index') }}">
                  <span class="sidebar-text">Saved Contact</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        {{-- User pages Links --}}
        <li class="nav-item ">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#user-pages">
            <span>
              <span class="sidebar-text">User</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="user-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('users.index') }}">
                  <span class="sidebar-text">User List</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse " role="list" id="user-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('userplan.list') }}">
                  <span class="sidebar-text">User Plans</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        {{-- User pages Links --}}

        {{-- NewsLetter pages --}}
        <li class="nav-item ">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#newsletter-pages">
            <span>
              <span class="sidebar-text">Newsletter</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="newsletter-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('newsletter.list') }}">
                  <span class="sidebar-text">Subscriber List</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        {{-- NewsLetter pages --}}

        {{-- Get A Free Demo pages start --}}
        <li class="nav-item ">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#gafd-pages">
            <span>
              <span class="sidebar-text">Get A Free Demo</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="gafd-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('gafd.list') }}">
                  <span class="sidebar-text">Applicants</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        {{-- Get A Free Demo pages end --}}


      </ul>
    </div>
  </nav>

  <main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
      <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
            <!-- Search form -->
            <form class="navbar-search form-inline" id="navbar-search-main">
              <div class="input-group input-group-merge search-bar">
                <span class="input-group-text" id="topbar-addon">
                  <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
                </span>
                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
              </div>
            </form>
            <!-- / Search form -->
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown">
              <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                  </path>
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                <div class="list-group list-group-flush">
                  <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>

                  <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                      <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                    View all
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown ms-lg-3">
              <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="media d-flex align-items-center">
                  <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('admin_theme/assets/img/team/profile-picture-3.jpg') }}">
                  <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small fw-bold text-gray-900">Zeeshan</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}">
                  <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                  </svg>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- page content -->
    <div class="right_col" role="main">
      @yield('content')
    </div>
    <!-- /page content -->
    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
      <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">

        </div>
        <div class="col-12 col-md-8 col-xl-6 text-lg-end">
          <p class="mb-0 text-center text-lg-end">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
        </div>
      </div>
    </footer>
  </main>

  <!-- Core -->
  <script src="{{ asset('admin_theme/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admin_theme/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Vendor JS -->
  <script src="{{ asset('admin_theme/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

  <!-- Slider -->
  <script src="{{ asset('admin_theme/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

  <!-- Smooth scroll -->
  <script src="{{ asset('admin_theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

  <!-- Charts -->
  <script src="{{ asset('admin_theme/vendor/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('admin_theme/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

  <!-- Datepicker -->
  <script src="{{ asset('admin_theme/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

  <!-- Sweet Alerts 2 -->
  <script src="{{ asset('admin_theme/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js') }}"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="{{ asset('admin_theme/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

  <!-- Notyf -->
  <script src="{{ asset('admin_theme/vendor/notyf/notyf.min.js') }}"></script>

  <!-- Simplebar -->
  <script src="{{ asset('admin_theme/vendor/simplebar/dist/simplebar.min.js') }}"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="{{ asset('admin_theme/assets/js/volt.js') }}"></script>

  <!-- <script type="text/javascript">
        window.setTimeout("document.getElementById('flash-message').style.display='none';", 2000);
    </script> -->
  <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/ckeditor-5-with-font-color@12.3.2/build/ckeditor.min.js"></script> -->
  <!-- <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script> -->

  <!-- Main Quill library -->
  <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

  @stack('footer-scripts')
</body>

</html>
