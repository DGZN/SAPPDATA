<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>SAPP Data</title>

        <meta name="description" content="-- Description Here --">
        <meta name="author" content="DGZN">
        <!-- <meta name="robots" content="--FIX THIS--"> -->

        <meta name="env" content="{{ App::environment() }}">
        <meta name="token" content="{{ Session::token() }}">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Datatables CSS -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
    <body>

    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!-- 'boxed' class for a boxed layout -->
    <div id="page-container"k>
        <!-- Site Header -->
        <header>
            <div class="container">
                <!-- Site Logo -->
                <a href="index.php" class="site-logo">
                    <i class="gi gi-flash"></i> <strong>SAPP</strong>Data
                </a>
                <!-- Site Logo -->

                <!-- Site Navigation -->
                <nav>
                <!-- Menu Toggle -->
                <!-- Toggles menu on small screens -->
                <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- END Menu Toggle -->

                <!-- Main Menu -->
                <ul class="site-nav">
                    <!-- Toggles menu on small screens -->
                    <li class="visible-xs visible-sm">
                        <a href="javascript:void(0)" class="site-menu-toggle text-center">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                    <!-- END Menu Togglxe -->

                    <li {{ (Request::is('*/') ? 'class="active"' : '') }}>
                        
                        <a href="/">Home</a>

                    </li>

                    <li {{ (Request::is('*reports') ? 'class="active"' : '') }}>
                        
                        <a href="/reports">Reports</a>

                    </li>

                    <li {{ (Request::is('*transliterates') ? 'class="active"' : '') }}>
                        
                        <a href="/view-transliterates">Transliterates</a>

                    </li>

                    <li {{ (Request::is('*translations') ? 'class="active"' : '') }}>
                        
                        <a href="view-translations">Translations</a>

                    </li>

                    <li {{ (Request::is('*faqs') ? 'class="active"' : '') }}>
                        
                        <a href="/faqs">FAQs</a>

                    </li>

                    <li {{ (Request::is('*contact-us') ? 'class="active"' : '') }}>
                        
                        <a href="/contact-us">Contact Us</a>

                    </li>
                    
                </ul>
                <!-- END Main Menu -->

            </nav>
                <!-- END Site Navigation -->
            </div>
        </header>
        <!-- END Site Header -->

        @yield('content')

        <!-- Footer -->
        <footer class="site-footer site-section">
            <div class="container">
                <!-- Footer Links -->
                <div class="row">
                    <!-- <div class="col-sm-6 col-md-3">
                        <h4 class="footer-heading">About Us</h4>
                        <ul class="footer-nav list-inline">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="col-sm-6 col-md-3">
                        <h4 class="footer-heading">Legal</h4>
                        <ul class="footer-nav list-inline">
                            <li><a href="javascript:void(0)">Licensing</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="col-sm-6 col-md-3">
                        <h4 class="footer-heading">Follow Us</h4>
                        <ul class="footer-nav footer-nav-social list-inline">
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- z -->
                </div>
                <!-- END Footer Links -->
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

	<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Datatables JS -->
    <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>

    <script src="js/app.js"></script>

     @yield('footer-scripts')

    </body>
</html>
