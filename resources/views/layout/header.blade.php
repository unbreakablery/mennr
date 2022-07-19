<div class="navbar-wrapper w-100 fixed-top">
  <nav class="navbar navbar-expand-lg">
    <div class="container-lg flex-nowrap justify-content-between">
      <a href="{{ asset('/') }}" aria-current="page" class="navbar-brand">
        <img
          class="logo"
          src="{{ asset('theme/assets/img/svg/mennr-logo.png') }}"
          loading="lazy"
          width="165"
          height="45"
          alt="Zenoti Logo - Salon, spa, medspa and fitness center Management Software"
        />
      </a>
      <div class="d-flex d-lg-none navbar-toggler border-0">
        <a
          href="#"
          class="button nav-mobile me-2"
          data-bs-toggle="modal"
          data-bs-target="#requestDemoModal"
        >
          <img
            src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}"
            loading="lazy"
            alt="Orange color button"
            class="button-bg"
          />
          <div class="btn-text">Get A Free Demo</div>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    <div
      class="collapse navbar-collapse flex-lg-grow-0"
      id="navbarSupportedContent"
    >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Solutions
          </a>
          <ul class="dropdown-menu fw-semibold" aria-labelledby="navbarDropdown">
            <li>
              <a href="{{ route('spa') }}" class="dropdown-item">
                Spa
              </a>
            </li>
            <li>
              <a href="{{ route('medspa') }}" class="dropdown-item">
                Medspa
              </a>
            </li>
            <li>
              <a href="{{ route('salon') }}" class="dropdown-item">
                Salon
              </a>
            </li>
            <li>
              <a href="{{ route('fitness') }}" class="dropdown-item">
                Fitness
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Products
          </a>
          <ul
            class="dropdown-menu fw-semibold"
            aria-labelledby="navbarDropdown"
          >
            <li>
              <a
                href="{{asset('spa_salon_appointment_booking_software')}}"
                class="dropdown-item"
              >
                Appointments &amp; Bookings
              </a>
            </li>
            <li>
              <a
                href="/spa-salon-point-of-sale-software"
                class="dropdown-item"
              >
                Billing &amp; Payments
              </a>
            </li>
            <li>
              <a
                href="/spa-salon-reporting-analytics"
                class="dropdown-item"
              >
                Business Intelligence<br />
              </a>
            </li>
            <li>
              <a href="/business-management" class="dropdown-item">
                Business Management
              </a>
            </li>
            <li>
              <a href="/spa-salon-marketing-software" class="dropdown-item">
                Marketing &amp; Sales
              </a>
            </li>
            <li>
              <a href="/mobile-solutions" class="dropdown-item">
                Mobile Solutions
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('resources') }}">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('company') }}">Company</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customers.html">Customers</a>
        </li>
      </ul>
      <a
        href="#"
        class="button d-none d-lg-flex"
        data-bs-toggle="modal"
        data-bs-target="#requestDemoModal"
      >
        <img
          src="{{ asset('theme/assets/img/svg/btn-trapezoid-bg.svg') }}"
          loading="lazy"
          alt="Orange color button"
          class="button-bg"
        />
        <div class="btn-text">Get A Free Demo</div>
      </a>
    </div>
  </nav>
</div>
<!-- Request demo form modal -->
<div class="modal fade" id="requestDemoModal" tabindex="-1" aria-labelledby="requestDemoModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="popup-content-wrapper">
            <div class="form-wrapper">
                <form
                    id="wf-form-Request-a-Demo-Form"
                    name="wf-form-Request-a-Demo-Form"
                    data-name="Request a Demo Form"
                    method="get"
                    class="demo-form"
                >
                    <h2 id="requestDemoModalLabel">See us in action</h2>
                    <div class="section-heading-subtext">
                    We’d love to demonstrate what we can do for you. Fill in this
                    form &amp; we’ll contact you within 24 hours to schedule your
                    free demo.
                    </div>
                    <div class="form-grid">
                        <input
                            type="text"
                            class="text-field dark-field w-node-_4aa3c7d2-a483-f596-8369-df21a3940790-94923737 w-input"
                            maxlength="256"
                            name="First-Name"
                            data-name="First Name"
                            aria-label="First Name"
                            placeholder="First Name*"
                            id="First-Name"
                            required=""
                        />
                        <input
                            type="text"
                            class="text-field dark-field w-node-_78253c8a-4b47-764e-3a2b-674b02dbb7fc-94923737 w-input"
                            maxlength="256"
                            name="Last-Name"
                            data-name="Last Name"
                            aria-label="Last Name"
                            placeholder="Last Name*"
                            id="Last-Name"
                            required=""
                        />
                        <input
                            type="email"
                            class="text-field dark-field w-input"
                            maxlength="256"
                            name="Email-ID"
                            data-name="Email ID"
                            aria-label="Email"
                            placeholder="Email*"
                            id="nav-Email-ID-5"
                            required=""
                        />
                        <input
                            type="tel"
                            class="text-field dark-field w-input"
                            maxlength="256"
                            name="Phone-Number"
                            data-name="Phone Number"
                            aria-label="Phone Number"
                            placeholder="Phone Number*"
                            id="nav-Phone-Number-5"
                            required=""
                        />
                        <input
                            type="text"
                            class="text-field dark-field w-input"
                            maxlength="256"
                            name="Company-Name"
                            data-name="Company Name"
                            aria-label="Company Name"
                            placeholder="Company Name*"
                            id="Company-Name-4"
                            required=""
                        />
                        <input
                            type="number"
                            class="text-field dark-field w-input"
                            max="9999"
                            maxlength="256"
                            name="Number-of-Locations"
                            data-name="Number of Locations"
                            aria-label="Number of Locations"
                            min="0"
                            placeholder="Number of Locations*"
                            id="Number-of-Locations-8"
                            required=""
                        />
                        <select
                            id="Business-Type-4"
                            name="Business-Type"
                            data-name="Business Type"
                            required=""
                            aria-label="Business Type"
                            class="text-field dark-field w-select"
                        >
                            <option value="">Business Type*</option>
                            <option value="Salon">Salon</option>
                            <option value="Spa">Spa</option>
                            <option value="Medical Spa">Medspa</option>
                            <option value="Fitness">Fitness</option>
                            <option value="Other">Other</option>
                        </select>
                        <select
                            id="Number-of-Providers-3"
                            name="Number-of-Providers-3"
                            data-name="Number Of Providers 3"
                            required=""
                            aria-label="Number of Providers"
                            class="text-field dark-field w-node-_4aa3c7d2-a483-f596-8369-df21a3940796-94923737 w-select"
                        >
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
                    <div class="embed">
                        <input
                            type="hidden"
                            name="lead_source"
                            value="Website: Demo Request"
                        />
                        <input
                            type="hidden"
                            id="CountryPopupEbook"
                            class="CountryPopupEbook"
                            name="country"
                            value=""
                        />
                        <input
                            type="hidden"
                            id="CityPopupEbook"
                            class="CityPopupEbook"
                            name="city"
                            value=""
                        />
                        <input
                            type="hidden"
                            id="StatePopupEbook"
                            class="StatePopupEbook"
                            name="state"
                            value=""
                        />
                        <input
                            type="hidden"
                            name="00N4100000C63rc"
                            title="Business Region"
                            id="bregionPopupEbook"
                            class="bregionPopupEbook"
                            value=""
                        />
                        <input
                            type="hidden"
                            name="00N4100000UznQt"
                            id="00N4100000UznQt"
                            title="Previous URL"
                            value=""
                        />
                        <input
                            type="hidden"
                            name="00N4100000BizyQ"
                            id="lp_url"
                            class="lp_url"
                            title="Landing Page URL"
                            value=""
                        />
                    </div>
                    <div
                        data-theme="compact"
                        data-sitekey="6LdNPh4TAAAAAFXDcLfrqZGAso-Qk1EaaQkeXnOk"
                        class="w-form-formrecaptcha checkbox-recaptcha bottom-margin-neg8 g-recaptcha g-recaptcha-error g-recaptcha-disabled"
                    ></div>
                    <input
                        type="submit"
                        value="Get A Free Demo"
                        data-wait="Please wait..."
                        class="button form-submit-btn"
                    />
                </form>
                <div class="success-message dark-state d-none">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail d-none">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
