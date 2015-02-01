@extends('layouts.sponsor')
@section('body')

<div id="page-content">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2><strong>Your Events Preference</strong></h2><br/>
                    <h6><small>You may set your preferences if you'd like to receive relevant events</small></h6>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form id="form-validation" action="page_forms_validation.html" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Username <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-username" name="val-username" class="form-control" placeholder="Choose a nice username..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-email">Email <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-email" name="val-email" class="form-control" placeholder="Enter your valid email..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-password">Password <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="password" id="val-password" name="val-password" class="form-control" placeholder="Choose a good one..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="password" id="val-confirm-password" name="val-confirm-password" class="form-control" placeholder="..and confirm it to be safe!">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <textarea id="val-suggestions" name="val-suggestions" rows="7" class="form-control" placeholder="Share your ideas with us.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <select id="val-skill" name="val-skill" class="form-control">
                                <option value="">Please select</option>
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="javascript">Javascript</option>
                                <option value="ruby">Ruby</option>
                                <option value="php">PHP</option>
                                <option value="asp">ASP.NET</option>
                                <option value="python">Python</option>
                                <option value="mysql">MySQL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-website">Website <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-website" name="val-website" class="form-control" placeholder="http://example.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-digits" name="val-digits" class="form-control" placeholder="3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-number">Number <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-number" name="val-number" class="form-control" placeholder="3.0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-range" name="val-range" class="form-control" placeholder="3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><a href="#modal-terms" data-toggle="modal">Agree to Terms</a> <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <label class="switch switch-primary" for="val-terms">
                                <input type="checkbox" id="val-terms" name="val-terms" value="1">
                                <span data-toggle="tooltip" title="I agree to the terms"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Form Validation Form -->

                <!-- Terms Modal -->
                <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-center"><strong>Terms and Conditions</strong></h3>
                            </div>
                            <div class="modal-body">
                                <h4 class="page-header">1. <strong>General</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                <h4 class="page-header">2. <strong>Account</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                <h4 class="page-header">3. <strong>Service</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                <h4 class="page-header">4. <strong>Payments</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            </div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <button type="button" class="btn btn-effect-ripple btn-primary" data-dismiss="modal">I've read them!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Terms Modal -->
            </div>
            <!-- END Form Validation Block -->
        </div>
    </div>
    <!-- END Form Validation Content -->
</div>
<!-- END Page Content -->
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>What kind of events are you interested in</h2>
        {{ Form::open(array('route' => array('sponsor.store'), 'method' => 'post')) }}
        <div class="form-group">
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
        <label class="col-md-3 control-label">Estimated Turnout <span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="input-group">
                <input type="text" id="turnout" name="turnout" class="form-control" value = "">
                <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Type Of Sponsorship <span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="input-group">
                <input type="text" id="sponsorship" name="sponsorship" class="form-control" value = "">
                <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
            </div>
        </div>
    </div>
    {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}
    {{ Form::close() }}
</div>
</div>

@stop