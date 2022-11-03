@extends('layouts.user')
@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="home-slider">
        <div class="tp-banner-container">
            <div class="tp-banner-fix">
                <ul>
                    <!-- Slider 1 -->
                    <li data-transition="fade" data-slotamount="7"> <img
                            src="{{ asset('frontend') }}/images/slides/slide-bg-1.jpg" data-bgposition="center top"
                            alt="" />

                        <!-- Layer -->
                        <div class="tp-caption sft tp-resizeme font-extra-bold" data-x="right" data-hoffset="0"
                            data-y="center" data-voffset="0" data-speed="700" data-start="700" data-easing="easeOutBack"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                            data-endspeed="300" data-captionhidden="on"> <img
                                src="{{ asset('frontend') }}/images/slides/img--1-1.png" alt=""> </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme font-bold" data-x="left" data-hoffset="40" data-y="center"
                            data-voffset="-100" data-speed="500" data-start="700"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-easing="Back.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on"
                            style="color: #fff; font-size: 48px; font-weight: normal; letter-spacing:0px; line-height:55px;">
                            Internet Marketing Solutions <br>
                            Fast and Affortable </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme" data-x="left" data-hoffset="40" data-y="center"
                            data-voffset="30" data-speed="500" data-start="1000"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-easing="Back.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on"
                            style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;"> Do you
                            want to improve the online visibility of <br> your brand and drive more relevant traffic
                            <br> to your website.
                        </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme font-crimson" data-x="left" data-hoffset="40"
                            data-y="center" data-voffset="150" data-speed="500" data-start="1300"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-easing="Back.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on" style=""> <a
                                href="{{ asset('frontend') }}/#." class="btn">Learn
                                More</a> <a href="{{ asset('frontend') }}/#." class="btn btn-white margin-left-20">Get a
                                quote</a>
                        </div>
                    </li>

                    <!-- Slider 1 -->
                    <li data-transition="fade" data-slotamount="7"> <img
                            src="{{ asset('frontend') }}/images/slides/slide-bg-2.jpg" data-bgposition="center top"
                            alt="" />

                        <!-- Layer -->
                        <div class="tp-caption sft tp-resizeme font-extra-bold" data-x="right" data-hoffset="0"
                            data-y="center" data-voffset="0" data-speed="700" data-start="700" data-easing="easeOutBack"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                            data-endspeed="300" data-captionhidden="on"> <img
                                src="{{ asset('frontend') }}/images/slides/img--2-1.png" alt=""> </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme font-bold" data-x="left" data-hoffset="40"
                            data-y="center" data-voffset="-100" data-speed="500" data-start="700"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-easing="Back.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on"
                            style="color: #fff; font-size: 48px; font-weight: normal; letter-spacing:0px; line-height:55px;">
                            Lets Make Your WebSite <br>
                            Standout </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme" data-x="left" data-hoffset="40" data-y="center"
                            data-voffset="30" data-speed="500" data-start="1000"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-easing="Back.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on"
                            style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;"> Do you
                            want to improve the online visibility of <br> your brand and drive more relevant traffic
                            <br> to your website.
                        </div>


                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme font-crimson" data-x="left" data-hoffset="40"
                            data-y="center" data-voffset="150" data-speed="500" data-start="1300"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-easing="Back.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on" style=""> <a
                                href="{{ asset('frontend') }}/#." class="btn btn-med dark-border">Learn More</a> <a
                                href="{{ asset('frontend') }}/#." class="btn btn-white margin-left-20">Get a
                                quote</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">


        <!-- Intro -->
        <section class="intro padding-top-100 padding-bottom-100">
            <div class="container">
                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    <h2>What We Do</h2>
                    <span>Do you want to improve the online visibility of your brand and to your website?</span>
                </div>



                <!-- What We do -->
                <div class="row">

                    <div class="col-md-6">
                        <!-- Tittle -->
                        <div class="heading-block text-left margin-bottom-20">
                            <h2>We Improve your online performance</h2>
                            <p>Monitor keyword rankings daily to strategise and forecast your digital marketing
                                efforts. Track tens of thousands of keywords and manage valuable keyterms with
                                easy-to-edit labels. intalyse Rankings also allows you to keep an eye on the with
                                for comparison with your own keyword performance.</p>
                        </div>

                        <!-- List Style -->
                        <ul class="row list-what-we">
                            <li class="col-sm-6">
                                <h6>SEO Services</h6>
                                <hr>
                                <p>Duis posuere blandit orci sed idunt lite. Curabit fringilla nisl blandit.</p>
                            </li>
                            <li class="col-sm-6">
                                <h6>Site Audit</h6>
                                <hr>
                                <p>Duis posuere blandit orci sed idunt lite. Curabit fringilla nisl blandit.</p>
                            </li>
                            <li class="col-sm-6">
                                <h6>Analytical Report</h6>
                                <hr>
                                <p>Duis posuere blandit orci sed idunt lite. Curabit fringilla nisl blandit.</p>
                            </li>
                            <li class="col-sm-6">
                                <h6>Link Building</h6>
                                <hr>
                                <p>Duis posuere blandit orci sed idunt lite. Curabit fringilla nisl blandit.</p>
                            </li>
                        </ul>
                    </div>

                    <!-- Image -->
                    <div class="col-md-6"> <img class="img-responsive" src="{{ asset('frontend') }}/images/process.jpg"
                            alt=" ">
                    </div>
                </div>
            </div>
        </section>


        <!-- Seo Secore -->
        <section class="bg-parallax seo-secore padding-top-100 padding-bottom-100"
            style="background:url(images/bg/bg-parallax.jpg) no-repeat;">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block white-text text-center margin-bottom-50">
                    <h2>What’s Your SEO Score ?</h2>
                    <span>See how well your page is optimised for your keyword</span>
                </div>

                <!-- Form -->
                <form>
                    <ul class="row">
                        <li class="col-md-3">
                            <input type="text" class="form-control" placeholder="http://">
                        </li>
                        <li class="col-md-3">
                            <input type="text" class="form-control" placeholder="Keyword">
                        </li>
                        <li class="col-md-3">
                            <input type="text" class="form-control" placeholder="Email">
                        </li>
                        <li class="col-md-3">
                            <button type="submit" class="btn btn-orange">Check Now !</button>
                        </li>
                    </ul>
                </form>
            </div>
        </section>



        <!-- Infinity Solution -->
        <section class="offer-services padding-top-100">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    <h2>What Services We Offer </h2>
                    <span class="intro-style">Do you want to improve the online visibility of your brand and
                        drive more relevant traffic to your website?</span>
                </div>
                <div class="text-center"> <img src="{{ asset('frontend') }}/images/services-img.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- INTRO -->
        <section class="bg-parallax text-center padding-top-60 padding-bottom-60"
            style="background:url(images/bg/bg-parallax.jpg) no-repeat;">
            <div class="container">
                <div class="text-center margin-bottom-50">
                    <p class="text-white intro-style font-14px">We are a full service SEO agency. Our social media
                        experts can help you establish your business objectives, identify your target audience,
                        create engaging and share-worthy content and finally integrate your social media with all
                        other aspects of your online presence.</p>
                </div>
                <a href="{{ asset('frontend') }}/#." class="btn btn-orange">Learn More</a>
            </div>
        </section>



        <!-- Case Studies -->
        <section class="case-studies light-gray-bg padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    <h2>Recent Case Studies </h2>
                    <span class="intro-style">Do you want to improve the online visibility of your brand </span>
                </div>

                <!-- Cases -->
                <div class="case">
                    <ul class="row">

                        <!-- Case 1 -->
                        <li class="col-md-4">
                            <article> <a href="{{ asset('frontend') }}/#"> <img class="img-responsive"
                                        src="{{ asset('frontend') }}/images/case-img-1.jpg" alt=""> </a>
                                <div class="case-detail">
                                    <h5>Tremely Design</h5>
                                    <p>Paid listings on Google AdWords and
                                        Microsoft AdCenter customers</p>
                                </div>
                            </article>
                        </li>

                        <!-- Case 2 -->
                        <li class="col-md-4">
                            <article> <a href="{{ asset('frontend') }}/#"> <img class="img-responsive"
                                        src="{{ asset('frontend') }}/images/case-img-2.jpg" alt=""> </a>
                                <div class="case-detail">
                                    <h5>Tremely Design</h5>
                                    <p>Paid listings on Google AdWords and
                                        Microsoft AdCenter customers</p>
                                </div>
                            </article>
                        </li>

                        <!-- Case 3 -->
                        <li class="col-md-4">
                            <article> <a href="{{ asset('frontend') }}/#"> <img class="img-responsive"
                                        src="{{ asset('frontend') }}/images/case-img-3.jpg" alt=""> </a>
                                <div class="case-detail">
                                    <h5>Tremely Design</h5>
                                    <p>Paid listings on Google AdWords and
                                        Microsoft AdCenter customers</p>
                                </div>
                            </article>
                        </li>
                    </ul>

                    <!-- Button -->
                    <div class="text-center margin-top-50"> <a href="{{ asset('frontend') }}/#."
                            class="btn btn-orange">View
                            More</a> </div>
                </div>
            </div>
        </section>



        <!-- Flow Work  -->
        <section class="flow-work padding-top-80 padding-bottom-80">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    <h2>Our Work Flow </h2>
                    <span class="intro-style">Do you want to improve the online visibility of your brand and
                        drive more relevant traffic to your website? </span>
                </div>
                <div class="text-center"> <img src="{{ asset('frontend') }}/images/work-folow-img.jpg" alt=" ">
                </div>
                <ul class="row padding-left-50 padding-right-50">
                    <li class="col-sm-3">
                        <div class="icon"> <img src="{{ asset('frontend') }}/images/flow-icon-1.png" alt="">
                        </div>
                        <h6>Planing</h6>
                        <p>Duis posuere blandit orci sed
                            fringilla nisl blandit.</p>
                    </li>
                    <li class="col-sm-3">
                        <div class="icon"> <img src="{{ asset('frontend') }}/images/flow-icon-2.png" alt="">
                        </div>
                        <h6>Designing</h6>
                        <p>Duis posuere blandit orci sed
                            fringilla nisl blandit.</p>
                    </li>
                    <li class="col-sm-3">
                        <div class="icon"> <img src="{{ asset('frontend') }}/images/flow-icon-3.png" alt="">
                        </div>
                        <h6>Developing</h6>
                        <p>Duis posuere blandit orci sed
                            fringilla nisl blandit.</p>
                    </li>
                    <li class="col-sm-3">
                        <div class="icon"> <img src="{{ asset('frontend') }}/images/flow-icon-4.png" alt="">
                        </div>
                        <h6>Launch</h6>
                        <p>Duis posuere blandit orci sed
                            fringilla nisl blandit.</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Google Front Page -->
        <section class="front-page bg-parallax" style="background:url(images/bg/report-bg.jpg) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Tittle -->
                        <div class="heading-block text-left margin-bottom-20 margin-top-100">
                            <h2>Access Analytics Reports</h2>
                            <p class="font-14px line-height-30">Intalyse allows you to plug-in your Google
                                Analytics profile to enable your very own integrated GA dashboard. Generate
                                on-demand reports on Acquisition, of Behaviour and Conversion metrics over your
                                chosen date range.</p>

                            <!-- Buttons -->
                            <a href="{{ asset('frontend') }}/#." class="btn btn-orange margin-top-20">VIEW
                                MORE</a>
                        </div>

                    </div>

                    <div class="col-md-7"> <img src="{{ asset('frontend') }}/images/report-img.png" alt=" ">
                    </div>

                </div>
            </div>
        </section>





        <!-- Case Studies -->
        <section class="pricing-table light-gray-bg padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    <h2>Affordable SEO Services Packages </h2>
                    <span class="intro-style">Choose from affordable SEO services packages & get the best results
                        in return. </span>
                </div>
                <div class="row">

                    <!-- Price -->
                    <div class="col-md-4">
                        <!-- Icon -->
                        <div class="plan-icon"><img src="{{ asset('frontend') }}/images/plan-icon-1.png" alt=" ">
                        </div>

                        <!-- Plan  -->
                        <div class="pricing-head">
                            <h4>Basic Plan</h4>
                            <span class="curency">$</span> <span class="amount">25<span>.99</span></span> <span
                                class="month">/ month</span>
                        </div>

                        <!-- Plean Detail -->
                        <div class="price-in">
                            <ul class="text-center">
                                <li>25 Analytics Campaigns</li>
                                <li> 1,900 Keywords</li>
                                <li> 1,250,000 Crawled Pages</li>
                                <li> Includes Branded Reports</li>
                                <li> 50 Social Accounts</li>
                            </ul>
                            <a href="{{ asset('frontend') }}/#." class="btn btn-orange">PURCHACE</a>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="col-md-4">
                        <!-- Icon -->
                        <div class="plan-icon orange-bg"><img src="{{ asset('frontend') }}/images/plan-icon-2.png"
                                alt=" "></div>

                        <!-- Plan  -->
                        <div class="pricing-head orange-bg">
                            <h4>Advanced Plan</h4>
                            <span class="curency">$</span> <span class="amount">45<span>.99</span></span> <span
                                class="month">/ month</span>
                        </div>

                        <!-- Plean Detail -->
                        <div class="price-in">
                            <ul class="text-center">
                                <li>25 Analytics Campaigns</li>
                                <li> 1,900 Keywords</li>
                                <li> 1,250,000 Crawled Pages</li>
                                <li> Includes Branded Reports</li>
                                <li> 50 Social Accounts</li>
                            </ul>
                            <a href="{{ asset('frontend') }}/#." class="btn btn-orange">PURCHACE</a>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="col-md-4">
                        <!-- Icon -->
                        <div class="plan-icon"><img src="{{ asset('frontend') }}/images/plan-icon-3.png" alt=" ">
                        </div>

                        <!-- Plan  -->
                        <div class="pricing-head">
                            <h4>Premium Plan</h4>
                            <span class="curency">$</span> <span class="amount">65<span>.99</span></span> <span
                                class="month">/ month</span>
                        </div>

                        <!-- Plean Detail -->
                        <div class="price-in">
                            <ul class="text-center">
                                <li>25 Analytics Campaigns</li>
                                <li> 1,900 Keywords</li>
                                <li> 1,250,000 Crawled Pages</li>
                                <li> Includes Branded Reports</li>
                                <li> 50 Social Accounts</li>
                            </ul>
                            <a href="{{ asset('frontend') }}/#." class="btn btn-orange">PURCHACE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="testimonial red-bg padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block white-text text-center margin-bottom-80">
                    <h2>Why Customer <i class="fa fa-heart white-text"></i> us! </h2>
                    <span class="intro-style">Do you want to improve the online visibility of your brand and
                        drive more relevant traffic to your website? </span>
                </div>

                <!-- Testi Slider -->
                <div class="testi-slides-flex">
                    <ul class="slides">

                        <!-- Slide 1 -->
                        <li>
                            <div class="avatar"> <img src="{{ asset('frontend') }}/images/avatar-2.png" alt="">
                                <h6>tim rijkes / <span>CEO - Founder </span></h6>
                                <p>“Here's the story of a lovely lady who was bringing up three very lovely girls.
                                    The first mate and his Skipper too will do their very best to make the others
                                    comfortable in their tropic island nest. I have always wanted to have a neighbor
                                    just like you. I've always wanted to live in a neighborhood with you.”</p>
                            </div>
                        </li>

                        <!-- Slide 2 -->
                        <li>
                            <div class="avatar"> <img src="{{ asset('frontend') }}/images/avatar-2.png" alt="">
                                <h6>tim rijkes / <span>CEO - Founder </span></h6>
                                <p>“Here's the story of a lovely lady who was bringing up three very lovely girls.
                                    The first mate and his Skipper too will do their very best to make the others
                                    comfortable in their tropic island nest. I have always wanted to have a neighbor
                                    just like you. I've always wanted to live in a neighborhood with you.”</p>
                            </div>
                        </li>

                        <!-- Slide 3 -->
                        <li>
                            <div class="avatar"> <img src="{{ asset('frontend') }}/images/avatar-2.png" alt="">
                                <h6>tim rijkes / <span>CEO - Founder </span></h6>
                                <p>“Here's the story of a lovely lady who was bringing up three very lovely girls.
                                    The first mate and his Skipper too will do their very best to make the others
                                    comfortable in their tropic island nest. I have always wanted to have a neighbor
                                    just like you. I've always wanted to live in a neighborhood with you.”</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Our Clients  -->
        <section class="clients white-bg padding-bottom-100 padding-top-100">
            <div class="container">

                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    <h2>Our Valued Clients </h2>
                    <span class="intro-style">Do you want to improve the online visibility of your brand and
                        drive more relevant traffic to your website? </span>
                </div>

                <!-- Clients Images -->
                <ul class="row text-center">
                    <li class="col-md-2"> <img class="img-responsive"
                            src="{{ asset('frontend') }}/images/clients-logo-1.jpg" alt=""></li>
                    <li class="col-md-2"> <img class="img-responsive"
                            src="{{ asset('frontend') }}/images/clients-logo-2.jpg" alt=""></li>
                    <li class="col-md-2"> <img class="img-responsive"
                            src="{{ asset('frontend') }}/images/clients-logo-3.jpg" alt=""></li>
                    <li class="col-md-2"> <img class="img-responsive"
                            src="{{ asset('frontend') }}/images/clients-logo-4.jpg" alt=""></li>
                    <li class="col-md-2"> <img class="img-responsive"
                            src="{{ asset('frontend') }}/images/clients-logo-5.jpg" alt=""></li>
                    <li class="col-md-2"> <img class="img-responsive"
                            src="{{ asset('frontend') }}/images/clients-logo-6.jpg" alt=""></li>
                </ul>
            </div>
        </section>
    </div>
    <!-- End Content -->
@endsection
