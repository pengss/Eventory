@extends('layouts.default')
@section('body')


{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}
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