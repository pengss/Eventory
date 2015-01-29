@extends('layouts.sponsor')
@section('body')

<div id="page-content">
	<div class="content-header content-header-media">
		<div class="header-section">
			<div class="row">
				<div class="col-sm-7 col-md-8 col-lg-9 content-float-hor push-bit-top-bottom clearfix">
					<img src="images/avatar9.jpg" alt="User Image" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
					<h1>Welcome!</h1>
				</div>
			</div>
		</div>
		<!-- For best results use an image with a resolution of 2560x260 pixels (you could use a blurred image for smaller file size) -->
		<img src="images/socialnet_header.jpg" alt="Header Image" class="animation-pulseSlow">
	</div>
	<div class="col-lg-7">
		<!-- Live Feed Widget -->
		<div class="widget">
			<div class="widget-content widget-content-mini themed-background-info text-light-op">
				<span class="pull-right text-dark-op"></span>
				<i class="fa fa-fw fa-users"></i> Live Feed
			</div>
			<div class="widget-content widget-content-full">
				<table class="table table-borderless table-striped table-vcenter">
					<tbody>
						<tr>
							<td class="text-center" style="width: 100px;">
								<img src="images/avatar13.jpg" alt="User Image" class="img-circle">
							</td>
							<td>
								<a href="javascript:void(0)" class="text-info">New Sponsorship Request from XXX!</a><br>
								<a href="javascript:void(0)" class="text-muted"><small>1 hr ago</small></a>
							</td>
							<td class="text-center" style="width: 80px;">
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-success" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-danger" data-toggle="tooltip" title="Follow"><i class="fa fa-share"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<img src="images/avatar13.jpg" alt="User Image" class="img-circle">
							</td>
							<td>
								<a href="javascript:void(0)" class="text-info">New query from XXX about your XXX event</a><br>
								<a href="javascript:void(0)" class="text-muted"><small>1 day ago</small></a>
							</td>
							<td class="text-center">
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-success" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-danger" data-toggle="tooltip" title="Follow"><i class="fa fa-share"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<img src="images/avatar13.jpg" alt="User Image" class="img-circle">
							</td>
							<td>
								<a href="javascript:void(0)" class="text-info">XXX Event Created</a><br>
								<a href="javascript:void(0)" class="text-muted"><small>2 days ago</small></a>
							</td>
							<td class="text-center">
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-success" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-danger" data-toggle="tooltip" title="Follow"><i class="fa fa-share"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- END Live Feed-->
	<div class="col-lg-5">
		<!-- My Events Widget -->
		<div class="widget">
			<div class="widget-content widget-content-mini themed-background-warning text-light-op">
				<i class="gi gi-cake fa-fw"></i> My Events
			</div>
			<div class="widget-content widget-content-full">
				<table class="table table-borderless table-striped table-vcenter">
					<tbody>
						<tr>
							<td class="text-center" style="width: 100px;">
								<img src="images/avatar13.jpg" alt="User Image" class="img-circle">
							</td>
							<td>
								<a href="javascript:void(0)" class="text-warning">Event name</a><br>
								<a href="javascript:void(0)" class="text-muted"><small>Date: xxx</small></a><br/>
								<a href="javascript:void(0)" class="text-muted"><small>No. of Sponsors: xx</small></a>
							</td>
							<td class="text-center" style="width: 80px;">
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-info" data-toggle="tooltip" title="Send a gift"><i class="fa fa-gift"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center" style="width: 100px;">
								<img src="images/avatar13.jpg" alt="User Image" class="img-circle">
							</td>
							<td>
								<a href="javascript:void(0)" class="text-warning">Event name</a><br>
								<a href="javascript:void(0)" class="text-muted"><small>Date: xxx</small></a><br/>
								<a href="javascript:void(0)" class="text-muted"><small>No. of Sponsors: xx</small></a>
							</td>
							<td class="text-center" style="width: 80px;">
								<a href="javascript:void(0)" class="btn btn-effect-ripple btn-xs btn-info" data-toggle="tooltip" title="Send a gift"><i class="fa fa-gift"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- END My Events Widget -->
	</div>
</div>
@stop