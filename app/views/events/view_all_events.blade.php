@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}

<div id="page-content">
    <div class="row">
        <h2>Here are all your events</h2>
        {{ Form::open(array('route' => array('user.store'), 'method' => 'post')) }}
        @foreach($events as $event)
        <div class="form-group">
            {{ HTML::linkRoute('view_my_event', $event->event_name, array('$myEvent' => $event->event_name)) }}
        </div>
        @endforeach
    </div>
</div>
@stop