@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Edit this event</h2>
        {{ Form::model($editEvent) }}
        <div class="form-group">
            {{Form::label('event_name','Event Name')}}
            {{Form::text('event_name', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('banner','Banner')}}
            {{Form::text('banner', null,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('location','Location')}}
            {{Form::text('location', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('turnout','Turnout')}}
            {{Form::text('turnout', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('organisation_info','Information about your organisation')}}
            {{Form::text('organisation_info', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('start_date','Start Date')}}
            {{Form::text('start_date', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('end_date','End Date')}}
            {{Form::text('end_date', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('start_time','Start Time')}}
            {{Form::text('start_time', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('end_time','End Time')}}
            {{Form::text('end_time', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('facebook','Facebook')}}
            {{Form::text('facebook', null,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('facebook_event','Facebook Event')}}
            {{Form::text('facebook_event', null,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('twitter','Twitter')}}
            {{Form::text('twitter', null,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('instagram','Instagram')}}
            {{Form::text('instagram', null,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('website','Website')}}
            {{Form::text('website', null,array('class' => 'form-control'))}}
        </div>
        {{Form::submit('Update', array('class' => 'btn btn-primary'))}}
        {{ Form::close() }}
    </div>
</div>
@stop