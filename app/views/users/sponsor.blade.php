@extends('layouts.s_landing')
@section('body')

{{ HTML::style('/css/main.css') }}
{{ HTML::style('/css/animate.min.css') }}
{{ HTML::style('/css/flexslider.css') }}
{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/owl.carousel.css') }}
{{ HTML::style('/css/settings.css') }}
{{ HTML::style('/css/prettyPhoto.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}


<!-- Rev Slider -->
<section id="slider" class="contain">

    <div class="tp-banner">

        <ul>

            <!-- Slide -->
            <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800" >
                <!-- MAIN IMAGE -->
                <img src="images/singapore.jpg"  alt="slidebg2"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <!-- LAYERS -->

                <!-- Layer 1 -->
                <div class="tp-caption sft customout"
                data-x="0"
                data-y="220"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="900"
                data-start="1400"
                data-easing="Power4.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on">
                <h4 class="stext h4 fittext5">Eventory</h4>
            </div>

            <!-- Layer 2 -->
            <div class="tp-caption sfb customout"
            data-x="10"
            data-y="320"
            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
            data-speed="900"
            data-start="1700"
            data-easing="Power4.easeOut"
            data-endspeed="500"
            data-endeasing="Power4.easeIn"
            data-captionhidden="on">
            <h5 class="stext h5">Grow Your Business through Student Event Sponsorship</h5>
        </div>

    </li>

</ul>
</div>
</section>
<!-- End Rev Slider -->

<!-- Text Area -->
<section id="text-area">
    <div class="inner text-area">
        <h1>The place for marketing opportunities in schools</h1>

    </div>
</section>
<!-- End Rev Slider -->

</section>
<!-- End Home Section -->

<!-- About Section -->
<section id="about" class="contain ">

    <div class="about inner">

        <!-- First Content -->
        <div class="about-content">

            <div class="icon top">
                <i class="fa fa-check "></i>
            </div>

            <div class="content-header text">Opportunities</div>
            <div class="content-desc text">We open new doors for you to market your business in schools</div>
        </div>

        <!-- Second Content -->
        <div class="about-content">

            <div class="icon top">
                <i class="fa fa-compress "></i>
            </div>

            <div class="content-header text">Targeted Marketing</div>
            <div class="content-desc text">We bring you closer to students by connecting you to relevant school events</div>

        </div>

        <!-- Third Content -->
        <div class="about-content">

            <div class="icon top">
                <i class="fa fa-rocket "></i>
            </div>

            <div class="content-header text">Win-win</div>
            <div class="content-desc text">We facilitate a successful partnership between you and student event organisers</div>
        </div>

        <!-- Fourth Content -->
        <div class="about-content">

            <div class="icon top">
                <i class="fa fa-mobile "></i>
            </div>

            <div class="content-header text">Expertise</div>
            <div class="content-desc text">We assist you to maximise your business goals in the student market</div>

        </div>

        <div class="clear"></div>

    </div><!-- End Inner div -->

</section><!-- End About Section -->


<!-- History Section -->
<section id="history" class="contain parallax1 ">

    <div class="inner">

        <!-- History Top Icon -->
        <div class="contain-logo br">
            <i class="fa fa-clock-o "></i>
        </div>

        <!-- Header -->
        <div class="header white">
            Achieve your business goals in 5 easy steps
        </div>

        <ul class="timeline list-unstyled">

            <!-- History Year -->
            <li class="year">Sign Up</li>

            <li class="note animated" data-animation="fadeInRight" data-animation-delay="50">
                <h4>
                   Set sponsoring criteria
                </h4>
                <p class="desc">
                </p>

                <span class="arrow fa fa-play"></span>

            </li>

            <li class="note animated" data-animation="fadeInLeft" data-animation-delay="50">
                <h4>
                    We match you to relevant school events
                </h4>
                <p class="desc">
                </p>

                <span class="arrow fa fa-play"></span>

            </li>

            <li class="note animated" data-animation="fadeInRight" data-animation-delay="100">
                <h4>
                    Finalise deals to meet your goals
                </h4>
                <p class="desc">
                </p>

                <span class="arrow fa fa-play"></span>

            </li>

            <li class="note animated" data-animation="fadeInLeft" data-animation-delay="100">
                <h4>
                    Connect with your target audience through the event
                </h4>
                <p class="desc">
                </p>

                <span class="arrow fa fa-play"></span>

            </li>

            <li class="note animated" data-animation="fadeInLeft" data-animation-delay="100">
                <h4>
                    See your business grow
                </h4>
                <p class="desc">
                </p>

                <span class="arrow fa fa-play"></span>

            </li>

            <!-- History Year -->
            <li class="year">End</li>

        </ul><!-- End Timeline ul -->

    </div><!-- End inner div -->

</section><!-- End History Section -->

<section id="prices" class="contain ">

    <div class="inner prices">

        <!-- History Top Icon -->
        <div class="contain-logo br">
            <i class="fa fa-table "></i>
        </div>

        <!-- Header -->
        <div class="header ">
            pricing
        </div>

        <!-- Second Header -->
        <div class="page-desc ">
            We are still in beta stage, hence there will be no fees imposed at the moment
        </div>

    </div><!-- End inner div -->
</section><!-- End Prices Section -->

<!-- Subscribe Section -->
<section id="subscribe" class="contain">

    <div class="inner subscribe">

        <!--Subscribe Left -->
        <div class="col-xs-7 subs left">

            <!--Subscribe Left Icon -->
            <a class="left-icon">
                <i class="fa fa-envelope-o"></i>
            </a>

            <!--Subscribe Head and Texts -->
            <div class="text">
                <h1>
                    Want to expand your business?
                </h1>
                <p>
                    Register your interest with us to be our partner
                </p>
            </div>
            <div class="text" style="padding-top: 10%">
                <p>Feel free to contact us if you have further questions</p>
                <a href = "mailto:hello@eventory.com.sg"> hello@eventory.com.sg </a>
            </div>  
            <div class="clear"></div>
        </div>

        <!--Subscribe Right -->
        <div class="col-xs-5 subs right">
            {{ Form::open(array('route' => array('sponsorInterest.store'), 'method' => 'post', 'class' => 'form-horizontal form-bordered')) }}
            <!--Subscribe input -->
            
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" id="name" name="name" class="form-control" required ="required" placeholder="Your Name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="email" id="email" name="email" class="form-control" required ="required" placeholder="Your Email address to contact">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" id="organisationName" name="organisationName" rows="7" class="form-control" required ="required" placeholder="Your Organisation name"></textarea>
                </div>
            </div>

            <!--Subscribe Button -->
            <button type="submit" class="subscribe-btn subs">Sign me up!</button>
            {{ Form::close() }}
            <br/>
            <br/>
        </div>

        <div style = "text-align: center">
            <p style="font-size: 0.90rem">
                Copyright 2015 Eventory Pte. Ltd. Business Registration No. 201429745H. All rights reserved.
                <br/>
                <a href="">Terms of Use</a> | <a href ="">Privacy Policy </a>
            </p>
        </div>

        <div class="clear"></div>
    </div><!-- End Subscribe inner -->
    
</section><!-- End Subscribe Section -->
@stop
