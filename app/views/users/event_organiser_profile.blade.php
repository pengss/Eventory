@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}

<div id="page-content">
    <div class="row">

        @if(Auth::check())
            <p>Welcome to your profile page (Event Organiser)</p>
        @endif
        {{ HTML::linkRoute('create_event', 'Create an event') }}
    
    
    	{{ HTML::linkRoute('view_events', 'View all my events') }}

    </div>
</div>
@stop