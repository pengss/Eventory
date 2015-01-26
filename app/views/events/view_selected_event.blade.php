@extends('layouts.portal')
@section('body')
<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <!-- Blockquote Left Block -->
            <div class="block full">
                <!-- Blockquote Left Title -->
                <div class="block-title">
                    <h1><strong>{{$selectedEvent -> event_name}}</strong></h1>
                </div>

                <div class="block-content-full">

                    {{ HTML::image($selectedEvent->logo) }}

                </div>
            </br>
            <div class="widget">
                <div class="widget-content widget-content-mini themed-background-dark text-light-op">

                    Event's type: 
                    
                 
                    <?

                    $str = '';

                        $str .= "event type, ";
                   
                    $str = substr($str, 0, strlen($str) - 2);
                    echo $str;
                    ?>
                </div>
                <article class="article-story">
                    <p>{{$selectedEvent -> description}}</p>

                </article>

            </div>
            <!-- END Blockquote Left Content -->
        </div>
        <!-- END Blockquote Left Block -->
    </div>
    <div class="col-md-3">
        <!-- Blockquote Right Block -->
        <div class="block full">
            <div class="turnout">
                <div class="text-center clearfix">
                    <h1 class="h1">
                        <strong><span data-toggle="counter">{{$selectedEvent -> turnout}}</span></strong>
                    </h1>
                    <span class="text-muted">expected turnout</span>
                </div>
            </div>
            <button type="button" class="btn btn-effect-ripple btn-success sponsorBtn"><h4><strong>Sponsor this Event!</strong></h4></button>

            <br>
            <div class="widget">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <i class="gi gi-group"></i>  <strong class="text-dark">Target Audience</strong>
                </div>
                <div class="widget-content">

                    <h4 class="widget-heading">

                        <?

                        //get list of target audience
                        $str = '';
                        $str .= "audience<br/>";
                        $str .= substr($str, 0, strlen($str) - 5);
                        echo $str;
                        ?>
                    </h4>

                </div>
            </div>

            <div class="widget">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <i class="gi gi-calendar"></i> <strong>  Where & When</strong>
                </div>
                <div class="widget-content text-dark text-left">
                    <p>{{$selectedEvent -> location}}</p>
                    <?

                    $start_date = $selectedEvent -> start_date;
                    $end_date = $selectedEvent -> end_date;

                    if ($start_date == $end_date){
                        echo "<p>".$start_date."</p>";
                    }
                    else{
                        echo "<p>".$start_date." - ".$end_date."</p>";
                    }
                    ?>
                    <p>{{$selectedEvent -> start_time}} to {{$selectedEvent -> end_time}}</p>
                </div>
            </div>


            <div class="">
                <!-- Stats User Widget -->
                <div class="widget">
                    <div class="widget-content widget-content-mini themed-background-dark text-light-op">
                        <i class="fa fa-fw fa-trophy"></i> <strong>Organisation</strong>
                    </div>
                    <div class="widget-content text-center">
                        <img src="{{$selectedEvent -> logo}}" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                        <h2 class="widget-heading h3 text-muted">{{$selectedEvent -> org_info}}</h2>
                    </div>
                    <div class="widget-content themed-background-muted text-dark text-left">
                        {{$selectedEvent -> org_info}}
                    </div>
                    <div class="widget-content">
                        <div class="row text-center">
                            <a href="javascript:void(0)" class="col-xs-6">
                                <h4 class="widget-heading"><i class="gi gi-nameplate_alt text-info push-bit"></i> <br><small>View Organizer</small></h4>
                            </a>
                            <a href="javascript:void(0)" class="col-xs-6">
                                <h4 class="widget-heading"><i class="gi gi-pizza text-success push-bit"></i> <br><small>Discuss with me!</small></h4>
                            </a>
                        </div>
                    </div>

                    <div class ="widget-content">
                        <div class="col-xs-3 social-links"><a href="{{$selectedEvent -> facebook}}" data-toggle="tooltip" data-original-title="facebook page"><i class="fa fa-facebook-square"></i></a></div>
                        <div class="col-xs-3 social-links"><a href="{{$selectedEvent -> facebook_event}}" data-toggle="tooltip" data-original-title="facebook event page"><i class="fa fa-facebook"></i></a></div>
                        <div class="col-xs-3 social-links"><a href="{{$selectedEvent -> instagram}}" data-toggle="tooltip" data-original-title="instagram"><i class="fa fa-instagram"></i></a></div>
                        <div class="col-xs-3 social-links"><a href="{{$selectedEvent -> website}}" data-toggle="tooltip" data-original-title="website"><i class="gi gi-global"></i></a></div>
                    </div>
                </div>
                <!-- END Stats User Widget -->
            </div>
        </div>
        <!-- END Blockquote Right Block -->
    </div>
    <div class="col-md-1"></div>
</div>

<!-- Sponsorship Packages Content -->
<div class="block">
    <div class="block-title">
        <h2>Sponsorship Packages</h2>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <table class="table table-borderless table-pricing">
                <thead>
                    <tr>
                        <th>Be a Platinum Sponsor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Logo Placement</strong></li></td>
                    </tr>
                    <tr>
                        <td><strong>Emcee shoutout x1</strong></td>
                    </tr>
                    <tr class="active">
                        <td>
                            <h2>$500<br><small>10 slots left</small></h2>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">
                            <small><em>* All plans include free support!</em></small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-borderless table-pricing">
                <thead>
                    <tr>
                        <th>Be a Bronze Sponsor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Logo Placement</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Emcee shoutout x2</strong></td>
                    </tr>
                    <tr>
                        <td><strong></strong></td>
                    </tr>
                    <tr class="active">
                        <td>
                            <h1>$800<small></small><br><small>5 slots left</small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">
                            <small><em>* All plans include free support!</em></small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-borderless table-pricing">
                <thead>
                    <tr>
                        <th>Be a Silver Sponsor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Logo Placement</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Emcee shoutout every 3hr</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Social media shoutout</strong></td>
                    </tr>
                    <tr class="active">
                        <td>
                            <h1>$2000<small></small><br><small>5 slot left</small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">
                            <small><em>* All plans include free support!</em></small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-borderless table-pricing table-featured">
                <thead>
                    <tr>
                        <th>Be a Gold Sponsor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Logo Placement</strong> (extra big)</td>
                    </tr>
                    <tr>
                        <td><strong>Emcee shoutout every 1hr</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Social media shoutout</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Participants' likes for your page</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Participants engagement with your brand</strong></td>
                    </tr>
                    <tr class="active">
                        <td>
                            <h1>$5000<small></small><br><small>1 slot left</small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">
                            <small><em>* All plans include free support!</em></small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Sponsorship Packages Content -->
</div>
<!--Single Sponsorship Presence -->
<div class="block">
    <!-- Mini Pricing Tables Title -->
    <div class="block-title">
        <h2>Marketing Presence (single item)</h2>
    </div>
    <!-- END Mini Pricing Tables Title -->

    <!-- Mini Pricing Tables Content -->
    <div class="row">
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Emcee Shoutout</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h2>$100<br></h2>
                            <h4>Our emcee will give a shoutout about your brand</h4>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Goodies</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h2>$200<br></h2>
                            <h4>We'll pack distribute your products to our participants</h4>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Banner Placement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h2>$1000<br></h2>
                            <h4>Your brand logo will be on our mega event banner</h4>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Participants Engagement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h2>$2000<br></h2>
                            <h4>We'll have our partipants to come to your store and to learn more about your brand.</h4>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END single Presence Items -->
</div>

<div class="block full">
    <ul class="pager">
        <button type="button" class="btn btn-block btn-success">Confirm Sponsoring Selection</button>

        <button type="button" class="btn btn-block btn-warning">Propose an Offer</button>
    </ul>
</div>


</div>
<!-- END Page Content -->

{{ HTML::linkRoute('edit_my_event', 'Edit this event', array('$myEvent' => $selectedEvent->event_name)) }}<br>
<div class="col-md-4 col-md-offset-4">
   <h4>{{'Location:' . ' ' . $selectedEvent -> location}}</h4><br>

   <h4>{{'Expected Turn Out:' . ' ' . $selectedEvent -> turnout}}</h4><br>

   <h4>{{'Description:' . ' ' . $selectedEvent -> description}}</h4><br>

   <h4>{{'Organisation Information:' . ' ' . $selectedEvent -> org_info}}</h4><br>

   <h4>{{'Start Date:' . ' ' . $selectedEvent -> start_date}}</h4><br>

   <h4>{{'End Date:' . ' ' . $selectedEvent -> end_date}}</h4><br>

   <h4>{{'Start Time:' . ' ' . $selectedEvent -> start_time}}</h4><br>

   <h4>{{'End Time:' . ' ' . $selectedEvent -> end_time}}</h4><br>

   @if($selectedEvent -> facebook != null)
   <h4>{{'Facebook:' . ' ' . $selectedEvent -> facebook}}</h4><br>
   @endif

   @if($selectedEvent -> facebook_event != null)
   <h4>{{'Facebook Event:' . ' ' . $selectedEvent -> facebook_event}}</h4><br>
   @endif

   @if($selectedEvent -> twitter != null)
   <h4>{{'Twitter:' . ' ' . $selectedEvent -> twitter}}</h4><br>
   @endif

   @if($selectedEvent -> instagram != null)
   <h4>{{'Instagram:' . ' ' . $selectedEvent -> instagram}}</h4><br>
   @endif

   @if($selectedEvent -> website != null)
   <h4>{{'Website:' . ' ' . $selectedEvent -> website}}</h4><br>
   @endif
</div>
@stop