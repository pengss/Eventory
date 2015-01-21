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
            {{Form::label('target_audience','Type of audience at events')}}
            {{Form::text('target_audience', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('minimum_turnout','Expected turnout')}}
            {{Form::text('minimum_turnout', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('event_type','Event Type')}}
            {{Form::text('event_type', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('type_of_sponsorship','Type of sponsorship')}}
            {{Form::text('type_of_sponsorship', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}
        {{ Form::close() }}
    </div>
</div>
@stop