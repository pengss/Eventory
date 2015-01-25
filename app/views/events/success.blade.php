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
                    <h1 class="text-light animation-fadeInQuick"><strong>You're matched with <br/>10 Sponsors!</strong></h1>
                    <h2 class="text-muted animation-fadeInQuickInv"><em>Now all you'll have to do is to wait for their interest if they are willing to partner with you</em></h2>
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
                        <a href="{{ URL::to('eventOrganiserProfile') }}" class="btn btn-effect-ripple btn-primary"><i class="fa fa-arrow-left"></i>Back to Dashboard</a>
                        <button class="btn btn-warning" style="margin-left: 48px;"><i class="gi gi-kiosk"></i> View My Event</button>
                 
            </div>
        </div>
        <!-- END Error Container -->
@stop