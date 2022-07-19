
      <div class="site-wrapper form-wrapper">
        <div
          id="carouselIndicators"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial-slide">
                <img
                  src="{{ asset('theme/assets/img/png/Homepage_Customer%20photos_%20Dominic%20Blake%20(Blushes)_V2.png') }}"
                  loading="lazy"
                  alt="Dominic Blake, Blushes Hair &amp; Beauty"
                  class="testimonial-img"
                />
                <img
                  src="{{ asset('theme/assets/img/svg/testiimonial-inverted-comma.svg') }}"
                  loading="lazy"
                  alt=""
                  class="testimonial-inverted-comma"
                />
                <div class="body-medium fw-bold">Dominic Blake</div>
                <div class="testimonial-person-designation">
                  Managing Director, Blushes Hair &amp; Beauty
                </div>
                <h4 class="body-large footer-testimonial-text">
                  50% increase in self-service booking.
                </h4>
              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial-slide">
                <img
                  src="{{ asset('theme/assets/img/png/Homepage_Customer%20photos_%20%20Isabel%20Steward%20(Douglas%20J)_V2.png') }}"
                  loading="lazy"
                  alt="Isabel Steward, Douglas J Companies"
                  class="testimonial-img"
                />
                <img
                  src="{{ asset('theme/assets/img/svg/testiimonial-inverted-comma.svg') }}"
                  loading="lazy"
                  alt=""
                  class="testimonial-inverted-comma"
                />
                <div class="body-medium fw-bold">Isabel Steward</div>
                <div class="testimonial-person-designation">
                  Director of Guest Service, Douglas J Companies
                </div>
                <h4 class="body-large footer-testimonial-text">
                  500% increase in customers using digital forms prior to
                  treatment.
                </h4>
              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial-slide">
                <img
                  src="{{ asset('theme/assets/img/png/Homepage_Customer%20photos_%20Brendon%20Mann%20(Epic%20Hair)_V2.png') }}"
                  loading="lazy"
                  alt="Brendon Mann, Epic Hair Designs"
                  class="testimonial-img"
                />
                <img
                  src="{{ asset('theme/assets/img/svg/testiimonial-inverted-comma.svg') }}"
                  loading="lazy"
                  alt=""
                  class="testimonial-inverted-comma"
                />
                <div class="body-medium fw-bold">Brendon Mann</div>
                <div class="testimonial-person-designation">
                  Director, Epic Hair Designs
                </div>
                <h4 class="body-large footer-testimonial-text">
                  100% increase in direct mail results.
                </h4>
              </div>
            </div>
          </div>
          <div class="carousel-indicators slide-nav testimonial-indicators">
            <div
              class="active slider-dot"
              data-bs-target="#carouselIndicators"
              data-bs-slide-to="0"
              data-bs-interval="6000"
              aria-current="true"
              aria-label="Slide 1"
            ></div>
            <div
              class="slider-dot"
              data-bs-target="#carouselIndicators"
              data-bs-slide-to="1"
              data-bs-interval="6000"
              aria-label="Slide 2"
            ></div>
            <div
              class="slider-dot"
              data-bs-target="#carouselIndicators"
              data-bs-slide-to="2"
              data-bs-interval="6000"
              aria-label="Slide 3"
            ></div>
          </div>
        </div>
        <div class="form-column" id="message-display">
          @foreach (['success', 'danger'] as $msg)
                @if(session()->has($msg))
                  <div id="flash-message" class="alert alert-{{ $msg }}" role="alert">
                    {{ session($msg) }}
                  </div>
                @endif
              @endforeach
          <h2>See us in action</h2>
          <div class="section-heading-subtext">
            We’d love to demonstrate what we can do for you. Fill in this form
            &amp; we’ll contact you within 24 hours to schedule your free demo.
          </div>
          <div id="on-page-demo-form" class="form-wrapper w-form">
            <form action="{{ route('ContactMail') }}" id="wf-form-Request-a-Demo-Form" name="wf-form-Request-a-Demo-Form" data-name="Request a Demo Form" method="post" class="demo-form">

              @csrf
              <div class="form-grid request-demo-form">
                <input type="text" class="text-field w-node-_162a2838-d29e-138d-cee2-f914009350de-3216bfbb w-input" maxlength="256" name="First-Name" data-name="First Name" aria-label="First Name" placeholder="First Name*" id="First-Name-2" required=""/>
                <input type="text" class="text-field w-node-_77887b02-c23c-2e5d-1a23-df0734c915f0-3216bfbb w-input" maxlength="256" name="Last-Name" data-name="Last Name" aria-label="Last Name" placeholder="Last Name*" id="Last-Name-2" required=""/>
                <input type="email" class="text-field w-input" maxlength="256" name="Email-ID" data-name="Email ID" aria-label="Email" placeholder="Email*" id="nav-Email-ID-5" required=""/>
                <input type="tel" class="text-field w-input" maxlength="256" name="Phone-Number" data-name="Phone Number" aria-label="Phone Number" placeholder="Phone Number*" id="nav-Phone-Number-5" required=""/>
                <input type="text" class="text-field w-input" maxlength="256" name="Company-Name" data-name="Company Name" aria-label="Company Name" placeholder="Company Name*" id="Company-Name-6" required=""/>
                <input type="number" class="text-field w-input" max="9999" maxlength="256" name="Number-of-Locations" data-name="Number of Locations" aria-label="Number of Locations" min="0" placeholder="No. of Locations*" id="Number-of-Locations-9" required=""/>
                <select id="Business-Type-6" name="Business-Type" data-name="Business Type*" required="" aria-label="Business Type" class="text-field select-field w-select">
                  <option value="">Business Type</option>
                  <option value="Salon">Salon</option>
                  <option value="Spa">Spa</option>
                  <option value="Medical Spa">Medspa</option>
                  <option value="Fitness">Fitness</option>
                  <option value="Other">Other</option>
                </select>
                <select id="Number-of-Providers-3" name="Number-of-Providers-3" data-name="Number Of Providers 3" required="" aria-label="Number of Providers" class="text-field select-field w-select">
                  <option value="">Number of Providers*</option>
                  <option value="1">1 Provider</option>
                  <option value="2-4">2-4 Providers</option>
                  <option value="5-9">5-9 Providers</option>
                  <option value="10-24">10-24 Providers</option>
                  <option value="25-99">25-99 Providers</option>
                  <option value="100-499">100-499 Providers</option>
                  <option value="500+">500+ Providers</option>
                  <option value="1000+">1000+ Providers</option>
                </select>
              </div>
              <div class="w-embed">
                <input type="hidden" name="lead_source" value="Website: Demo Request"/>
                <input type="hidden" id="CountryPopupEbook" class="CountryPopupEbook" name="country" value=""/>
                <input type="hidden" id="CityPopupEbook" class="CityPopupEbook" name="city" value="" />
                <input type="hidden" id="StatePopupEbook" class="StatePopupEbook" name="state" value="" />
                <input type="hidden" name="00N4100000C63rc" title="Business Region" id="bregionPopupEbook" class="bregionPopupEbook" value=""/>
                <input type="hidden" name="00N4100000UznQt" id="00N4100000UznQt" title="Previous URL" value="" />
                <input type="hidden" name="00N4100000BizyQ" id="lp_url" class="lp_url" title="Landing Page URL" value=""/>
                <input type="hidden" id="gclid1" name="00N1K00000fbKmg" title="gclid" value=""/>
              </div>
              <input type="submit" value="Get A Free Demo" data-wait="Please wait..." class="button form-submit-btn"/>
            </form>
            <div class="success-message d-none p-3">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail d-none mt-2 p-2">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-cutout cutout-bottom-right footer-reverse"></div>
    </section>
<!-- Footer section -->
<section class="section footer-section">
  <div class="site-wrapper">
    <img
      src="{{ asset('theme/assets/img/svg/footer-logo.svg') }}"
      loading="lazy"
      alt="Zenoti Logo in white - Salon, spa, medspa and fitness center Management Software"
      class="footer-logo"
    />
    <div class="footer-grid">
      <div class="footer-column">
        <div class="footer-column-heading">Mennr</div>
        <a href="/company/about-us" class="footer-link">About Us</a>
        <a href="/careers" class="footer-link">Careers</a>
        <a href="/customers" class="footer-link">Customers</a>
        <a href="/contact-us" class="footer-link">Contact Us</a>
        <a href="/company/support" class="footer-link">Support</a>
        <a
          href="#"
          target="_blank"
          class="footer-link"
          >Help Center</a
        >
        <a href="/company/referral-program" class="footer-link"
          >Referral Program</a
        >
      </div>
      <div>
        <div class="footer-column">
          <div class="footer-column-heading">Why Mennr</div>
          <a
            href="/solutions/elevate-the-customer-experience"
            class="footer-link"
            >Elevate your customer experience</a
          >
          <a
            href="/solutions/unify-your-brand-operations"
            class="footer-link"
            >Unify your brand and operations</a
          >
          <a href="/solutions/automate-with-ai" class="footer-link"
            >Automate with AI</a
          >
        </div>
      </div>
      <div class="footer-column">
        <div class="footer-column-heading">Products</div>
        <a
          href="/spa-salon-appointment-booking-software"
          class="footer-link"
          >Appointments &amp; Bookings</a
        >
        <a href="/spa-salon-point-of-sale-software" class="footer-link"
          >Billing &amp; Payments</a
        >
        <a href="/spa-salon-reporting-analytics" class="footer-link"
          >Business Intelligence</a
        >
        <a href="/business-management" class="footer-link"
          >Business Management</a
        >
        <a href="/spa-salon-marketing-software" class="footer-link"
          >Marketing &amp; Sales</a
        >
        <a href="/mobile-solutions" class="footer-link">Mobile Solutions</a>
        <a
          href="https://go.zenoti.com/zenoti-payments-na-device/"
          target="_blank"
          class="footer-link hid"
          >Order Device</a
        >
      </div>
      <div class="footer-column">
        <div class="footer-column-heading">Resources</div>
        <a href="/blogs" class="footer-link">Blogs</a>
        <a href="/case-studies" class="footer-link">Case Studies</a>
        <a href="/data-sheets" class="footer-link">Data Sheets</a>
        <a href="/ebooks" class="footer-link">Ebooks</a>
        <a href="/videos" class="footer-link">Videos</a>
        <a
          href="http://www.zenoti.com/blogs/zenoti-for-salons"
          class="footer-link"
          >Salon Management Guide</a
        >
      </div>
      <div>
        <div class="footer-column">
          <div class="footer-column-heading">Solutions</div>
          <a href="/salon-management-software" class="footer-link"
            >Salons</a
          >
          <a href="/spa-management-software" class="footer-link">Spas</a>
          <a href="/medical-spa-software" class="footer-link">Med Spas</a>
          <a href="/fitness-center-management-software" class="footer-link"
            >Fitness Centers</a
          >
        </div>
        <div class="footer-column">
          <div class="footer-column-heading">Media</div>
          <a href="/press" class="footer-link">Press Releases</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom-wrapper">
      <div class="footer-bottom-left">
        <a href="/privacy-notice" class="footer-bottom-link"
          >Privacy Notice</a
        >
        <a href="/cookie-notice" class="footer-bottom-link"
          >Cookie Notice</a
        >
        <a href="/legal" class="footer-bottom-link">Legal</a>
        <a href="/security" class="footer-bottom-link">Security</a>
        <a href="/returns-refunds" class="footer-bottom-link returns"
          >Returns &amp; Refunds</a
        >
        <div class="footer-bottom-link">
          All Content Copyright <span class="cr-year">2022</span>
        </div>
        <div class="footer-bottom-link no-border">All Rights Reserved</div>
      </div>
      <div class="footer-social-container">
        <a
          href="https://www.facebook.com/gozenoti"
          target="_blank"
          class="footer-social-link mw-100 d-inline-block"
        >
          <img
            src="{{ asset('theme/assets/img/svg/facebook.svg') }}"
            loading="lazy"
            alt="Facebook Logo in white - Check out Zenoti&#x27;s Facebook page"
          />
        </a>
        <a
          href="https://twitter.com/gozenoti"
          target="_blank"
          class="footer-social-link mw-100 d-inline-block"
        >
          <img
            src="{{ asset('theme/assets/img/svg/twitter.svg') }}"
            loading="lazy"
            alt="Twitter Logo in white - Check out Zenoti&#x27;s Twitter page"
          />
        </a>
        <a
          href="https://www.linkedin.com/company/zenoti/"
          target="_blank"
          class="footer-social-link mw-100 d-inline-block"
        >
          <img
            src="{{ asset('theme/assets/img/svg/linkedin-logo.svg') }}"
            loading="lazy"
            alt="LinkedIn Logo in white - Check out Zenoti&#x27;s LinkedIn page"
          />
        </a>
        <a
          href="https://www.instagram.com/gozenoti/?hl=en"
          target="_blank"
          class="footer-social-link mw-100 d-inline-block"
        >
          <img
            src="{{ asset('theme/assets/img/svg/insta-logo.svg') }}"
            loading="lazy"
            alt="Instagram Logo in white - Check out Zenoti&#x27;s Instagram page"
          />
        </a>
        <a
          href="https://www.youtube.com/channel/UC02DL-XaONZdkyhU5-7N7TA"
          target="_blank"
          class="footer-social-link mw-100 d-inline-block"
        >
          <img
            src="{{ asset('theme/assets/img/svg/youtube.svg') }}"
            loading="lazy"
            alt="YouTube Logo in white - Check out Zenoti&#x27;s YouTube channel"
          />
        </a>
      </div>
    </div>
  </div>
</section>
<div class="toggle">
    <input id="theme-toggle" type="checkbox" />
    <label for="theme-toggle" ></label>
</form>
<footer>
  <!-- Template Main JS File -->
  <!-- Boostrap JS file -->
  <script src="{{ asset('theme/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('theme/assets/js/main.js') }}"></script>
  <script type="text/javascript">window.setTimeout("document.getElementById('flash-message').style.display='none';", 4000); </script>
  <script type="text/javascript">window.setTimeout("document.getElementById('flash-message-subscription').style.display='none';", 4000); </script>

  <script>
    function handleButtonClick(e) {
      var link = e.getAttribute('href');
      window.location.assign(link);
    }
  </script>
</footer>
