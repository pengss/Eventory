@extends('layouts.sponsor')
@section('body')

<!-- Page content -->
<div id="page-content">
	<div class ="emptydiv">
	</div>
	<!-- Gallery Items -->
	<div class="row gallery">
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

{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop