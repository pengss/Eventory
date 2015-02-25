@extends('layouts.sponsor')
@section('body')

<!-- Page content -->
<div id="page-content">
	<div class="header-section text-center">
		<div class="block">
			{{ Form::open(array('route' => array('find_events'), 'method' => 'post', 'class' => 'form-horizontal form-bordered')) }}
			<!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
			<div class="form-group">
				<label class="col-md-3 control-label" for="example-chosen">Search Events by:</label>
				<div class="col-md-5">
					<select id="example-chosen" name="example-chosen" class="select-chosen" data-placeholder="Choose a category.." style="width: 250px;">
						<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
						<option value="Select All">Select All</option>
						<!--<option value="select all">Select All</option>-->
						<?php
						$event_types = DB::table('type_of_events')->get();
						foreach ($event_types as $type)
						{
							?>
							<option value="{{$type -> id}}">{{$type -> type}}</option>
							<?php
						}
						?>
					</select>
				</div>
				<div class="col-md-1">
					<button type="submit" class="btn btn-effect-ripple btn-primary">Search</button>
				</div>
			</div>

			{{ Form::close() }}
			<!-- END Select Component Content -->
		</div>
	</div>
	
	<!-- Gallery Items -->
	<div class="row gallery">

		<!-- //check if got events anot-->
		@if (count($wantedEvents) >= 1)
		@foreach($wantedEvents as $event)

		<div class="col-sm-4">
			<div class="gallery-image-container animation-fadeInQuick2" data-category="new">
				<div class="widget-content themed-background text-light-op grid-header">
					<i class="fa fa-fw fa-file-text"></i> <strong>
					<?php
					$str = '';
					?>
					@foreach($event_types as $eventType)
					@if($eventType -> id == $event -> id)
					<?php
					$str .= $eventType -> type;
					$str .= ', ';
					?>
					@endif	
					@endforeach
					<?php
					$str = substr($str, 0, strlen($str) - 2);
					echo $str;
					?>
				</strong>
			</div>

			<a href="{{URL::to('view_this_event', $event->event_name)}}">
				<div class="widget-image widget-image-sm">
					{{ HTML::image($event->banner) }}
					<div class="widget-image-content">
					</div>
				</div>
				<div class="widget-content text-dark">
					<div class="g-row">
						<span class="pull-right">{{$event->start_date}}</span>
						<h3 class="widget-heading"><strong>{{$event->event_name}}</strong></h3>
					</div>
					<div class="g-row">
						<h5 class="widget-heading"><em>by {{$event->org_name}}</em></h5>
					</div>
					<div class="g-row">
						<h5 class="widget-heading event-desc">{{$event->description}}</h5>
					</div>
					<div class="g-row">

						<span class="pull-right"><i class="fa fa-users"></i> {{$event->turnout}}</span>
						<h6 class="widget-heading"><i class="fa fa-tags"></i> 
							<?php
							$str = '';
							?>
							@foreach($event_audiences as $eventAudience)
							@if($eventAudience -> id == $event -> id)
							<?php
							$str .= '<span class="label label-default">';
							$str .= $eventAudience -> type;
							$str .= '</span>, ';
							?>
							@endif	
							@endforeach
							<?php
							$str = substr($str, 0, strlen($str) - 2);
							echo $str;
							?>
						</h6>

					</div>
				</div>
			</a>
		</div>
	</div>

	@endforeach

	<!-- tell them no event-->
	@else

	<div class="block ">
		<!-- Get Started Title -->
		<div class="block-title text-center">
			<h2>Sorry, there are no events for this category at the moment</h2>
		</div>
	</div>
	@endif
	<!--end-->

</div>
<!-- END Gallery Items -->
</div>
<!-- END Page Content -->

{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop