@extends('layouts.sponsor')
@section('body')

<!-- Page content -->
<div id="page-content">
	<div class ="emptydiv">
	</div>
	<!-- END Gallery Header -->
	<div class="header-section text-center">

		<!--
		<div class="btn-group gallery-filter">
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="preferred">My Preferred</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary active" data-category="all">All</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="new">New</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="popular">Popular</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary sort" data-category="soon"  data-sort="myorder:asc">ASC</a>
		</div>

	-->

	{{ Form::open(array('route' => array('user.store'), 'method' => 'post', 'class' => 'form-horizontal form-bordered')) }}
	<div class="block">
		<!-- Select Component Content -->
		<form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
			<!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
			<div class="form-group">
				<label class="col-md-3 control-label" for="example-chosen">Search Events by:</label>
				<div class="col-md-5">
					<select id="example-chosen" name="example-chosen" class="select-chosen" data-placeholder="Choose a category.." style="width: 250px;">
						<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
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
		</form>
		<!-- END Select Component Content -->
	</div>
	{{ Form::close() }}
</div>
<!-- Gallery Items -->
<div class="row gallery">
	@foreach($events as $event)

	<div class="col-sm-4">
		<div class="gallery-image-container animation-fadeInQuick2" data-category="new" data-my-order="{{$event->start_date}}">
			<div class="widget-content themed-background text-light-op grid-header">

				<div class="btn-group pull-right">
					<a href="javascript:void(0)" class="btn btn-effect-ripple btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options"><i class="fa fa-chevron-down"></i></a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li>
							<a href="{{URL::to('edit_my_event', $event->event_name)}}">
								<i class="fa fa-pencil pull-right"></i>
								Edit
							</a>
						</li>
					</ul>
				</div>
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

		<a href="{{URL::to('view_my_event', $event->event_name)}}">
			<div class="widget-image widget-image-sm">
				{{ HTML::image($event->logo) }}
				<div class="widget-image-content">
				</div>
			</div>
			<div class="widget-content text-dark">
				<div class="g-row">
					<span class="pull-right">{{$event->start_date}}</span>
					<h3 class="widget-heading"><strong>{{$event->event_name}}</strong></h3>
				</div>
				<div class="g-row">
					<h5 class="widget-heading"><em>by {{$event->org_info}}</em></h5>
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
<!--end-->

</div>
<!-- END Gallery Items -->
</div>
<!-- END Page Content -->
{{ HTML::script('js/vendor/jquery.mixitup.js'); }}
{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop