<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<title>SAPP Data</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<link href="{{ URL::asset('css/simple-sidebar.css')  }}" rel="stylesheet">

    <style>
        .errors{ color: red; font-weight: 200;}
    </style>

</head>
<body>


	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        SAPP Data Admin
                    </a>
                </li>
                <li>
                    <a href="/admin">Dashboard</a>
                </li>
                @if (Auth::user()->su > 0)
                <li>
                    <a href="/admin/users">Admins</a>
                    <ul id="nav-users" class="@if ( ! isset($users) ) {{ 'hide' }} @endif">
                    	<li><a href="/admin/users">All Users</a></li>
                    	<li><a href="/admin/users/create">Create User</a></li>
                    </ul>
                </li>
                @endif
                <li>
                    <a href="/admin/activists">Activists</a>
                    <ul id="nav-activists" class="@if ( ! isset($activists) ) {{ 'hide' }} @endif">
                    	<li><a href="/admin/activists">All Activists</a></li>
                    	<li><a href="/admin/activists/create">Create Activist</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/cases">Cases</a>
                    <ul id="nav-cases" class="@if ( ! isset($cases) ) {{ 'hide' }} @endif">
                        <li><a href="/admin/cases">All Cases</a></li>
                        <li><a href="/admin/cases/create">Create Case</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/translations">Translations</a>
                    <ul id="nav-translations" class="@if ( ! isset($translations) ) {{ 'hide' }} @endif">
                    	<li><a href="/admin/translations">All Translations</a></li>
                    	<li><a href="/admin/translations/create">Create Translation</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/transliterates">Transliterates</a>
                    <ul id="nav-transliterates" class="hide">
                    	<li><a href="/admin/transliterates">All Transliterates</a></li>
                    	<li><a href="/admin/transliterates/create">Create Transliterate</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')

                        <br /><br /><br />
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
	


	@yield('footer')

	<!-- Latest compiled and minified JavaScript -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    @yield('footer-scripts')

	<!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function(){

        $('.sidebar-nav li a').on("click", function(){

            if ( $(this).next().hasClass('hide') ){

                 $(this).next().hide().removeClass('hide').fadeIn(200)

            }else{

                $(this).next().fadeOut(200).addClass('hide')

            }

        })

    })
    </script>

    

</body>
</html>