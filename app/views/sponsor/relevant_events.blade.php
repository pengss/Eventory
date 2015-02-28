@extends('layouts.sponsor')
@section('body')

<!-- Page content -->
<div id="page-content">
	<div class ="emptydiv">
	</div>
	<!-- Gallery Items -->
	<div class="row gallery">
		@if (count($relevantEvents) >= 1)
		@foreach($relevantEvents as $event)

		<div class="col-sm-4">
			<div class="gallery-image-container animation-fadeInQuick2" data-category="new">
				<div class="widget-content themed-background text-light-op grid-header">
					<i class="fa fa-fw fa-file-text"></i> <strong>
					<?php
					$str = '';
					?>
					@foreach($relevantEventTypes as $eventType)
					@if($eventType -> id == $event[0] -> id)
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

			<a href="{{URL::to('view_this_event', $event[0]->event_name)}}">
				<div class="widget-image widget-image-sm">
					{{ HTML::image($event[0]->banner) }}
					<div class="widget-image-content">
					</div>
				</div>
				<div class="widget-content text-dark">
					<div class="g-row">
						<span class="pull-right">{{$event[0]->start_date}}</span>
						<h3 class="widget-heading"><strong>{{$event[0]->event_name}}</strong></h3>
					</div>
					<div class="g-row">
						<h5 class="widget-heading"><em>by {{$event[0]->org_name}}</em></h5>
					</div>
					<div class="g-row">
						<h5 class="widget-heading event-desc">{{$event[0]->description}}</h5>
					</div>
					<div class="g-row">

						<span class="pull-right"><i class="fa fa-users"></i> {{$event[0]->turnout}}</span>
						<h6 class="widget-heading event-footer"><i class="fa fa-tags"></i> 
							<?php
							$str = '';
							?>
							@foreach($relevantAudiences as $eventAudience)
							@if($eventAudience -> id == $event[0] -> id)
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
	@else

	<div class="block ">
		<!-- Get Started Title -->
		<div class="block-title text-center">
			<h2>Sorry, there are no events fitting your criteria at the moment</h2>
		</div>
	</div>
	@endif
</div>
<!-- END Gallery Items -->
</div>
<!-- END Page Content -->

{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop