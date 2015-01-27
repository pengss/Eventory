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


<!-- Features Section -->
<section id="features" class="contain ">

	<!-- Features Top Icon -->
	<div class="contain-logo">
		<i class="fa fa-check-circle-o "></i>
	</div>

	<div class="inner">

		<!-- Header -->
		<div class="header">
			are you wanna be happy ?
		</div>

		<!-- Second Header -->
		<div class="page-desc">
			Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
		</div>

		<ul class="f-iphone">
			
			<li class="f-box f1 animated" data-animation="fadeInLeft" data-animation-delay="0">
				<div class="f-box-logo"><i class="fa fa-camera-retro"></i></div>
				<div class="f-box-head">photography</div>
				<div class="f-box-desc">Contrary to popular a belief, Lorem Ipsum is not simply It has roots in a piece of classical Latin literature Richard McClintock,</div>
			</li>

			<li class="f-box f2 animated" data-animation="fadeInRight" data-animation-delay="200">
				<div class="f-box-logo"><i class="fa fa-pagelines"></i></div>
				<div class="f-box-head">design</div>
				<div class="f-box-desc">Contrary to popular a belief, Lorem Ipsum is not simply It has roots in a piece of classical Latin literature Richard McClintock,</div>
			</li>

			<li class="f-box f3 animated" data-animation="fadeInLeft" data-animation-delay="400">
				<div class="f-box-logo"><i class="fa fa-laptop"></i></div>
				<div class="f-box-head">analystic</div>
				<div class="f-box-desc">Contrary to popular a belief, Lorem Ipsum is not simply It has roots in a piece of classical Latin literature Richard McClintock,</div>
			</li>

			<li class="f-box f4 animated" data-animation="fadeInRight" data-animation-delay="600">
				<div class="f-box-logo"><i class="fa fa-cloud-upload"></i></div>
				<div class="f-box-head">online support</div>
				<div class="f-box-desc">Contrary to popular a belief, Lorem Ipsum is not simply It has roots in a piece of classical Latin literature Richard McClintock,</div>
			</li>

		</ul>

		<div class="clear"></div>
	</div><!-- End Inner div -->

</section><!-- End Features Section -->


<!-- Skills Section -->
<section id="skills" class="contain ">

	<div class="inner skills">

		<!-- Features Top Icon -->
		<div class="contain-logo br">
			<i class="fa fa-rocket "></i>
		</div>


		<!-- Tabs -->
		<div class="tabs">

			<!-- Nav Menu -->	
			<ul class="nav nav-tabs" id="tab-menu">
				<li class="active"><a href="#first" data-toggle="tab">Design</a></li>
				<li><a href="#second" data-toggle="tab">Company</a></li>
				<li><a href="#third" data-toggle="tab">Suport</a></li>
				<li><a href="#fourth" data-toggle="tab">Photography</a></li>
			</ul>

			<div class="tab-content">

				<!-- Icon Left -->
				<div class="tab-pane fade in active" id="first">

					<div class="tab-icon">

						<img src="images/tab-icon1.png" alt=""/>

					</div>

					<div class="tab-desc">

						<p>There are many variations of passages Lorem Ipsum available, but majority have suffered alteration in some form, injected humour, randomised words which don't look even slightly believable. If you are going to use a passage  em Ipsum, you need to sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend repeat predefined chunks necessary, making this the first true generator Internet. </p>

						<p>Which don't look even slightly believable. If you are going use a passage of Ipsum, you need be sure there isn't anything embarrassing hidden in the predefined chunks as necessary.</p>

					</div>

					<div class="clear"></div>

				</div>

				<!-- Icon right -->	
				<div class="tab-pane fade" id="second">

					<div class="tab-desc">

						<p>There are many variations of passages Lorem Ipsum available, but majority have suffered alteration in some form, injected humour, randomised words which don't look even slightly believable. If you are going to use a passage  em Ipsum, you need to sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend repeat predefined chunks necessary, making this the first true generator Internet. </p>

						<p>Which don't look even slightly believable. If you are going use a passage of predefined chunks as necessary.</p>

					</div>

					<div class="tab-icon">

						<img src="images/tab-icon3.png" alt=""/>

					</div>

					<div class="clear"></div>

				</div>

				<!-- Only Text -->	
				<div class="tab-pane fade" id="third">

					<div class="tab-desc only">

						<p>There are many variations of passages Lorem Ipsum available, but majority have suffered alteration in some form, injected humour, randomised words which don't look even slightly believable. If you are going to use a passage  em Ipsum, you need to sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend repeat predefined chunks necessary, making this the first true generator Internet. </p>

						<p>Which don't look even slightly believable. If you are going use a passage of Ipsum, you need be sure there isn't anything embarrassing hidden in the predefined chunks as necessary.</p>

					</div>

					<div class="clear"></div>
				</div>	

				<!-- Icon left -->	
				<div class="tab-pane fade" id="fourth">

					<div class="tab-icon">

						<img src="images/tab-icon2.png" alt=""/>

					</div>

					<div class="tab-desc">

						<p>Which don't look even slightly believable. If you are going use a passage of Ipsum, you need be sure there isn't anything embarrassing hidden in the predefined chunks as necessary.</p>

					</div>

					<div class="clear"></div>
				</div>

			</div><!-- End tab-content div -->

		</div><!-- End Tabs div -->


		<!-- Skills -->
		<div class="Progress-bars">

			<div class="head">Our Skills</div>

			<div class="Progress-content">

				<div class="progress-bars">

					<!-- Progress Texts -->
					<div class="progress-texts">
						<span class="progress-name">Graphic Design</span>
						<span class="progress-value">65%</span>
						<div class="clear"></div>
					</div>

					<!-- Progress Tables -->
					<div class="progress progress-striped active">
						<div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
					</div>

				</div>

				<div class="progress-bars">

					<!-- Progress Texts -->
					<div class="progress-texts">
						<span class="progress-name">Photography</span>
						<span class="progress-value">50%</span>
						<div class="clear"></div>
					</div>

					<!-- Progress Tables -->
					<div class="progress progress-striped active">
						<div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
					</div>

				</div>

				<div class="progress-bars">

					<!-- Progress Texts -->
					<div class="progress-texts">
						<span class="progress-name">HTML / CSS</span>
						<span class="progress-value">75%</span>
						<div class="clear"></div>
					</div>

					<!-- Progress Tables -->
					<div class="progress progress-striped active">
						<div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
					</div>

				</div>

				<div class="progress-bars">

					<!-- Progress Texts -->
					<div class="progress-texts">
						<span class="progress-name">WordPress</span>
						<span class="progress-value">70%</span>
						<div class="clear"></div>
					</div>

					<!-- Progress Tables -->
					<div class="progress progress-striped active">
						<div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
					</div>

				</div>

			</div>

		</div>

		<div class="clear"></div>
	</div><!-- End Inner div -->
	
</section><!-- End Features Section -->


<!-- Our Team Section -->
<section id="team" class="contain ">

	<div class="inner">

		<!-- Header -->
		<div class="header ">
			Our Creative Team
		</div>

		<!-- Second Header -->
		<div class="page-desc ">
			Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
		</div>


		<div class="team-items slide-boxes">

			<div class="item animated" data-animation="flipInY" data-animation-delay="0">
				<img src="images/team/1.jpg" alt="" class="img-circle" />
				<h3>adriana doen</h3>
				<h4>Photogropher</h4>
				<p>Contrary popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of literature</p>

				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>

			</div>


			<div class="item animated" data-animation="flipInY" data-animation-delay="300">
				<img src="images/team/2.jpg" alt="" class="img-circle" />
				<h3>Julia amanda</h3>
				<h4>web designer</h4>
				<p>Contrary popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of literature</p>

				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>

			</div>

			<div class="item animated" data-animation="flipInY" data-animation-delay="600">
				<img src="images/team/3.jpg" alt="" class="img-circle" />
				<h3>alexa Roberts</h3>
				<h4>human resources</h4>
				<p>Contrary popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of literature</p>

				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>

			</div>

			<div class="item animated" data-animation="flipInY" data-animation-delay="900">
				<img src="images/team/4.jpg" alt="" class="img-circle" />
				<h3>alondra Chelse</h3>
				<h4>Photogropher</h4>
				<p>Contrary popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of literature</p>

				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>

			</div>

			<div class="item animated" data-animation="flipInY" data-animation-delay="800">
				<img src="images/team/1.jpg" alt="" class="img-circle" />
				<h3>adriana doen</h3>
				<h4>Photogropher</h4>
				<p>Contrary popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of literature</p>

				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>

			</div>

			<div class="item animated" data-animation="flipInY" data-animation-delay="1000">
				<img src="images/team/2.jpg" alt="" class="img-circle" />
				<h3>Julia amanda</h3>
				<h4>web designer</h4>
				<p>Contrary popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of literature</p>

				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>

			</div>

		</div>

	</div><!-- End inner div -->

</section><!-- End Our Team Section -->


<section id="why-wisten" class="contain parallax">

	<div class="inner">

		<!-- why-wisten Top Icon -->
		<div class="contain-logo br">
			<i class="fa fa-briefcase "></i>
		</div>

		<!-- Iphone images -->
		<div class="w-iphone animated" data-animation="fadeInLeft" data-animation-delay="0">
			<img src="images/w-iphone.png" alt="wisten-iphone">
		</div>

		<!-- accordion menu -->
		<div class="accordion" id="accordion2">

			<div class="accordion-head">Why do you choose <span> wisten ?</span></div>

			<!-- accordion menu 1 -->
			<div class="panel">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-one">

						<i class="fa fa-check"></i>
						Contrary to popular belief, Lorem Ipsum is not simply random text.
					</a>
				</div>
				<div id="coll-one" class="accordion-body collapse in">
					<div class="accordion-inner">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.Type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
					</div>
				</div>
			</div>

			<!-- accordion menu 2 -->
			<div class="panel">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-two">

						<i class="fa fa-check"></i>
						At vero eos et accusamus et iusto odio dignissimos.Sed ut perspiciatis.
					</a>
				</div>
				<div id="coll-two" class="accordion-body collapse">
					<div class="accordion-inner">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
					</div>
				</div>
			</div>

			<!-- accordion menu 3 -->
			<div class="panel">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-three">

						<i class="fa fa-check"></i>
						It is a long established fact that a reader be distracted.
					</a>
				</div>
				<div id="coll-three" class="accordion-body collapse">
					<div class="accordion-inner">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</div>
				</div>
			</div>

			<!-- accordion menu 4 -->
			<div class="panel last">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-four">

						<i class="fa fa-check"></i>
						Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
					</a>
				</div>
				<div id="coll-four" class="accordion-body collapse">
					<div class="accordion-inner">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
					</div>
				</div>
			</div>


		</div>


		<div class="clear"></div>
	</div>	
	
</section>


<section id="portfolio" class="contain ">

	<div class="inner">

		<!-- Portfolio Top Icon -->
		<div class="contain-logo br">
			<i class="fa fa-desktop "></i>
		</div>

		<!-- Header -->
		<div class="header">
			our awesome works
		</div>

		<!-- Second Header -->
		<div class="page-desc">
			Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
		</div>

		<div class="works">

			<div id="options" class="filter-menu inline">
				<ul id="filters" class="filters option-set" data-option-key="filter">
					<li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
					<li><a href="#filter" data-option-value=".design">design</a></li>
					<li><a href="#filter" data-option-value=".photography">photography</a></li>
					<li><a href="#filter" data-option-value=".branding">branding</a></li>
					<li><a href="#filter" data-option-value=".web">web</a></li>
				</ul>
			</div>

			<div class="items ">

				<div class="work col-xs-4 web photography">
					<div class="work-inner">
						<div class="work-img">
							<img src="images/works/1.jpg" alt=""/>
							<div class="mask">
								<a class="button zoom" href="http://vimeo.com/55945051" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
								<a class="button detail"><i class="fa fa-film"></i></a>
							</div>
						</div>
						<div class="work-desc">
							<h4>work image</h4>
							<p>Contrary to popular belief, Lorem Ipsum</p>
						</div>
					</div>
				</div>

				<div class="work col-xs-4 photography design ">
					<div class="work-inner">
						<div class="work-img">
							<img src="images/works/2.jpg" alt=""/>
							<div class="mask">
								<a class="button zoom" href="images/works/b2.jpg"  data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
								<a class="button detail"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
						<div class="work-desc">
							<h4>work image</h4>
							<p>Contrary to popular belief, Lorem Ipsum</p>
						</div>
					</div>
				</div>

				<div class="work col-xs-4 web photography design ">
					<div class="work-inner">
						<div class="work-img">
							<img src="images/works/3.jpg" alt=""/>
							<div class="mask">
								<a class="button zoom" href="images/works/b3.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
								<a class="button detail"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
						<div class="work-desc">
							<h4>work image</h4>
							<p>Contrary to popular belief, Lorem Ipsum</p>
						</div>
					</div>
				</div>

				<div class="work col-xs-4 design web ">
					<div class="work-inner">
						<div class="work-img">
							<img src="images/works/4.jpg" alt=""/>
							<div class="mask">
								<a class="button zoom" href="http://vimeo.com/55945051" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
								<a class="button detail"><i class="fa fa-film"></i></a>
							</div>
						</div>
						<div class="work-desc">
							<h4>work image</h4>
							<p>Contrary to popular belief, Lorem Ipsum</p>
						</div>
					</div>
				</div>

				<div class="work col-xs-4 design photography ">
					<div class="work-inner">
						<div class="work-img">
							<img src="images/works/5.jpg" alt=""/>
							<div class="mask">
								<a class="button zoom" href="images/works/b5.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
								<a class="button detail"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
						<div class="work-desc">
							<h4>work image</h4>
							<p>Contrary to popular belief, Lorem Ipsum</p>
						</div>
					</div>
				</div>

				<div class="work col-xs-4 web branding ">
					<div class="work-inner">
						<div class="work-img">
							<img src="images/works/6.jpg" alt=""/>
							<div class="mask">
								<a class="button zoom" href="images/works/b6.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
								<a class="button detail"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
						<div class="work-desc">
							<h4>work image</h4>
							<p>Contrary to popular belief, Lorem Ipsum</p>
						</div>
					</div>
				</div>

				<div class="clear"></div>

			</div>

		</div>

	</div>	
	
</section>


<section id="services" class="contain ">
	<div class="services bg parallax2">
		<div class="inner services">
			
			<!-- why-wisten Top Icon -->
			<div class="contain-logo br">
				<i class="fa fa-cogs "></i>
			</div>
			
			<!-- Header -->
			<div class="header">
				Our Services
			</div>

			<!-- Second Header -->
			<div class="page-desc">
				Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
			</div>

			<ul class="service-contents slide-boxes">

				<li class="service box animated" data-animation="flipInY" data-animation-delay="0">
					<a href="#" class="service-logo">
						<i class="fa fa-camera"></i>
					</a>
					<h3>Design</h3>
					<p>Contrary to popular belief, not simply random text. It has roots in a of Latin from 45 BC, 2000 years old.</p>
				</li>
				<li class="service box animated" data-animation="flipInY" data-animation-delay="200">
					<a href="#" class="service-logo">
						<i class="fa fa-desktop"></i>
					</a>
					<h3>Photography</h3>
					<p>Contrary to popular belief, not simply random text. It has roots in a of Latin from 45 BC, 2000 years old.</p>
				</li>
				<li class="service box animated" data-animation="flipInY" data-animation-delay="400">
					<a href="#" class="service-logo">
						<i class="fa fa-coffee"></i>
					</a>
					<h3>HTML</h3>
					<p>Contrary to popular belief, not simply random text. It has roots in a of Latin from 45 BC, 2000 years old.</p>
				</li>
				<li class="service box animated" data-animation="flipInY" data-animation-delay="600">
					<a href="#" class="service-logo">
						<i class="fa fa-globe"></i>
					</a>
					<h3>Wordpress</h3>
					<p>Contrary to popular belief, not simply random text. It has roots in a of Latin from 45 BC, 2000 years old.</p>
				</li>
				<li class="service box animated" data-animation="flipInY" data-animation-delay="800">
					<a href="#" class="service-logo">
						<i class="fa fa-gear"></i>
					</a>
					<h3>Social</h3>
					<p>Contrary to popular belief, not simply random text. It has roots in a of Latin from 45 BC, 2000 years old.</p>
				</li>
				<li class="service box animated" data-animation="flipInY" data-animation-delay="1000">
					<a href="#" class="service-logo">
						<i class="fa fa-heart"></i>
					</a>
					<h3>Support</h3>
					<p>Contrary to popular belief, not simply random text. It has roots in a of Latin from 45 BC, 2000 years old.</p>
				</li>


			</ul>

			<div class="clear"></div>


		</div><!-- End Services Inner 1 -->

	</div><!-- End Services BG -->

	<div class="inner services bottom-bg">

		<div id="carousel-example-generic" class="carousel slide slide-s" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner service-text">

				<!-- Service First Text -->
				<div class="item active">
					<div class="service-bottom-text">
						responsive and  <span>clean</span>  design
					</div>
				</div>

				<!-- Service Second Text -->
				<div class="item">
					<div class="service-bottom-text">
						modern and <span>creative</span> design
					</div>
				</div>

				<!-- Service Third Text -->
				<div class="item">
					<div class="service-bottom-text">
						it's wisten <span>time</span> 
					</div>
				</div>

			</div>
			<!-- End Slides -->

			<!-- Controls -->
			<a class="left carousel-control s-controls" href="#carousel-example-generic" data-slide="prev">
			</a>
			<a class="right carousel-control s-controls" href="#carousel-example-generic" data-slide="next">
			</a>
		</div>

	</div><!-- End Services Inner 2 -->
</section>	<!-- End Services Section -->

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
