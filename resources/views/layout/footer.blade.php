<!-- Footer start -->
  <footer class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-3 ft-logo-part">
        <p class="col-md-3 mb-3 text-muted">
          <a class="footer-brand" href="/">
            <img src="{{ asset('/images/logo.png') }}" alt="Mennr" />
          </a>
        </p>
        <p>Eos tota dicunt democritum no. Has natum gubergren ne.</p>
        <ul class="social-nav mt-4 col-md-3 justify-content-start list-unstyled d-flex social-nav">
          <li class="me-3"><a href="#"><img src="{{ asset('/images/linkedin.svg') }}" /></a></li>
          <li class="me-3"><a href="#"><img src="{{ asset('/images/messenger.svg') }}" /></a></li>
          <li class="me-3"><a href="#"><img src="{{ asset('/images/twitter.svg') }}" /></a></li>
          <li class="me-3"><a href="#"><img src="{{ asset('/images/twoo.svg') }}" /></a></li>
        </ul>
      </div>

      <div class="col-md-2 mb-3 ft-menu">
        <h5 class="ft-title active">Company</h5>
        <ul class="nav flex-column footer-nav ft-nav-open">
          <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0">About Us</a></li>
          <li class="nav-item mb-2"><a href="{{ route('careers') }}" class="nav-link p-0">Careers</a></li>
          <li class="nav-item mb-2"><a href="{{ route('solutions') }}" class="nav-link p-0 ">Blog</a></li>
          <li class="nav-item mb-2"><a href="{{ route('pricing') }}" class="nav-link p-0">Pricing</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-3 ft-menu">
        <h5 class="ft-title">Solutions</h5>
        <ul class="nav flex-column footer-nav">
          <li class="nav-item mb-2"><a href="/solutions#schedule-appointment" class="nav-link p-0">Appointment</a></li>
          <li class="nav-item mb-2"><a href="/solutions#point-sale" class="nav-link p-0">Billing Payment</a></li>
          <li class="nav-item mb-2"><a href="/solutions#marketing" class="nav-link p-0">Marketing & Sales</a></li>
          <li class="nav-item mb-2"><a href="/solutions#online-booking" class="nav-link p-0">Business Management</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-3 ft-newsletter">
        {!! Form::open(['route' => ['customer.newsletter'], 'id' => 'newsletter-submit']) !!}
        <h5>Join Our Newsletter</h5>
        <div class="d-flex flex-column flex-lg-row w-100 gap-2 gap-lg-0 ft-nl-form">
          <label for="newsletter1" class="visually-hidden">Email address</label>
          {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'newsletter1', 'placeholder' => 'Your email address', 'required' => 'required']) }}
          <button class="btn btn-primary" type="submit" id="subscribe-submit-btn">Subscribe</button>
        </div>
        @error('email')
          <span class="text-danger">{{ $message }}</span>
        @enderror
        {{ Form::close() }}
        <p class="mt-3 text-muted">* Will send you weekly updates for your better finance management.</p>
        <p id="news-email-msg"></p>
      </div>
    </div>

    <div class="text-center py-4 py-lg-5  mt-4 mt-lg-5 copyright-text border-top">
      Copyright &copy; Mennr 2022. All Rights Reserved.
    </div>
  </div>
</footer>
<!-- Footer end -->

<!-- JS files ans script -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script type="text/javascript">
  $('.review-slider').slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  $(document).ready(function() {
    $(window).on("resize", function(e) {
      checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize() {
      var newWindowWidth = $(window).width();
      if (newWindowWidth < 767) {
        $('ul.dropdown-menu-mobile li').each(function() {
          var dropdown = $('.dropdown-menu-btn').children();
          $(this).on('click', function() {
            $(this).children("a").addClass('active');
            var menu = $(this).children("a");
            var img = $(menu).children();
            var text = $(menu).text();

            $(dropdown[0]).attr('src', img.attr('src'));
            $(dropdown[1]).text(text);
          })
        });

        $('#solution-menu').on('click', function(e) {
          e.preventDefault();
          // window.location.href = '/solutions';
        });
      } else {
        $('#solution-menu').on('click', function(e) {
          e.preventDefault();
          window.location.href = '/solutions';
        });
      }
    }
    
    $('.arrow-up, .arrow-down').on('click', function(event) {
      event.preventDefault();
    });
    
    $('.we-do-card').each(function(index, element) {
      $(this).on('click', function() {
        var children = $(this).children();
        var arrowChildren = $(children[0]).children();

        $(children[1]).slideToggle('card-open');
        $(arrowChildren[2]).toggleClass('arrow-up');
      });
    });

    $('.ft-menu').each(function(index, element) {
      $(this).on('click', function(event) {
        var children = $(this).children();

        $(children[1]).slideToggle('ft-nav-open');
        $(children[0]).toggleClass('active');
      });
    });

    function newsLetterMsg() {
      $('#news-email-msg').show();
      setTimeout(() => {
        $('#news-email-msg').fadeOut();
      }, 5000);
      setTimeout(() => {
        $('#news-email-msg').removeClass();
      }, 7000);
    }

    /* Newsletter form submit ajax*/
    $('#newsletter-submit').on('submit', function(e) {
      e.preventDefault();

      let email = $('#newsletter1').val();

      $("#subscribe-submit-btn").text("Wait.....");

      $.ajax({
        url: "{{ route('customer.newsletter') }}",
        type: "POST",
        data: {
          "_token": "{{ csrf_token() }}",
          email: email,
        },
        success: function(response) {
          $("#news-email-msg").addClass('text-success');
          $("#news-email-msg").text(response.success);
          $("#subscribe-submit-btn").text("Subscribe");
          $('#newsletter1').val('');
          newsLetterMsg();
        },
        error: function(response) {
          $("#news-email-msg").addClass('text-danger');
          $("#news-email-msg").text(response.responseJSON.errors.email);
          $("#subscribe-submit-btn").text("Subscribe");
          newsLetterMsg();
        },
      });
    });
  })
</script>