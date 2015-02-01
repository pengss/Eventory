@extends('layouts.landing')
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
					Need <span> sponsors</span> for your event?
				</h1>
				<p>
					Register your interest with us to take part in our ALPHA launch
				</p>
			</div>
			<div class="clear"></div>
		</div>

		<!--Subscribe Right -->
		<div class="col-xs-5 subs right">
			{{ Form::open(array('route' => array('interest.store'), 'method' => 'post')) }}
				<!--Subscribe input -->
				<div class="form-group">
					<input type="email" class="subscribe-mail"  required="required" name="email" placeholder="Your mail adress" />
					<input type="text" class="subscribe-mail"  required="required" name="details" placeholder="What's your upcoming event about" />
					<input type="date" class="subscribe-mail"  required="required" name="event_date" placeholder="Your event date" />
				</div>
				<!--Subscribe Button -->
				<div class="form-group form-actions">
					<button type="submit" class="subscribe-btn subs">SIGN ME UP!</button>
				</div>
			{{ Form::close() }}
		</div>

		<div class="clear"></div>
	</div><!-- End Subscribe inner -->
	
</section><!-- End Subscribe Section -->

@stop
