@extends('layouts.sign_up')
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
                <label>What kind of user are you?</label>
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="0">Please select</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="eo">Event Organizer</option>
                    </select>
            
            </div>
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-effect-ripple btn-primary">Register</button>
                    <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop