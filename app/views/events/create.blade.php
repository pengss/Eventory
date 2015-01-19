@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}

<div id="page-content">
    <div class="row">
       <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <!-- Clickable Wizard Block -->
        <div class="block">
            <!-- Clickable Wizard Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                </div>
                <h2>Create an event with us!</h2>
            </div>
            <div id="status">
            </div>
            <div id="fb_login">
                Have a Facebook event already?
                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
                to Facebook to import it to Eventory<br/><br/>
            </div>

            <div id = "fb_event" style="display:none;">
                <form action = "event-create.php" method="post">
                    <input type ="text" name ="eventID" value="360959057387474"/>
                    <button type="submit" class="btn btn-effect-ripple btn-primary" id="next">Grab Event Details</button>
                </form>
            </div>

            <!-- END Clickable Wizard Title -->

            <!-- Clickable Wizard Content -->
            {{ Form::open(array('route' => array('event.store'), 'method' => 'post', 'id' => 'clickable-wizard', 'class' => 'form-horizontal form-bordered', 'enctype' => 'multipart/form-data')) }}
            <!-- First Step -->
            <div id="clickable-first" class="step">
                <!-- Step Info -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified clickable-steps">
                            <li class="active">
                                <a href="javascript:void(0)" data-gotostep="clickable-first">
                                    <i class="fa fa-user"></i>
                                    <strong>Event basics</strong>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-gotostep="clickable-second">
                                    <i class="fa fa-pencil-square-o"></i> 
                                    <strong>Event details</strong>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-gotostep="clickable-third">
                                    <i class="fa fa-check"></i> 
                                    <strong>Sponsoring Options</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="col-md-3 control-label">Title<span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" id="title" name="title" class="form-control" value = "" placeholder="Your event title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Location</label>
                    <div class="col-md-9">
                        <input type="text" id="location" name="location" class="form-control ui-wizard-content" value = "" placeholder="Where is your event location?">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Event Date</label>
                    <div class="col-md-9">
                        <div class="input-group input-daterange" data-date-format="dd M yyyy">
                            <input type="text" id="start_date" name="start_date" class="form-control" value = "" placeholder="From">
                            <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                            <input type="text" id="end_date" name="end_date" class="form-control" value = "" placeholder="To">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Start Time</label>
                    <div class="col-md-9">
                        <div class="input-group bootstrap-timepicker">
                            <input type="text" id="start_time" name="start_time" class="form-control input-timepicker text-center" value = "">
                            <span class="input-group-btn">
                                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-clock-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">End Time</label>
                        <div class="col-md-9">
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" id="end_time" name="end_time" class="form-control input-timepicker text-center" value = "" >
                                <span class="input-group-btn">
                                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-clock-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Your Event Type<span class="text-danger">*</span> <br><small>(max 3)</small></label>
                            <div class="col-md-9">
                                <fieldset class="group"> 
                                    <ul class="checkbox">
                                        <?php
                                        $event_types = DB::table('type_of_events')->get();
                                        foreach ($event_types as $type)
                                        {
                                            ?>
                                            <li><input type="checkbox" id="event_types" name="event_types[]" value="<?=$type->id?>"> <?=$type->type?></li>

                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Target Audience<span class="text-danger">*</span> <br><small>(max 3)</small></label>
                            <div class="col-md-9">
                                <fieldset class="group"> 
                                    <ul class="checkbox">
                                        <div data-toggle="checkboxes" data-max="1">
                                            <?php
                                            $event_audience = DB::table('target_audience')->get();
                                            foreach ($event_audience as $aud)
                                            {
                                                ?>
                                                <li><input type="checkbox" id="target_audience" name="target_audience[]" value="<?=$aud->id?>"> <?=$aud->type?></li>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="clickable-second" class="step">
                        <!-- Step Info -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified clickable-steps">
                                    <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-first"><i class="fa fa-user"></i> <del><strong>Event Basics</strong></del></a></li>
                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <strong>Event Details</strong></a></li>
                                    <li><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Sponsoring Options</strong></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Event Banner</label>
                            <div class="col-md-9">
                                <input type="File" id="banner" name="banner" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Estimated Turnout <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" id="turnout" name="turnout" class="form-control" value = "">
                                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Event Details<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <textarea id="event_description" name="description" rows="10" class="form-control textarea-editor" value = "" placeholder="Tell your potential sponsors more about your event!" style="cursor: auto;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Organization Name<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="org_name" name="org_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Org Logo</label>
                            <div class="col-md-9">
                                <input type="File" id="logo" name="logo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Organisation Info</label>
                            <div class="col-md-9">
                                <textarea id="orgInfo" name="orgInfo" rows="6" class="form-control textarea-elastic ui-wizard-content" placeholder="Tell us more about your organising team!" style="overflow: hidden; height: 136px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Your Event's Social Media Sites</label>

                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <div class="social input-group">
                                    <label class ="" for="social" id="facebook_title"><i class="fa fa-facebook-square"></i> facebook.com/</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control">
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="facebook_event_title"><i class="fa fa-facebook"></i> facebook.com/events/</label>
                                    <input type="text" id="facebook_event" name="facebook_event" class="form-control">
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="twitter_title"><i class="fa fa-twitter"></i> twitter.com/</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control">
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="instagram_title"><i class="fa fa-instagram"></i> instagram.com/</label>
                                    <input type="text" id="instagram" name="instagram" class="form-control">
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="website_title" ><i class="fa fa-globe"></i> Website http://</label>
                                    <input type="text" id="website" name="website" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Third Step -->
                    <!-- Third Step -->
                    <div id="clickable-third" class="step">
                        <!-- Step Info -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified clickable-steps">
                                    <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-first"><i class="fa fa-user"></i> <del><strong>Event Basics</strong></del></a></li>
                                    <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <del><strong>Event Details</strong></del></a></li>
                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Sponsoring Options</strong></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-pc">Package</label>
                            <div class="col-md-6">
                                <input type="text" id="example-clickable-pc" name="example-clickable-pc" class="form-control" placeholder="">
                            </div>
                        </div>

                    </div>
                    <!-- END Third Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="reset" class="btn btn-effect-ripple btn-danger" id="back">Back</button>
                            <button type="submit" class="btn btn-effect-ripple btn-primary" id="next">Next</button>
                        </div>
                    </div>
                    <!-- END Form Buttons -->


                    {{ Form::close() }} <!-- END Clickable Wizard Content -->
                </div>
                <!-- END Clickable Wizard Block -->

            </div>
        </div>
    </div>

    <script>document.onload = function() { FormsComponents.init(); }</script>


{{ HTML::script('js/custom/createevent.js'); }}
</div>
</div>
@stop