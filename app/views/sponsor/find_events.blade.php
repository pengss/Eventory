@extends('layouts.sponsor')
@section('body')

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
							<option value = "Select All"> Select All </option>
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

	
</div>
@stop