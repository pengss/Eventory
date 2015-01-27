@extends('layouts.default')
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

<!--
<div class="row">
    <div class="col-md-4 col-md-offset-4">
		{{ Form::open(array('url' => 'login', 'method' => 'post')) }}
		 <div class="form-group">
			{{Form::label('username','Username')}}
			{{Form::text('username', null,array('class' => 'form-control','required' => 'required'))}}
		</div>
		<div class="form-group">	
		{{Form::label('password','Password')}}
		{{Form::password('password',array('class' => 'form-control','required' => 'required'))}}
		</div>
		{{Form::submit('Login', array('class' => 'btn btn-primary'))}}
		{{ Form::close() }}
	</div>
</div>-->



<!-- Rev Slider -->
<section id="slider" class="contain">

	<div class="tp-banner">

		<ul>

<!-- Slide -->
<li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800" >
	<!-- MAIN IMAGE -->
	<img src="images/rev-slider/slide2.jpg"  alt="slidebg2"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
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
<h5 class="stext h5">The right place for event sponsorship</h5>
</div>

</li>

</ul>
</div>
</section>
<!-- End Rev Slider -->

<!-- Text Area -->
<section id="text-area">
	<div class="inner text-area">
		<h1>Find Sponsors to kick-start your event today</h1>

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

			<div class="content-header text">Higher chances</div>
			<div class="content-desc text">Our sponsorship process increases your chances of securing sponsorships</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

		</div>

		<!-- Second Content -->
		<div class="about-content">

			<div class="icon top">
				<i class="fa fa-compress "></i>
			</div>

			<div class="content-header text">Assurance</div>
			<div class="content-desc text">We protect your interests in the sponsorship</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

		</div>

		<!-- Third Content -->
		<div class="about-content">

			<div class="icon top">
				<i class="fa fa-rocket "></i>
			</div>

			<div class="content-header text">Effort-less</div>
			<div class="content-desc text">Reach out to many sponsors by introducing your event once</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

		</div>

		<!-- Fourth Content -->
		<div class="about-content">

			<div class="icon top">
				<i class="fa fa-mobile "></i>
			</div>

			<div class="content-header text">Less worries</div>
			<div class="content-desc text">We will bring sponsors to you while you focus on organising your Eventory</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

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
			Get Sponsors in 4 easy steps
		</div>

		<ul class="timeline list-unstyled">

			<!-- History Year -->
			<li class="year">Sign Up</li>

			<li class="note animated" data-animation="fadeInRight" data-animation-delay="50">
				<h4>
					Tell us about your event
				</h4>
				<p class="desc">
					Simply fill up a creation form to let us know about your event
				</p>

				<span class="arrow fa fa-play"></span>

			</li>

			<li class="note animated" data-animation="fadeInLeft" data-animation-delay="50">
				<h4>
					We connect you to sponsors
				</h4>
				<p class="desc">
					Using our matching algorithm we match you to the most relevant sponsors in our database
				</p>

				<span class="arrow fa fa-play"></span>

			</li>

			<li class="note animated" data-animation="fadeInRight" data-animation-delay="100">
				<h4>
					Finalise sponsorship deal
				</h4>
				<p class="desc">
					Create packages for your event and communicate with your sponsor easily
				</p>

				<span class="arrow fa fa-play"></span>

			</li>

			<li class="note animated" data-animation="fadeInLeft" data-animation-delay="100">
				<h4>
					Hold an awesome event
				</h4>
				<p class="desc">
					Focus on planning and don't worry about sponsorship deals
				</p>

				<span class="arrow fa fa-play"></span>

			</li>

			<!-- History Year -->
			<li class="year">Done</li>

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
			price packages
		</div>

		<!-- Second Header -->
		<div class="page-desc ">
			Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
		</div>

		<div class="packages">
			<!-- First Package -->
			<div class="package first animated" data-animation="flipInY" data-animation-delay="100">
				<!-- Package Header -->
				<h1>Starter</h1>
				<!-- Package Price -->
				<div class="circle">
					<h2>$19 <span>.00</span></h2>
					<p>per month</p>
				</div>
				<!-- Package Properties -->
				<ol>
					<li>Premium Profile Listing</li>
					<li><span>Unlimited </span>File Access</li>
					<li><span>Free </span>Appointments</li>
					<li><span>5 Bonus </span>Points every month</li>
					<li><span>2 months</span> support</li>
					<li><span>2</span> subdomains</li>
				</ol>
				<!-- Package Button -->
				<a class="p-btn">Buy Now</a>
			</div>

			<!-- Second Package -->
			<div class="package animated" data-animation="flipInY" data-animation-delay="300">
				<!-- Package Header -->
				<h1>Standart</h1>
				<!-- Package Price -->
				<div class="circle">
					<h2>$39 <span>.00</span></h2>
					<p>per month</p>
				</div>
				<!-- Package Properties -->
				<ol>
					<li>Premium Profile Listing</li>
					<li><span>Unlimited </span>File Access</li>
					<li><span>Free </span>Appointments</li>
					<li><span>5 Bonus </span>Points every month</li>
					<li><span>2 months</span> support</li>
					<li><span>2</span> subdomains</li>
				</ol>
				<!-- Package Button -->
				<a class="p-btn">Buy Now</a>
			</div>

			<!-- Third Package -->
			<div class="package active animated" data-animation="flipInY" data-animation-delay="500">
				<!-- Package Header -->
				<h1>Professional</h1>
				<!-- Package Price -->
				<div class="circle">
					<h2>$59 <span>.00</span></h2>
					<p>per month</p>
				</div>
				<!-- Package Properties -->
				<ol>
					<li>Premium Profile Listing</li>
					<li><span>Unlimited </span>File Access</li>
					<li><span>Free </span>Appointments</li>
					<li><span>5 Bonus </span>Points every month</li>
					<li><span>2 months</span> support</li>
					<li><span>2</span> subdomains</li>
				</ol>
				<!-- Package Button -->
				<a class="p-btn">Buy Now</a>
			</div>

			<!-- Fourth Package -->
			<div class="package last animated" data-animation="flipInY" data-animation-delay="700">
				<!-- Package Header -->
				<h1>Platinum</h1>
				<!-- Package Price -->
				<div class="circle">
					<h2>$79 <span>.00</span></h2>
					<p>per month</p>
				</div>
				<!-- Package Properties -->
				<ol>
					<li>Premium Profile Listing</li>
					<li><span>Unlimited </span>File Access</li>
					<li><span>Free </span>Appointments</li>
					<li><span>5 Bonus </span>Points every month</li>
					<li><span>2 months</span> support</li>
					<li><span>2</span> subdomains</li>
				</ol>
				<!-- Package Button -->
				<a class="p-btn">Buy Now</a>
			</div>

			<div class="clear"></div>
		</div><!-- End Packages -->
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
					subscribe to our <span> newsletter ?</span>
				</h1>
				<p>
					This is Photoshop's version  of Lorem Ipsum. Proin gravida.
				</p>
			</div>
			<div class="clear"></div>
		</div>

		<!--Subscribe Right -->
		<div class="col-xs-5 subs right">
			<form id="subscribe-mail" method="post" action="http://wisten.goldeyestheme.com/">
				<!--Subscribe input -->
				<input type="email" class="subscribe-mail"  required="required" id="e-mail" placeholder="Your mail adress" />
				<!--Subscribe Button -->
				<button type="submit" class="subscribe-btn subs">subscribe</button>
			</form>
		</div>

		<div class="clear"></div>
	</div><!-- End Subscribe inner -->
	
</section><!-- End Subscribe Section -->

<!--Contact Section -->
<section id="contact" class="contain ">


	<!--Contact Form -->
	<div class="contact-form">

		<form id="contact-us" method="post" action="http://wisten.goldeyestheme.com/">

			<!--Contact Header -->
			<h1 class="contact-us">Contact Us</h1>
			<!-- Name Input -->
			<input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
			<!-- Email Input -->
			<input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
			<!-- Subject Input -->
			<input type="text" name="subject" id="subject" class="form" placeholder="Subject" />
			<!-- Message Area -->
			<textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
			<!-- Send Button -->
			<button type="submit" id="submit" name="submit" class="form-btn"><i class="fa fa-envelope"></i></button> 

		</form>

	</div><!-- End Contact Form -->

	<!-- Contact Top Icon -->
	<div class="contain-logo contact-logo">
		<i class="fa fa-map-marker "></i>
	</div>

	<!-- Google Map -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<div id="map"></div>
	<!-- End Google Map -->

</section><!-- End Contact Section -->

@stop
