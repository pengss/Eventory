@extends('layouts.portal')
@section('body')
<!-- Page content -->
<div id="page-content">
    <div class ="emptydiv">
    </div>
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

                    {{ HTML::image($selectedEvent->banner) }}

                </div>
            </br>
            <div class="widget">
                <div class="widget-content widget-content-mini themed-background-dark text-light-op">

                    Event's type: 
                    
                    <?php
                    $str = '';
                    ?>
                    @foreach($event_types as $eventType)
                    @if($eventType -> id == $selectedEvent -> id)
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

            <br>
            <div class="widget" style ="height: 200px;">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <i class="gi gi-group"></i>  <strong class="text-dark">Target Audience</strong>
                </div>
                <div class="widget-content">

                    <h4 class="widget-heading">
                        <?php
                        $str = '';
                        ?>
                        @foreach($event_audiences as $eventAudience)
                        @if($eventAudience -> id == $selectedEvent -> id)
                        <?php
                        $str .= $eventAudience -> type;
                        $str .= '<br/>';
                        ?>
                        @endif  
                        @endforeach
                        <?php
                        $str = substr($str, 0, strlen($str) - 0);
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
                    <?php

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
                        <img src="{{$selectedEvent -> org_logo}}" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                        <h2 class="widget-heading h3 text-muted">{{$selectedEvent -> org_name}}</h2>
                    </div>
                    <div class="widget-content themed-background-muted text-dark text-left">
                        {{$selectedEvent -> org_info}}
                    </div>
                    <div class="widget-content">
                        <!--<div class="row text-center">
                            <a href="javascript:void(0)" class="col-xs-6">
                                <h4 class="widget-heading"><i class="gi gi-nameplate_alt text-info push-bit"></i> <br><small>View Organizer</small></h4>
                            </a>
                            <a href="javascript:void(0)" class="col-xs-6">
                                <h4 class="widget-heading"><i class="gi gi-pizza text-success push-bit"></i> <br><small>Discuss with me!</small></h4>
                            </a>
                        </div>-->
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


</div>
<!-- END Page Content -->

@stop