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
                    <h1 class="text-light animation-fadeInQuick"><strong>Thank you for your enquiries</h1>
                    <h2 class="text-muted animation-fadeInQuickInv"><em>Your message has been sent to the Event Organiser.</em></h2>
                </div>
                <div class="row gallery2">
                            <div class="col-sm-3">
                                <div class="gallery2-image-container animation-fadeInQuick2">
                                    <img src="images/photo5.jpg" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gallery2-image-container animation-fadeInQuick2">
                                    <img src="images/photo2.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gallery2-image-container animation-fadeInQuick2">
                                    <img src="images/photo1.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="gallery2-image-container animation-fadeInQuick2" data-category="nature">
                                    <img src="images/photo3.jpg" alt="Image">
                                </div>
                            </div>
                            
                        </div>
                        <!-- END Gallery Items -->
                        <a href="{{{ URL::to('sponsorProfile') }}" class="btn btn-effect-ripple btn-primary"><i class="fa fa-arrow-left"></i>Back to Dashboard</a>
                        <a href="{{ URL::to('find_events') }}" class="btn btn-warning" style="margin-left: 48px;"><i class="gi gi-kiosk"></i> Discover More Events</button>
                 
            </div>
        </div>
        <!-- END Error Container -->
@stop