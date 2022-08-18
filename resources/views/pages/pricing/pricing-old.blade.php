@extends('layout/master')
@section('content')
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mennr</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/solutions.css" rel="stylesheet">
        <link href="css/about.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <link href="css/pricing.css" rel="stylesheet">
    </head>

    <body>

        <!-- Top Pricing Banner start -->
        <section class="pricing-main">
            <div class="text-center">
                <div class="container">
                    <h1>Everything you need to grow<br />
                        your Saas business</h1>
                    <p>A complete toolkit for scaling your business at a fraction of the price of other tools</p>
                    <h2>How Mennr compares to the alternatives</h2>
                </div>
            </div>
        </section>
        <!-- Top Pricing Banner end -->


        <!--  Pricing compare start -->
        <section class="price-compare-main py-5 my-4">
            <div class="container">
                <div class="row">
                    <div class="With-Without-Mennr-btn">
                        <button type="button" class="btn btn-primary tabs-Mennr-btn" id="with_mennr">With Mennr</button>
                        <button type="button" class="btn tabs-Mennr-btn" id="without_mennr">Without Mennr</button>
                    </div>
                    <div class="col-12 col-md-6 compare-left-part">
                        <div class="text-center compare-header">
                            <h2 class="mobile-Mennr-none">Without Mennr</h2>
                            <p>A bunch of different, disconnected tools taped together.</p>
                            <p class="small">Cost for 1k profiles</p>
                        </div>
                        <div class="pt-5 ps-5">
                            <h4>Intercom</h4>
                            <p>For: Live chat and Marketing Automation<br />
                                Cost: <b>$119/month</b></p>
                        </div>
                        <div class="pt-5 ps-5">
                            <h4>MixPanel</h4>
                            <p>For: User Analytics<br />
                                Cost: <b>$25/month</b></p>
                        </div>
                        <div class="pt-5 ps-5">
                            <h4>Hubspot</h4>
                            <p>For: Forms & Lead Capture<br />
                                Cost: <b>$50/month</b></p>
                        </div>
                        <div class="pt-5 ps-5">
                            <h4>Google Analytics</h4>
                            <p>For: Web Analytics<br />
                                Cost: <b>Your Sanity</b></p>
                        </div>

                        <div class="pt-5 pe-5">
                            <div class="compare-price-red text-center">
                                <p>For a team of 5:</p>
                                <h5>$194 / month</h5>
                            </div>
                        </div>
                        <div class="pt-3 pe-5">
                            <div class="compare-price-red text-center">
                                <p>For a team of 10:</p>
                                <h5>$289 / month</h5>
                            </div>
                        </div>
                        <div class="pt-3 pe-5">
                            <div class="compare-price-red text-center">
                                <p>For a team of 25:</p>
                                <h5>$669 / month</h5>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-md-6 compare-right-part">
                        <div class="text-center compare-header">
                            <h2 class="mobile-Mennr-none">Mennr</h2>
                            <p>One beautifully powerful platform, one simple price.</p>
                            <p class="small">Cost for 1k profiles</p>
                        </div>
                        <div class="pt-5 ps-4 pb-2 mennr-logo-mobile">
                            <h4><img src="images/logo.png" class="img-fluid compare-logo" /></h4>
                            <p><b>$119 per month</b></p>
                        </div>
                        <div class="pt-5 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Unlimited Integrations</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Unlimited Active Models</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Unlimited Lookback</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Real-time Data Refresh</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Priority Support SLA</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Community Access</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Dedicated CSM</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 ps-4">
                            <div class="d-flex align-items-center position-relative gap-2">
                                <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0 me-3">
                                    <img src="images/tick-mark.svg" width="36" />
                                </div>
                                <div>
                                    <h4>Premium Integrations</h4>
                                    <p class="mb-0">For: Live chat and Marketing Automation</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-5">
                            <div class="compare-price-green text-center">
                                <p>For your whole team:</p>
                                <h5>$79 / month</h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!--  Pricing compare end -->

        <!-- pricing table Start -->
        <section class="pricing-table-section py-5 my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pricing-table-box">
                            <div class="plan-header">
                                <h2>PRO MONTHLY PLAN</h2>
                                <h3>$99<sub>/month</sub></h3>
                                <p>2,000 leads per month</p>
                            </div>
                            <div class="brd-btm"></div>
                            <ul class="plan-list">
                                <li><span>Premium Integrations</span></li>
                                <li><span>3 Active Models</span></li>
                                <li><span>9 Months Lookback</span></li>
                                <li><span>6hrs Data Refresh</span></li>
                                <li><span>12hrs Support SLA</span></li>
                                <li><span>Community Access</span></li>
                                <li><span>Dedicated CSM</span></li>
                            </ul>
                            <div class="brd-btm"></div>
                            <ul class="plan-list coming-soon-list">
                                <h2>Coming Soon</h2>
                                <li><span>Lead Rockets</span></li>
                                <li><span>ABM RollUp</span></li>
                            </ul>
                            <div class="d-flex justify-content-center my-4">
                                <a href="#" class="btn btn-primary get-a-free-btn">Get A Free Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-table-box">
                            <div class="plan-header">
                                <h2>PRO YEARLY PLAN</h2>
                                <h3>$999<sub>/Year</sub></h3>
                                <p>2,000 leads per month</p>
                            </div>
                            <div class="brd-btm"></div>
                            <ul class="plan-list">
                                <li><span>Premium Integrations</span></li>
                                <li><span>3 Active Models</span></li>
                                <li><span>9 Months Lookback</span></li>
                                <li><span>6hrs Data Refresh</span></li>
                                <li><span>12hrs Support SLA</span></li>
                                <li><span>Community Access</span></li>
                                <li><span>Dedicated CSM</span></li>
                            </ul>
                            <div class="brd-btm"></div>
                            <ul class="plan-list coming-soon-list">
                                <h2>Coming Soon</h2>
                                <li><span>Lead Rockets</span></li>
                                <li><span>ABM RollUp</span></li>
                            </ul>
                            <div class="d-flex justify-content-center my-4">
                                <a href="#" class="btn btn-primary get-a-free-btn">Get A Free Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-table-box">
                            <div class="plan-header">
                                <h2>ENTERPRISE MONTHLY PLAN</h2>
                                <h3>Custom Price
                                    <span>Personalized pricing for unique needs</span>
                                </h3>
                                <p>Unlimited leads scored</p>
                            </div>
                            <div class="brd-btm"></div>
                            <ul class="plan-list">
                                <li><span>Unlimited Integrations</span></li>
                                <li><span>Unlimited Active Models</span></li>
                                <li><span>Unlimited Lookback</span></li>
                                <li><span>Real-time Data Refresh</span></li>
                                <li><span>Priority Support SLA</span></li>
                                <li><span>Community Access</span></li>
                                <li><span>Dedicated CSM</span></li>
                                <li><span>White Glove Onboarding</span></li>
                            </ul>
                            <div class="brd-btm"></div>
                            <ul class="plan-list coming-soon-list">
                                <h2>Coming Soon</h2>
                                <li><span>Lead Rockets</span></li>
                                <li><span>ABM RollUp</span></li>
                                <li><span>Workspaces</span></li>
                            </ul>
                            <div class="d-flex justify-content-center my-4">
                                <a href="#" class="btn btn-primary get-a-free-btn">Try for Free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing table End -->

        <!-- Faq Start -->
        <section class="faq-section">
            <h2 class="mt-2 mb-4 text-center">FAQ’s</h2>
            <div class="faq-bg">
                <div class="accordion accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How does the 14-day free trial work?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can reach out to 200 people (prospects) in the 14 days, and access all the features in
                                the Pro Plan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What happens after my free trial ends?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Sit aperiam provident doloribus eius voluptate odio alias nisi explicabo asperiores impedit,
                                sint illum accusantium laborum facilis.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do I need to enter my credit card info to sign up?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can I change my plan later?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How many emails can I send from one email account in a single day?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can I send from more than one email within one account?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Can I receive replies to a different email account?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Can I integrate a G Suite Alias account?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Sequi enim tempore alias nam.
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </section>
        <!-- Faq End -->


        <!-- Ready to See Start -->
        <section class="ready-to-see-section py-5">
            <div class="container">
                <div class="ready-to-see-box">
                    <h2>Ready to see how the Mennr <br>Software can help your business <br>to grow?</h2>
                    <div class="get-a-free-demo-btn">
                        <a href="#"> GET A FREE DEMO</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ready to See End -->

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.marquee.min.js"></script>

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

            $('.marquee').marquee({
                duration: 25000,
                gap: 30,
                delayBeforeStart: -30000,
                direction: 'left',
                duplicated: true
            });

            $(document).ready(function() {
                $('.arrow-up, .arrow-down').on('click', function(event) {
                    event.preventDefault();
                })

                $('.we-do-card').each(function(index, element) {
                    $(this).on('click', function() {
                        var children = $(this).children();
                        var arrowChildren = $(children[0]).children();

                        $(children[1]).slideToggle('card-open');
                        $(arrowChildren[2]).toggleClass('arrow-up');
                    })
                })

                $('#without_mennr').on('click', function() {
                    $(this).toggleClass('btn-primary');
                    $('#with_mennr').removeClass('btn-primary');
                    $('.compare-left-part').css('display', 'block');
                    $('.compare-right-part').css('display', 'none');
                })

                $('#with_mennr').on('click', function() {
                    $(this).toggleClass('btn-primary');
                    $('#without_mennr').removeClass('btn-primary');
                    $('.compare-left-part').css('display', 'none');
                    $('.compare-right-part').css('display', 'block');
                })

                $('.ft-menu').each(function(index, element) {
                    $(this).on('click', function(event) {
                        var children = $(this).children();

                        $(children[1]).slideToggle('ft-nav-open');
                        $(children[0]).toggleClass('active');
                    })
                })
            })
        </script>
    </body>

    </html>
@endsection
@push('footer-scripts')
@endpush
