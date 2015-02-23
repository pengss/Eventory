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
                    <h2 class="text-muted animation-fadeInQuickInv"><em>Please fill up all mandatory fields before submitting your categories</em></h2>
                </div>
                <div class="row gallery2">
                            
                        </div>
                        <!-- END Gallery Items -->
                        <a href="{{ URL::to('sponsor_category') }}" class="btn btn-effect-ripple btn-primary"><i class="fa fa-arrow-left"></i>Dashboard</a>
                 
            </div>
        </div>
        <!-- END Error Container -->
@stop