@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>{{$selectedEvent -> event_name}}</h2>
        {{ HTML::linkRoute('edit_my_event', 'Edit this event', array('$myEvent' => $selectedEvent->event_name)) }}<br>
    </div>
    <div class="col-md-4 col-md-offset-4">
    	<h4>{{'Location:' . ' ' . $selectedEvent -> location}}</h4><br>
        
        <h4>{{'Expected Turn Out:' . ' ' . $selectedEvent -> turnout}}</h4><br>

        <h4>{{'Description:' . ' ' . $selectedEvent -> description}}</h4><br>
        
        <h4>{{'Organisation Information:' . ' ' . $selectedEvent -> org_info}}</h4><br>
        
        <h4>{{'Start Date:' . ' ' . $selectedEvent -> start_date}}</h4><br>
        
        <h4>{{'End Date:' . ' ' . $selectedEvent -> end_date}}</h4><br>
        
        <h4>{{'Start Time:' . ' ' . $selectedEvent -> start_time}}</h4><br>
        
        <h4>{{'End Time:' . ' ' . $selectedEvent -> end_time}}</h4><br>
        
        @if($selectedEvent -> facebook != null)
        	<h4>{{'Facebook:' . ' ' . $selectedEvent -> facebook}}</h4><br>
    	@endif

    	@if($selectedEvent -> facebook_event != null)
        	<h4>{{'Facebook Event:' . ' ' . $selectedEvent -> facebook_event}}</h4><br>
    	@endif

    	@if($selectedEvent -> twitter != null)
        	<h4>{{'Twitter:' . ' ' . $selectedEvent -> twitter}}</h4><br>
    	@endif

    	@if($selectedEvent -> instagram != null)
        	<h4>{{'Instagram:' . ' ' . $selectedEvent -> instagram}}</h4><br>
    	@endif

    	@if($selectedEvent -> website != null)
        	<h4>{{'Website:' . ' ' . $selectedEvent -> website}}</h4><br>
    	@endif
    </div>
</div>
@stop