@extends('layouts.portal')
@section('body')

<div id="page-content">
	<div class="content-header content-header-media">
		<div class="header-section">
			<div class="row">
				<div class="col-sm-7 col-md-8 col-lg-9 content-float-hor push-bit-top-bottom clearfix">
					<img src="images/avatar9.jpg" alt="User Image" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
					<h1>Welcome {{$nameOfEventOrganiser}}!</h1>
				</div>
			</div>
		</div>
		<!-- For best results use an image with a resolution of 2560x260 pixels (you could use a blurred image for smaller file size) -->
		<img src="images/socialnet_header.jpg" alt="Header Image" class="animation-pulseSlow">
	</div>

	<!-- START if no events -->
	<div class="content-header">
		<div class="header-section clearfix">
			<div class="widget-icon themed-background-danger pull-right">
				<i class="gi gi-pushpin text-light-op"></i>
			</div>
			<h1>My Events</h1>
			<h2>Seems like you have no events. Click <a href ="{{ URL::to('create_event') }}">here</a> to create one!</h2>
		</div>
	</div>
	<div class="block">
		<!-- Search Styles Title -->

		<!-- END Search Styles Title -->

		<!-- Start message -->
		<div class="tab-content">
			<ol>
				<li>
					<h4>
						<font color ="#5ccdde"><strong>Welcome to Eventory</strong></font><br>
					</h4>
					<p>
						Thank you for choosing Eventory.<br/>
						To learn how to get started, click <a href="#modal-getstarted" data-toggle="modal">here!</a><br/><br/>
						Cheers,<br/>
						The Eventory Team 
					</p>

				</ol>
			</div>
			<!-- END message-->
		</div>
		<!-- Get started Modal -->
		<div id="modal-getstarted" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title"><strong>4 Tips to Maximize your Sponsorships</strong></h3>
					</div>
					<div class="modal-body">
						Before you create your event proposal, here are some tips to maximize your chances to get sponsorship.<br/><br/>
						Think of sponsors as your customers and consider what they stand to gain from sponsoring your event. <br/>
						From our experience talking to companies, here are the key things they look out for in an event proposal: <br/><br/>
						<ol>
							<li>1. Number of people who know about your event</li>
							<li>2. Target audience of your event</li>
							<li>3. Type of event you are organizing</li>
							<li>4. What they stand to gain from sponsoring your event</li>
						</ol>	
						<br/>
						<strong>Here are some examples of sponsoring benefits you can offer:</strong><br/>
						<table class ="table">
							<tr>
								<td>Title Sponsor</td>
								<td> Name your event after the sponsor.<br/>
									E.g. Eventory Exam Welfare Giveaway</td>
								</tr>
								<tr>
									<td>Digital Marketing</td>
									<td>Promote your sponsor’s products/services through your event/organization’s social media reach</td>
								</tr>
								<tr>
									<td>Product Placement</td>
									<td>Integrate your sponsor’s products/services into your event activities.<br/>
										E.g. Showcase your sponsor’s products/services in games 
									</td>
								</tr>
								<tr>
									<td>Booth Space</td>
									<td>Provide event space for your sponsor to come in and mingle with your audience.</td>
								</tr>
								<tr>
									<td>Goodie Bag</td>
									<td>Ask sponsor for samples/products/vouchers etc.</td>
								</tr>
								<tr>
									<td>Canvassing</td>
									<td>Ask sponsor to sell you its products at a discount and earn a profit by selling them at your own price.</td>
								</tr>
								<tr>
									<td>Others</td>
									<td>E.g. offer a service that you and your organizing team are willing and able to deliver.</td>
								</tr>
							</table><br/>
							Of course, there are many other benefits you can offer to potential sponsors. You understand your event best, hence, tap on your creativity to capture sponsors’ interests. <br/><br/>
							Cheers,<br/>
							The Eventory Team

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Dismiss</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Get started Modal -->
			<!-- END if no events -->


	<!--START DASHBOARD--->
	<div class="col-lg-7">
		<!-- Live Feed Widget -->
		<div class="widget">
			<!--<div class="widget-content widget-content-mini themed-background-info text-light-op">
				<span class="pull-right text-dark-op"></span>
				<i class="fa fa-fw fa-users"></i> Live Feed
			</div>-->
			<div class="widget-content widget-content-full">
				<!--<table class="table table-borderless table-striped table-vcenter">
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
				</table>-->
			</div>
		</div>
	</div>
	<!-- END Live Feed-->
	<div class="col-lg-5">
		<!-- My Events Widget -->
		<div class="widget">
			<!--<div class="widget-content widget-content-mini themed-background-warning text-light-op">
			<i class="gi gi-cake fa-fw"></i> My Events-->
		</div>
		<div class="widget-content widget-content-full">
				<!--<table class="table table-borderless table-striped table-vcenter">
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
				</table>-->
			</div>
		</div>
		<!-- END My Events Widget -->
		<!-- END DASHBOARD -->
	</div>
</div>
@stop