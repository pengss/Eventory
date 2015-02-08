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
                {{ Form::open(array('route' => array('sponsor.store'), 'method' => 'post', 'class' => 'form-horizontal form-bordered', 'id' => 'form-validation')) }}
                <div class="form-group">
                    <label class="col-md-3 control-label">Preferred Target Audience<span class="text-danger">*</span> <br><small>(max 3)</small></label>
                    <div class="col-md-9">
                        <fieldset class="group"> 
                            <ul class="checkbox">
                                 <?php
                                    $event_audience = DB::table('target_audience')->get();
                                    foreach ($event_audience as $aud)
                                        {
                                            ?>
                                            <li><input type="checkbox" id="target_audience" name="target_audience[]" value="<?=$aud->id?>"> <?=$aud->type?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </fieldset>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Preferred Event Type<span class="text-danger">*</span> <br><small>(max 3)</small></label>
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
                    <label class="col-md-3 control-label" for="val-digits">Preferred Audience Turnout <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="turnout" name="turnout" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-skill">Preferred Type of Sponsorship <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <select id="sponsorship" name="sponsorship" class="form-control">
                            <option value="">Please select</option>
                            <option value="Cash">Cash</option>
                            <option value="In Kind">In Kind</option>
                            <option value="Cash and In Kind"> Cash and In Kind</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                    </div>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>

{{ HTML::script('js/custom/createevent.js'); }}
{{ HTML::script('js/jquery-ui.js'); }}
@stop