@extends('layouts.app')

@section('content')
   <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Dashboard</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">statistics, charts, events and reports</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="d-none d-sm-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">Buy Now</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <!-- Counters -->
                <div class="row">
                    <!-- Counter: Sales -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-primary text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>Total Sales <small class="text-inverse">Last week</small></h6>
                                    <h3 class="h1">&dollar;<span class="counter">741</span></h3><i class="material-icons list-icon">add_shopping_cart</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Subscriptions -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-color-scheme text-inverse">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>New Subscriptions <small class="text-inverse">Last month</small></h6>
                                    <h3 class="h1"><span class="counter">346</span></h3><i class="material-icons list-icon">event_available</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Users -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>New Users <small>Last 7 days</small></h6>
                                    <h3 class="h1"><span class="counter">625</span></h3><i class="material-icons list-icon">public</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Pageviews -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>Total PageViews <small>Last 24 Hours</small></h6>
                                    <h3 class="h1"><span class="counter">2748</span></h3><i class="material-icons list-icon">show_chart</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <!-- Chart Group 1 -->
                <div class="row">
                    <!-- Chart: Registration History -->
                    <div class="col-md-7 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>New Sign Ups</h5>
                                <ul class="widget-actions">
                                    <li class="dropdown">
                                        <div class="predefinedRanges float-right fs-13 fw-500" style="cursor: pointer"><i class="list-icon material-icons color-danger">fiber_manual_record</i>  <span></span>  <i class="list-icon material-icons">expand_more</i>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <div class="row">
                                    <p class="col-sm-6 small">The registrations are measured from the time that the redesign was fully implemented and after the first-e-mailing.</p>
                                    <div class="col-sm-6 text-right">
                                        <h5 class="h1 fw-300 sub-heading-font-family color-danger mr-tb-0">66.05&#37;</h5><small><i class="material-icons list-icon color-danger">arrow_drop_up</i> more registrations</small>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div id="extraAreaMorris" style="height: 280px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Charts: Sales Statistics -->
                    <div class="col-md-5 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>New Sales</h5>
                                <ul class="widget-actions">
                                    <li class="dropdown">
                                        <div class="predefinedRanges float-right fs-13 fw-500" style="cursor: pointer"><i class="list-icon material-icons color-danger">fiber_manual_record</i>  <span></span>  <i class="list-icon material-icons">expand_more</i>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <div class="row">
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons mr-r-5 small">shop</i> 1481</h6><small>orders weekly</small>
                                    </div>
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons mr-r-5 small">date_range</i> 5,678</h6><small>orders monthly</small>
                                    </div>
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons small">attach_money</i> 27,321</h6><small>orders weekly</small>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div id="productLineHomeMorris" style="height: 280px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
              </div>
            <!-- /.widget-list -->
        </main>
@endsection
