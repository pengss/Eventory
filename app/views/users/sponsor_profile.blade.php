@extends('layouts.sponsor')
@section('body')

<div id="page-content">
	<div class="content-header content-header-media">
		<div class="header-section">
			<div class="row">
				<div class="col-sm-7 col-md-8 col-lg-9 content-float-hor push-bit-top-bottom clearfix">
					<img src="images/avatar9.jpg" alt="User Image" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
					<h1>Welcome {{$nameOfSponsor}}!</h1>
				</div>
			</div>
		</div>
		<!-- For best results use an image with a resolution of 2560x260 pixels (you could use a blurred image for smaller file size) -->
		<img src="images/socialnet_header.jpg" alt="Header Image" class="animation-pulseSlow">
	</div>
	<!-- START if no events -->
	@if($criteria == false)
	<div class="content-header">
		<div class="header-section clearfix">
			<div class="widget-icon themed-background-danger pull-right">
				<i class="gi gi-pushpin text-light-op"></i>
			</div>
			<h1>My Sponsored Events</h1>
			<h2>Seems like you have not listed your sponsoring criterias. Click <a href ="{{ URL::to('sponsor_category') }}">here</a> to list your criterias!</h2>
		</div>
	</div>
	<div class="block">
	@endif	
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
						<h3 class="modal-title"><strong>Get Started</strong></h3>
					</div>
					<div class="modal-body">
						A Message from The Eventory Team:<br/><br/>
						Thank you for joining us as a partner. Let’s work together to grow your business through event sponsorships. <br/>
						Firstly, consider your business goals and set your sponsoring criteria. These criteria determine what events are relevant to you. 
						<br/><br/>

						<strong>Here are the four types of criteria you will need to define:</strong><br/>
						<table class = "table">
							<tr>
								<td>Preferred Target Audience</td>
								<td>Think about who your business wants to target and match it to the target audience of the event.<br/>
									E.g. If you are looking for potential customers, they should be your target audience.</td>
								</tr>
								<tr>
									<td>Preferred Event Type</td>
									<td>Think of the setting you wish to reach out to your target audience.<br/>
										E.g. If your product is sports related, a sporting event will be in line with your brand.</td>
									</tr>
									<tr>
										<td>Preferred Audience Turnout</td>
										<td>Think about the minimum number of people you want to reach out to.</td>
									</tr>
									<tr>
										<td>Preferred Type of Sponsorship</td>
										<td>Think of the resources you can give. <br/>
											E.g. If you have new products to promote, you can give offer them as in-kind sponsorship.</td>
										</tr>
									</table>
									<br/>
									Next, event organizers will be offering various types of sponsoring benefits in exchange for your sponsorship. Evaluate the presence they offer and decide if they can help achieve your goals. You can always propose additional presences to gain from your sponsorship. 
									<br/><br/>
									<strong>Here are some things you can propose:</strong><br/>
									<table class="table">
										<tr>
											<td>Market Research</td>
											<td>Conduct surveys, interviews, focus groups. If your target market matches the event’s target audience, you can use this channel to get feedback for your product/services.</td>
										</tr>
										<tr>
											<td>Booth Space</td>
											<td>Set up booth at the event venue to sell your products or promote your business.</td>
										</tr>
										<tr>
											<td>Digital Marketing</td>
											<td>Promote your product or business through the event’s social media platforms.</td>
										</tr>
										<tr>
											<td>Speaking Time</td>
											<td>Engage your target audience by speaking to them during the event. You can use this time to promote your products or company.</td>
										</tr>
										<tr>
											<td>Product Placement</td>
											<td>Integrate your product into the event activities.</td>
										</tr>
									</table><br/>

									If you have any difficulties thinking about how to maximize your sponsorship returns, we are more than willing to help. Drop me an email at shengkun@eventory.com.sg<br/><br/>
									Cheers,<br/>
									Sheng Kun<br/>
									Co-Founder of Eventory

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
		<!-- END dashboard -->
	</div>
</div>
@stop