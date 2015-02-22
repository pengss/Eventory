@extends('layouts.sign_up')
@section('body')

{{ HTML::style('/css/main.css') }}
{{ HTML::style('/css/animate.min.css') }}
{{ HTML::style('/css/flexslider.css') }}
{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/owl.carousel.css') }}
{{ HTML::style('/css/settings.css') }}
{{ HTML::style('/css/prettyPhoto.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}


<div id="page-content">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2><strong>Event Organizer Signup</strong></h2><br/>
                    <h6><small>Just need some details about you and your organization to get started!</small></h6>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                {{ Form::open(array('route' => array('user.store'), 'method' => 'post', 'class' => 'form-horizontal form-bordered', 'id' => 'form-validation')) }}
                <div class="form-group">
                    <label class="col-md-3 control-label">Name<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Username<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Your username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="passowrd" id="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input type="passowrd" class="form-control"  oninput="check(this)" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Your email address to contact" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-digits">Organization Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="org_name" name="org_name" class="form-control" placeholder="Your Organization Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">About Your Organization<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <textarea id="org_info" name="org_info" rows="7" class="form-control" placeholder="Your Organization Info" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Organization Logo</label>
                    <div class="col-md-9">
                        <input type="File" id="org_logo" name="org_logo" class="form-control">
                    </div>
                </div>
                
                <input type="hidden" id="event organizer" name="event organizer"/>
                
        

                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary">Register</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                    </div>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>

{{ HTML::script('js/jquery-ui.js'); }}
{{ HTML::script('js/custom/signup.js'); }}
@stop


