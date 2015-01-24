@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}

@foreach($events as $event)
	<div class="form-group">
		{{ HTML::linkRoute('view_my_event', $event->event_name, array('$myEvent' => $event->event_name)) }}
	</div>
@endforeach

@foreach($event_types as $eventType)
	<div class="form-group">
		{{$eventType -> type}}
	</div>
@endforeach

@foreach($event_audiences as $eventAudience)
	<div class="form-group">
		{{$eventAudience -> type}}
	</div>
@endforeach

{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop