@extends('layouts.portal')
@section('body')

<!-- Page content -->
<div id="page-content">
	<div class ="emptydiv">
	</div>
	<!-- END Gallery Header -->
	<div class="header-section text-center">
		<!--<div class="btn-group gallery-filter">
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="preferred">My Preferred</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary active" data-category="all">All</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="new">New</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="popular">Popular</a>
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="soon">Happening Soon!</a>
		</div>-->
	</div>
	<!-- Gallery Items -->
	<div class="row gallery">
		<!-- //check if got events anot-->
		@if (count($events) >= 1)
		@foreach($events as $event)

		<div class="col-sm-4">
			<div class="gallery-image-container animation-fadeInQuick2" data-category="new">
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
							<li>
								<a href="{{URL::to('delete_my_event', $event->event_name)}}">
									<i class="fa fa-times-circle pull-right"></i>
									Delete
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
						<h6 class="widget-heading event-footer"><i class="fa fa-tags"></i> 
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
	<!-- tell them no event-->
	@else

	<div class="block ">
		<!-- Get Started Title -->
		<div class="block-title text-center">
			<h2>Seems like you have no event at the moment. Click <a href="/Eventory/public/create_event">here</a> to create your 1st event!</h2>
		</div>
	</div>
	@endif
</div>
<!-- END Gallery Items -->
</div>
<!-- END Page Content -->
<div id="delete-event" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><strong>Delete Event Confirmation</strong></h3>
			</div>
			<div class="modal-body">
				Are you sure you want to delete your event?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-effect-ripple btn-primary">Confirm</button>
				<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Back</button>
			</div>
		</div>
	</div>
</div>
{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop