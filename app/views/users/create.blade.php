@extends('layouts.portal')
@section('body')


<div id="page-content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2>Register here</h2>

            @if($error = $errors->first('username'))
            {{$error}}
            @endif

            {{ Form::open(array('route' => array('user.store'), 'method' => 'post')) }}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name', null,array('class' => 'form-control','required' => 'required'))}}
            </div>
            <div class="form-group">
                {{Form::label('username','Username')}}
                {{Form::text('username', null,array('class' => 'form-control','required' => 'required'))}}
            </div>
            <div class="form-group">
                {{Form::label('password','Password')}}
                {{Form::password('password',array('class' => 'form-control','required' => 'required'))}}
            </div>
            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::text('email', null,array('class' => 'form-control','required' => 'required'))}}
            </div>
            <div class="form-group">
                {{Form::label('organisation','Organisation')}}
                {{Form::text('organisation', null,array('class' => 'form-control','required' => 'required'))}}
                {{ HTML::linkRoute('create_organisation', 'Create An Organisation') }}
            </div>
            <div class="form-group">
                {{Form::label('user_type','What kind of user are you')}}
                {{Form::text('user_type', null,array('class' => 'form-control','required' => 'required'))}}
            </div>
            {{Form::submit('Register', array('class' => 'btn btn-primary'))}}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop