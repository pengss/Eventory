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
			<h5 class="stext h5">Secure sponsorship deals to kickstart your events today</h5>
		</div>

	</li>

</ul>
</div>
</section>
<!-- End Rev Slider -->

<!-- Text Area -->
<section id="text-area">
	<div class="inner text-area">
		<h1>The place for event sponsorship</h1>

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

			<div class="content-header text">Get Sponsored</div>
			<div class="content-desc text">We maximise your chances to secure sponsorship deals by connecting you to relevant sponsors</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

		</div>

		<!-- Second Content -->
		<div class="about-content">

			<div class="icon top">
				<i class="fa fa-compress "></i>
			</div>

			<div class="content-header text">Save Time</div>
			<div class="content-desc text">We optimised the sponsorship process to eliminate repeated effort in contacting sponsors</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

		</div>

		<!-- Third Content -->
		<div class="about-content">

			<div class="icon top">
				<i class="fa fa-rocket "></i>
			</div>

			<div class="content-header text">Win-win</div>
			<div class="content-desc text">We facilitate a successful partnership between you and the sponsors</div>

			<div class="icon bottom">
				<i class="fa fa-plus "></i>
			</div>

		</div>

		<!-- Fourth Content -->
		<div class="about-content">

			<div class="icon top">
				<i class="fa fa-mobile "></i>
			</div>

			<div class="content-header text">Free Sign-up</div>
			<div class="content-desc text">We invite you to join us and publish your events at no charge</div>

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
					Need <span> sponsors</span> for your event?
				</h1>
				<p>
					Register your interest with us to take part in our ALPHA launch
				</p>
			</div>
			<div class="text" style="padding-top: 10%">
				<p>Feel free to contact us if you have further questions</p>
				hello@eventory.com.sg
			</div>	
			<div class="clear"></div>
		</div>

		<!--Subscribe Right -->
		<div class="col-xs-5 subs right">
			{{ Form::open(array('route' => array('interest.store'), 'method' => 'post', 'class' => 'form-horizontal form-bordered')) }}
			<!--Subscribe input -->
			
			<div class="form-group">
				<div class="col-md-12">
					<input type="email" id="email" name="email" class="form-control" placeholder="Your Email address to contact">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<textarea id="details	" name="details" rows="7" class="form-control" placeholder="Tell us more of your event.. Eg. What's your event about? What is your estimate turnout and target audience? What sponsorship are you seeking?"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label eventdate">Your Event Date</label>
				<div class="col-md-7">
					<input type="date" class="subscribe-mail input-datepicker form-control"  required="required" name="event_date" placeholder="Your event date" data-date-format="dd-mm-yyyy" />
				</div>
			</div>

			<!--Subscribe Button -->
			<button type="submit" class="subscribe-btn subs">SIGN ME UP!</button>
			{{ Form::close() }}
			<br/>
			<br/>
		</div>

		<div class="clear"></div>
	</div><!-- End Subscribe inner -->
	
</section><!-- End Subscribe Section -->

@stop
