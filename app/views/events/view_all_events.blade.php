@extends('layouts.portal')
@section('body')

<!-- Page content -->
<div id="page-content">
	<!-- Gallery Header -->
	<div class="content-header">
		<!-- Gallery Filter Links -->
		<!-- Custom Gallery functionality is initialized in js/pages/compGallery.js -->
		<!-- Add the category value you want each link in .gallery-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
		<div class="header-section text-center">
			<div class="btn-group gallery-filter">
				<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="preferred">My Preferred</a>
				<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary active" data-category="all">All</a>
				<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="new">New</a>
				<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="popular">Popular</a>
				<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="soon">Happening Soon!</a>
			</div>
		</div>
		<!-- END Gallery Filter Links -->
        <!--
        <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Do you know that you filter to your preferred event type? To customize your filters, click here.</h4>
        </div>
    -->
</div>
<!-- END Gallery Header -->

<!-- Gallery Items -->
<div class="row gallery">
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
						</ul>
					</div>
					<i class="fa fa-fw fa-file-text"></i> <strong>
					<?
					$str = '';
					?>
					@foreach($event_types as $eventType)
					@if($eventType -> id == $event -> id)
					<?
					$str .= $eventType -> type;
					$str .= ', ';
					?>
					@endif	
					@endforeach
					<?
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
						<?
						$str = '';
						?>
						@foreach($event_audiences as $eventAudience)
						@if($eventAudience -> id == $event -> id)
						<?
						$str .= '<span class="label label-default">';
						$str .= $eventAudience -> type;
						$str .= '</span>, ';
						?>
						@endif	
						@endforeach
						<?
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

{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop