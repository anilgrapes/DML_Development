<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
 <link rel="stylesheet" href="{{ asset('css/pace.css') }}">
    <script src="{{ asset('css/ajax/libs/pace/1.0.2/pace.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/vendors/material-icons/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/mono-social-icons/monosocialiconsfont.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/weather-icons-master/weather-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/weather-icons-master/weather-icons-wind.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/morris.js/0.5.1/morris.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/slick-carousel/1.6.0/slick.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
  
    <!-- Head Libs -->
    <script src="{{ asset('css/ajax/libs/modernizr/2.8.3/modernizr.min.js') }}"></script>

    <script src="{{ asset('css/ajax/libs/modernizr/2.8.3/modernizr.min.js') }}"></script>
  
     <link href="{{ asset('css/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body  class="header-light sidebar-dark sidebar-expand">
    <div id="wrapper" class="wrapper">
         <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index-2.html" class="navbar-brand">
                    <img class="logo-expand" alt="" src="{{ asset('css/demo/logo-expand.png')}}">
                    <img class="logo-collapse" alt="" src="{{ asset('css/demo/logo-collapse.png')}}">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search d-none d-sm-block" role="search"><i class="material-icons list-icon">search</i> 
                <input type="text" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Button: Create New -->
            <div class="btn-list dropdown d-none d-md-flex"><a href="javascript:void(0);" class="btn btn-primary dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon fs-24">playlist_add</i> Create New</a>
                <div class="dropdown-menu dropdown-left animated flipInY"><span class="dropdown-header">Create new ...</span>  <a class="dropdown-item" href="#">Projects</a>  <a class="dropdown-item" href="#">User Profile</a>  <a class="dropdown-item" href="#"><span class="badge badge-pill badge-primary float-right">7</span> To-do Item</a> 
                    <a
                    class="dropdown-item" href="#"><span class="badge badge-pill badge-color-scheme float-right">23</span> Mail</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="material-icons list-icon icon-muted pull-right">settings</i> <strong>Settings</strong></a>
                </div>
            </div>
            <!-- /.btn-list -->
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-block">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-border bg-primary">3</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-dark animated flipInY">
                        <div class="card">
                            <header class="card-header">New messages <span class="mr-l-10 badge badge-border badge-border-inverted bg-primary">3</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-border bg-primary">9</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-dark animated flipInY">
                        <div class="card">
                            <header class="card-header">New notifications <span class="mr-l-10 badge badge-border badge-border-inverted bg-primary">4</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="assets/demo/users/user-image.png" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide dropdown-card-dark text-inverse">
                        <div class="card">
                            <header class="card-heading-extra">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="mr-b-10 sub-heading-font-family fw-300">Scott Adams</h3><span class="user--online">Available <i class="material-icons list-icon">expand_more</i></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><a href="logout.html" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                    </div>
                                    <!-- /.col-4 -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <section class="card-header text-inverse">New notifications <span class="badge badge-border badge-border-inverted bg-danger mr-l-10">4</span>
                            </section>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects and finally added a case study for thus great project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM to discuss about an ongoing project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                        </div>
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
   <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled clearfix">
            <!-- User Details -->
            <div class="side-user">
                <a class="col-sm-12 media clearfix" href="javascript:void(0);">
                    <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                        <img src="{{ asset('css/demo/users/user-image.png') }}" class="media-object rounded-circle" alt="">
                    </figure>
                    <div class="media-body hide-menu">
                        <h4 class="media-heading mr-b-5 text-uppercase">Scott Adams</h4><span class="user-type fs-12">Edit Profile (...)</span>
                    </div>
                </a>
                <div class="clearfix"></div>
                <ul class="nav in side-menu">
                    <li><a href="page-profile.html"><i class="list-icon material-icons">face</i> My Profile</a>
                    </li>
                    <li><a href="app-inbox.html"><i class="list-icon material-icons">mail_outline</i> Inbox</a>
                    </li>
                    <li><a href="page-lock-screen.html"><i class="list-icon material-icons">settings</i> Lock Screen</a>
                    </li>
                    <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">network_check</i> <span class="hide-menu">Dashboard <span class="badge badge-border badge-border-inverted bg-primary pull-right">0</span></span></a>
                  
                </li>
                 <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><span class="color-color-scheme"><i class="list-icon material-icons">mail_outline</i> <span class="hide-menu">Photography</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="app-calender.html">Pending</a>
                        </li>
                        <li><a href="app-chat.html">done</a>
                        </li>
                       
                    </ul>
                </li>
                 <li class="menu-item-has-children active"><a href="javascript:void(0);" class="ripple"><span class="hide-menu"><i class="list-icon material-icons">add_shopping_cart</i> <span class="hide-menu">SKU</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="{{ url('/Product') }}">Add Sku</a>
                        </li>
                        <li><a href="{{ url('/ProductList') }}">List Sku</a>
                        </li>
                       
                    </ul>
                </li>
               
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i> <span class="hide-menu">PSD</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="tables-basic.html">Pending</a>
                        </li>
                        <li><a href="tables-data-table.html">Done</a>
                        </li>
                      
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">lightbulb_outline</i> <span class="hide-menu">Editing <span class="badge badge-border badge-border-inverted bg-primary pull-right">9</span></span></a>
                    <ul
                    class="list-unstyled sub-menu">
                        <li><a href="ui-typography.html">Pending</a>
                        </li>
                        <li><a href="ui-buttons.html">Done</a>
                        </li>
                        
                        </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">developer_board</i> <span class="hide-menu">JPG</span></a>
                    <ul class="list-unstyled sub-menu">
                      <li><a href="ui-typography.html">Pending</a>
                        </li>
                        <li><a href="ui-buttons.html">Done</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">Model Image</span></a>
                    <ul class="list-unstyled sub-menu">
                                           <li><a href="ui-typography.html">Pending</a>
                        </li>
                        <li><a href="ui-buttons.html">Done</a>
                        </li>
                    </ul>
                </li>
                 <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">Broadcasting</span></a>
                    <ul class="list-unstyled sub-menu">
                                           <li><a href="ui-typography.html">Pending</a>
                        </li>
                        <li><a href="ui-buttons.html">Done</a>
                        </li>
                    </ul>
                </li>
				  <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">PDF Making</span></a>
                    <ul class="list-unstyled sub-menu">
                                           <li><a href="ui-typography.html">With price</a>
                        </li>
                        <li><a href="ui-buttons.html">Without price</a>
                        </li>
                    </ul>
                </li>
				  <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">Category</span></a>
                    <ul class="list-unstyled sub-menu">
                                           <li><a href="ui-typography.html">List</a>
                        </li>
                       
                    </ul>
                </li>
				  <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">Instagram</span></a>
                    <ul class="list-unstyled sub-menu">
                                           <li><a href="ui-typography.html">photoshoot</a>
                        </li>
                        <li><a href="ui-buttons.html">Upload</a>
                        </li>
                    </ul>
                </li>
                <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> <span class="hide-menu">Log Out</span></a>
                </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
     
  
	 @yield('content')
    
	
	</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	  <footer class="footer text-center clearfix">2017 © Oscar Admin brought to you by UnifatoThemes</footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="{{ asset('css/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/popper.js/1.12.2/umd/popper.min.js') }}"></script>
    <script src="{{ asset('css/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/metisMenu/2.7.0/metisMenu.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/Chart.js/2.4.0/Chart.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('css/vendors/charts/utils.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('css/vendors/charts/excanvas.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/mithril/1.1.1/mithril.js') }}"></script>
    <script src="{{ asset('css/vendors/theme-widgets/widgets.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/moment.js/2.18.1/moment.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/underscore.js/1.8.3/underscore-min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/clndr/1.4.7/clndr.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/morris.js/0.5.1/morris.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/raphael/2.2.7/raphael.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/slick-carousel/1.6.0/slick.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
     <script src="{{ asset('css/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('css/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js') }}"></script>
</body>
</html>
