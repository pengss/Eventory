@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Sign Up An Organisation</h2>
        {{ Form::open(array('url' => 'create_organisation', 'method' => 'post')) }}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description', null,array('class' => 'form-control','required' => 'required'))}}
        </div>
        {{Form::submit('Create Organisation', array('class' => 'btn btn-primary'))}}
        {{ Form::close() }}
    </div>
</div>
@stop