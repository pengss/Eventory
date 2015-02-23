@extends('layouts.main')
@section('body')

<!-- Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="images/error_full_bg.jpg" alt="Full Background" class="full-bg full-bg-bottom animation-pulseSlow">
        <!-- END Full Background -->

        <!-- Error Container -->
        <div id="error-container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-light animation-fadeInQuick"><strong>Sorry</strong></h1>
                    <h2 class="text-muted animation-fadeInQuickInv"><em>Please fill up all the mandatory fields before creating the event</em></h2>
                </div>
                <div class="row gallery2">
                            
                        </div>
                        <!-- END Gallery Items -->
                        <a href="{{ URL::to('create_event') }}" class="btn btn-effect-ripple btn-primary"><i class="fa fa-arrow-left"></i>Create An Event</a>
                 
            </div>
        </div>
        <!-- END Error Container -->
@stop