@extends('layouts.portal')
@section('body')


<div id="page-content">
    <div class="emptydiv"></div>
    <div class="row">
     <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <!-- Clickable Wizard Block -->
        <div class="block">
            <!-- Clickable Wizard Title -->
            <div class="block-title">
                <h2>Edit Event - {{$editEvent -> event_name}}</h2>
            </div>
            

            <!-- END Clickable Wizard Title -->
            {{ Form::model($editEvent, array('route' => array('event.store'), 'method' => 'post', 'id' => 'clickable-wizard', 'class' => 'form-horizontal form-bordered', 'enctype' => 'multipart/form-data')) }}

            <!-- Clickable Wizard Content -->
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
                        {{Form::text('event_name', null,array('class' => 'form-control','required' => 'required'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Location</label>
                    <div class="col-md-9">
                        {{Form::text('location', null,array('class' => 'form-control','required' => 'required'))}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Event Date</label>
                    <div class="col-md-9">
                        <div class="input-group input-daterange" data-date-format="dd M yyyy">
                            <input type="text" id="start_date" name="start_date" class="form-control" value = "{{$editEvent->start_date}}" placeholder="From">
                            <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                            <input type="text" id="end_date" name="end_date" class="form-control" value = "{{$editEvent->end_date}}" placeholder="To">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Start Time</label>
                    <div class="col-md-9">
                        <div class="input-group bootstrap-timepicker">
                            <input type="text" id="start_time" name="start_time" class="form-control input-timepicker text-center" value = "{{$editEvent->start_time}}">
                            <span class="input-group-btn">
                                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-clock-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">End Time</label>
                        <div class="col-md-9">
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" id="end_time" name="end_time" class="form-control input-timepicker text-center" value = "{{$editEvent->end_time}}" >
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
                                                
                                                        @if ($editEvent -> id == $aud->id)
                                                            <li><input type="checkbox" id="target_audience" name="target_audience[]" value="<?=$aud->id?>" checked> <?=$aud->type?></li>
                                                        @else
                                                            <li><input type="checkbox" id="target_audience" name="target_audience[]" value="<?=$aud->id?>"> <?=$aud->type?></li>
                                                        @endif
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
                                {{Form::file('banner', null,array('class' => 'form-control'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Estimated Turnout <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    {{Form::text('turnout', null,array('class' => 'form-control','required' => 'required'))}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Event Details<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <div class="col-xs-12">
                                    <textarea id="desc" name="desc" rows="10" class="form-control textarea-editor" value = "{{$editEvent->description}}" style="cursor: auto;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Organization Name<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="org_name" name="org_name" class="form-control" value ="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Org Logo</label>
                            <div class="col-md-9">
                                {{Form::file('logo', null,array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Organisation Info</label>
                            <div class="col-md-9">
                                <textarea id="orgInfo" name="orgInfo" rows="6" class="form-control textarea-elastic ui-wizard-content" value="" style="overflow: hidden; height: 136px;"></textarea>
                                {{Form::text('organisation_info', null,array('class' => 'form-control textarea-elastic ui-wizard-content','required' => 'required'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Your Event's Social Media Sites</label>

                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <div class="social input-group">
                                    <label class ="" for="social" id="facebook_title"><i class="fa fa-facebook-square"></i> facebook.com/</label>
                                    {{Form::text('facebook', null,array('class' => 'form-control'))}}
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="facebook_event_title"><i class="fa fa-facebook"></i> facebook.com/events/</label>
                                    {{Form::text('facebook_event', null,array('class' => 'form-control'))}}
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="twitter_title"><i class="fa fa-twitter"></i> twitter.com/</label>
                                    {{Form::text('twitter', null,array('class' => 'form-control'))}}
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="instagram_title"><i class="fa fa-instagram"></i> instagram.com/</label>
                                    {{Form::text('instagram', null,array('class' => 'form-control'))}}
                                </div>
                                <div class="social input-group">
                                    <label class ="" for="social" id="website_title" ><i class="fa fa-globe"></i> Website http://</label>
                                    {{Form::text('website', null,array('class' => 'form-control'))}}
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
                            <div class="col-xs-12">
                                <div class="block">
                                    <div class="block-title">
                                        <h4 class="danger">Offer Presence items</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="presence" class="table table-borderless table-striped table-vcenter">

                                        </table>
                                    </div>
                                </div>
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
    {{ HTML::script('js/jquery.appendGrid-1.5.1.min.js'); }}
    {{ HTML::script('js/jquery.appendGrid-1.5.1.js'); }}
    {{ HTML::script('js/jquery-ui.js'); }}
    {{ HTML::script('js/custom/addpresence.js'); }}
</div>
</div>
@stop