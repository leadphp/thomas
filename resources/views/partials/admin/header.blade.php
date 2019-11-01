<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="icon" href="{{ asset('public/images/front/home/favicon.png') }}" type="image/x-icon">
        
        <!-- bootstrap 3.0.2 -->
        <link href="{{ asset('public/css/admin/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!-- font Awesome -->
        <link href="{{ asset('public/css/admin/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{ asset('public/css/admin/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Morris chart -->
        <link href="{{ asset('public/css/admin/morris.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- jvectormap -->
        <link href="{{ asset('public/css/admin/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- fullCalendar -->
        <link href="{{ asset('public/css/admin/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Daterange picker -->
        <link href="{{ asset('public/css/admin/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        
        <link href="{{ asset('public/css/admin/cstm-style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/admin/sol.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- <link href="{{ asset('css/admin/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" /> -->
        
        <!-- Theme style -->
        <link href="{{ asset('public/css/admin/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


     
        
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a  class="logo">
            <img src="{{ asset('public/images/admin/logo.png') }}"  alt="User Image" />

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
               
               
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Tactile <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                               

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>