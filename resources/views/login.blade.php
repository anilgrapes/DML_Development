<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">


<!-- Mirrored from oscar.dharansh.in/default/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 12:18:53 GMT -->
<head>
    <script src="{{ asset('ajax/libs/pace/1.0.2/pace.min.js') }}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('css/assets/demo/favicon.png') }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- CSS -->
    <link href="{{ asset('css/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/mono-social-icons/monosocialiconsfont.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="{{ asset('css/ajax/libs/modernizr/2.8.3/modernizr.min.js') }}"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/demo/night.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <div class="navbar-header text-center">
                <a href="javascript:void(0);">
                    <img alt="" src="{{ asset('css/demo/logo-expand-dark.png') }}">
                </a>
            </div>
            <!-- /.navbar-header -->
            <form class="form-material" method="POST" action="{{ route('login') }}">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="example-email">Email</label>
					 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-12">
                                <button type="submit" class="btn btn-block btn-lg btn-color-scheme ripple">
                                    Login
                                </button>

                                
                            </div>
                        </div>
						
                <!-- /.form-group -->
            </form>
          
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('css/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/js/material-design.js') }}"></script>
</body>


<!-- Mirrored from oscar.dharansh.in/default/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 12:18:54 GMT -->
</html>