<!DOCTYPE html>
<html>
<head>
    <title>Eventory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="UvM_NZeKXm_As2V6kelmV6_APyhw2r9-pqvvyW1KSuA" />
    <link rel="shortcut icon" href="/Eventory/public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/Eventory/public/favicon.ico" type="image/x-icon">
    
    {{ HTML::style('/css/reset.css') }}
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/main.css') }}
</head>
<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

    <div id="pageloader">   
        <div class="loader-item">
          <img src="/Eventory/public/images/loading.gif" alt='loader' />
      </div>
  </div>
  <section id="home" class="">


    <section id="pagetop" class="contain">

        <div class="inner pagetop">

            <div class="col-xs-6 left">
                Powering Sponsorships
            </div>
            
            <div class="col-xs-6 right">

                <!-- Social media 
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
                </a>-->

                <a href="/Eventory/public/index" class="btn btn-xs btn-effect-ripple btn-primary">For Event Organizers</a>

                @if (Auth::check())
                <a href="/Eventory/public/logout" class="btn btn-xs btn-effect-ripple btn-primary">Logout</a>
                <a href="/profile">{{ Auth::user()->first_name }}</a>
                @else
                <a href="#modal-login" class="btn btn-xs btn-effect-ripple btn-primary" data-toggle="modal">Login</a>
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
                <a class="scroll" href="#home"><img src="/Eventory/public/images/logo.png" alt="Logo"/></a>
            </div>

            <!-- Nav Menu -->
            <div class="nav-menu">

                <ul class="nav main-nav">

                    <li class="active"><a class="scroll" href="#home">home</a></li>
                    <li><a class="scroll" href="#about">benefits</a></li>
                    <!--<li><a class="scroll" href="#features">features</a></li>-->
                    <li><a class="scroll" href="#history">how we work</a></li>
                    <!--<li><a class="scroll" href="#team">team</a></li>
                    <li><a class="scroll" href="#portfolio">portfolio</a></li>
                    <li><a class="scroll" href="#services">services</a></li>-->
                    <li><a class="scroll" href="#prices">pricing</a></li>
                    <li><a class="scroll" href="#subscribe">register</a></li>

                </ul>

            </div>


            <!-- Dropdown Menu For Mobile Devices-->
            <div class="dropdown mobile-drop">
                <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                <ul class="nav dropdown-menu fullwidth" role="menu" >
                    <li><a class="scroll" href="#home">home</a></li>
                    <li><a class="scroll" href="#about">about</a></li>
                    <!-- <li><a class="scroll" href="#features">features</a></li>-->
                    <li><a class="scroll" href="#history">how we work</a></li>
                    <!--<li><a class="scroll" href="#team">team</a></li>
                    <li><a class="scroll" href="#portfolio">portfolio</a></li>
                    <li><a class="scroll" href="#services">services</a></li>
                    <li><a class="scroll" href="#prices">prices</a></li>-->
                    <li><a class="scroll" href="#subscribe">register</a></li>
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
                        {{ Form::open(array('url' => 'index', 'method' => 'post', 'class' => 'form-horizontal form-bordered login-form', 'id' => 'login-form')) }}
                        <div class="form-group">
                            <label class="col-md-3 control-label">{{Form::label('username','Username')}}</label>
                            <div class="col-md-6">
                                {{Form::text('username', null,array('class' => 'form-control ', 'data-validate' =>"required"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">{{Form::label('password','Password')}}</label>
                            <div class="col-md-6">
                                {{Form::password('password',array('class' => 'form-control', 'data-validate' =>"required"))}}
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
        
    </div>
    {{ HTML::script('js/jquery-2.1.1.min.js'); }}
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
    {{ HTML::script('js/vendor/verify.notify.min.js'); }}
    @show
</body>
</html>
