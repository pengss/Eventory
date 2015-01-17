@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}

<div id="page-content">
	<!--<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Here are all your events</h2>
			{{ Form::open(array('route' => array('user.store'), 'method' => 'post')) }}
			@foreach($events as $event)
			<div class="form-group">
				{{ HTML::linkRoute('view_my_event', $event->event_name, array('$myEvent' => $event->event_name)) }}
			</div>
			@endforeach
		</div>
	</div>-->
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
	</div>
	<!-- END Gallery Header -->
	<!-- Gallery Items -->
	<div class="row gallery">
		<!--
		@foreach($events as $event)

		{{$event -> id;}}
			
		@endforeach-->
		<div class="col-sm-4">
			<div class="gallery-image-container animation-fadeInQuick2" data-category="new">
				<a href="event-details.php?id=" class="widget">
					<div class="widget-content themed-background text-light-op grid-header">
						<span class="pull-right"><i class="fa fa-users"></i>800</span>
						<i class="fa fa-fw fa-file-text"></i> <strong>
						Dance, Charity, Social
						<?

						/*
            			//get list of event types
						$types = DB::table('list_event_type let')->join('event_audience ea', function($join)
						{
							$join->on('let.id', '=', 'ea.event_id')
							->where('ea.event_id', '=', $event->id);
						})
						->get();
						
						$str = '';
						foreach ($types as $type)
						{
							$str.= $type->type.", ";
						}

						$str = substr($str, 0, strlen($str) - 2);
						echo $str;*/
						?>
					</strong>
				</div>
				<div class="widget-image widget-image-sm">
					<img src="<?=$event->banner?>" alt="image">
					<div class="widget-image-content">
					</div>
				</div>
				<div class="widget-content text-dark">
					<div class="g-row">
						<span class="pull-right"><?=$event->start_date?></span>
						<h3 class="widget-heading"><strong><?=$event->event_name?></strong></h3>
					</div>
					<div class="g-row">
						<h5 class="widget-heading"><em>by Organizer</em></h5>
					</div>
					<div class="g-row">
						<h5 class="widget-heading event-desc"><?=$event->description?></h5>
					</div>
					<div class="g-row">
						<h6 class="widget-heading"><i class="fa fa-tags"></i> 
							Students,Young Professionals
							<?
							/*	
           					 //get list of target audience
							$sql2 = "SELECT type FROM events_audience ea, target_audience ta WHERE ea.audience_id=ta.id AND event_id=".$event_id;
							$result2 = mysql_query($sql2);

							$str = '';
							while ($row2 = mysql_fetch_array($result2)) {

								$str .= '<span class="label label-default">'.$row2['type']."</span>,";
							}
							$str = substr($str, 0, strlen($str) - 1);
							echo $str;*/
							?>
						</h6>
					</div>
				</div>
			</a>
		</div>
	</div>

	</div>
<!-- END Gallery Items -->
</div>

{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop