<!DOCTYPE html>
<html>
<head>
    <title>Eventory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{ HTML::style('/css/reset.css') }}
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/font-awesome.css') }}
    {{ HTML::style('/css/plugin.css') }}
    {{ HTML::style('/css/style.css') }}
    {{ HTML::style('/css/main.css') }}
    {{ HTML::style('/css/responsive.css') }}

    {{ HTML::script('js/vendor/jquery-2.1.1.min.js'); }}

</head>
<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

  <section id="home" class="">


    <section id="pagetop" class="contain">

        <div class="inner pagetop">

            <div class="col-xs-6 left">
                Sponsorships made easy
            </div>
            
            <div class="col-xs-6 right">

                <a href="mailto:support@goldeyestheme.com">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-vimeo-square"></i>
                </a>
                <a href="#">
                    <i class="fa fa-rss"></i>
                </a>
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>

                @if (Auth::check())
                <a href="/Eventory/public/logout"><button type="button" class="btn btn-xs btn-square btn-primary">Logout</button></a>
                <a href="/profile">{{ Auth::user()->first_name }}</a>
                @else
                <a href="#modal-login" class="btn btn-xs btn-effect-ripple btn-primary" data-toggle="modal">Login</a>
                <a href="/Eventory/public/user/create" class ="btn btn-xs btn-effect-ripple btn-primary">Signup</button></a>
                @endif
            </div>
            
            
            <div class="clear"></div>
        </div>
        
    </section>
    <!-- Navigation Section -->
    <section id="navigation" class="shadow">

        <div class="inner navigation">

            <!-- Logo Img -->
            <div class="logo">
                <!--<a class="scroll" href="#home"><img src="images/logo.png" alt="Logo"/></a>-->
                <a class="navbar-brand" href="/">Eventory</a>
            </div>

            <!-- Nav Menu -->
            <div class="nav-menu">

                <ul class="nav main-nav">

                    <li class="active"><a class="scroll" href="#home">Home</a></li>
                    <li><a class="scroll" href="/create_event">My Events</a></li>
                    <li><a class="scroll" href="#features">Sponsorship Requests</a></li>
                    <li><a class="scroll" href="#history">Chats</a></li>
                    <li><a class="scroll" href="#team">Past Events</a></li>
                    <li><a class="scroll" href="#portfolio">Support</a></li>

                </ul>

            </div>


            <!-- Dropdown Menu For Mobile Devices-->
            <div class="dropdown mobile-drop">
                <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                <ul class="nav dropdown-menu fullwidth" role="menu" >
                    <li><a class="scroll" href="#home">home</a></li>
                    <li><a class="scroll" href="#about">about</a></li>
                    <li><a class="scroll" href="#features">features</a></li>
                    <li><a class="scroll" href="#history">history</a></li>
                    <li><a class="scroll" href="#team">team</a></li>
                    <li><a class="scroll" href="#portfolio">portfolio</a></li>
                    <li><a class="scroll" href="#services">services</a></li>
                    <li><a class="scroll" href="#prices">prices</a></li>
                    <li><a class="scroll" href="#contact">contact</a></li>
                </ul>
            </div>

            <div class="clear"></div>
        </div>

    </section>
    <!-- End Navigation Section -->
<!--
    <div class="page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    @if(Session::has('message'))
                    <div class="alert-box success">
                        <h2>{{ Session::get('message') }}</h2>
                    </div>
                    @endif
                </div>
            </div>
        </div>-->
        <!-- Login Modal -->
        <div id="modal-login" class="modal" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title"><strong>Login to Eventory</strong></h3>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(array('url' => 'index', 'method' => 'post', 'class' => 'form-horizontal form-bordered')) }}
                        <div class="form-group">
                            <label class="col-md-3 control-label">{{Form::label('username','Username')}}</label>
                            <div class="col-md-6">
                                {{Form::text('username', null,array('class' => 'form-control','required' => 'required','class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">{{Form::label('password','Password')}}</label>
                            <div class="col-md-6">
                                {{Form::password('password',array('class' => 'form-control','required' => 'required','class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-3">
                                {{Form::submit('Login', array('class' => 'btn btn-effect-ripple btn-primary'))}}
                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                            </div>
                        </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
            
        </div>
        <!-- END Login Modal -->
        @yield('body')
        <!-- Footer Section -->
        <section id="footer">

            <div class="inner footer">

                <!-- Phone -->
                <div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">
                    <a class="footer-links">
                        <i class="fa fa-mobile"></i>
                    </a>

                    <p class="footer-text">
                        <span>Phone</span>:<span>(123) 456-7890</span>
                    </p>
                </div>

                <!-- Socials and Mail -->
                <div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">

                    <!-- Social 1 -->
                    <a class="footer-links">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <!-- Social 2 -->
                    <a class="footer-links">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <!-- Social 3 -->
                    <a class="footer-links">
                        <i class="fa fa-google-plus"></i>
                    </a>

                    <!-- Social 4 -->
                    <a class="footer-links">
                        <i class="fa fa-pinterest"></i>
                    </a>

                    <!-- Mail -->
                    <p class="footer-text">
                        <span>Mail</span>:<span><a href="mailto:support@goldeyestheme.com">support@goldeyestheme.com</a></span>
                    </p>

                    <!-- Copyright -->
                    <p class="footer-text copyright">
                        ©2014 wisten. all rights reserved.
                    </p>
                </div>

                <!-- Adress -->
                <div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">

                    <!-- Icon -->
                    <a class="footer-links">
                        <i class="fa fa-map-marker"></i>
                    </a>

                    <p class="footer-text">
                        1234 Street Name, City Name
                    </p>
                </div>

                <div class="clear"></div>
            </div> <!-- End Footer inner -->

        </section><!-- End Footer Section -->
    </div>
    
    <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>
    {{ HTML::script('js/vendor/bootstrap.min.js'); }}
    {{ HTML::script('js/app.js'); }}
    {{ HTML::script('js/plugins/ckeditor/ckeditor.js'); }}

    {{ HTML::script('js/jquery-1.10.2.min.js'); }}
    {{ HTML::script('js/bootstrap.js'); }}
    {{ HTML::script('js/jquery.appear.js'); }}
    {{ HTML::script('js/waypoints.min.js'); }}
    {{ HTML::script('js/jquery.prettyPhoto.js'); }}
    {{ HTML::script('js/modernizr-latest.js'); }}
    {{ HTML::script('js/SmoothScroll.js'); }}
    {{ HTML::script('js/jquery.parallax-1.1.3.js'); }}
    {{ HTML::script('js/jquery.easing.1.3.js'); }}
    {{ HTML::script('js/jquery.superslides.js'); }}
    {{ HTML::script('js/jquery.flexslider.js'); }}
    {{ HTML::script('js/jquery.sticky.js'); }}
    {{ HTML::script('js/owl.carousel.js'); }}
    {{ HTML::script('js/jquery.isotope.js'); }}
    {{ HTML::script('js/rev-slider/jquery.themepunch.plugins.min.js'); }}
    {{ HTML::script('js/rev-slider/jquery.themepunch.revolution.min.js'); }}
    {{ HTML::script('js/jquery.mb.YTPlayer.js'); }}
    {{ HTML::script('js/jquery.fitvids.js'); }}
    {{ HTML::script('js/plugins.js'); }}


    
    {{ HTML::script('js/plugins2.js'); }}
    {{ HTML::script('js/pages/formsWizard.js'); }}
    <script>$(function(){ FormsWizard.init(); });</script>
    {{ HTML::script('js/pages/formsComponents.js'); }}


    @show
</body>
</html>