@extends('layouts.default')
@section('body')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Presence</h2>
        {{ Form::model($currentEvent) }}
        <div class="form-group">
            {{Form::label('presence_type','Presence')}}
            {{Form::text('presence_type', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('presence_quantity','Quantity')}}
            {{Form::text('presence_quantity', null,array('class' => 'form-control', 'required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('presence_price','Price')}}
            {{Form::text('presence_price', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        {{Form::submit('Add Presence', array('class' => 'btn btn-primary'))}}
        {{ Form::close() }}
    </div>
</div>
@stop