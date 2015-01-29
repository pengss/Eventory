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

	{{ Form::open(array('route' => array('find_events'), 'method' => 'post', 'class' => 'form-horizontal form-bordered')) }}
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
<!-- END Page Content -->
{{ HTML::script('js/vendor/jquery.mixitup.js'); }}
{{ HTML::script('js/pages/compGallery.js'); }}
{{ HTML::script('js/custom/viewallevents.js'); }}
@stop