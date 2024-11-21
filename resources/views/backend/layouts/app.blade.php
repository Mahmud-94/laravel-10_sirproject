<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Kenny I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	
	@yield('css');
</head>

<body>
	
    <div class="wrapper">
			<!-- Top Menu Items -->

			@if (Auth()->guard('admin')->check())
			@include ('backend.layouts.topmenu')

			@elseif(Auth()->guard('doctor')->check())
			@include ('backend.layouts.doctor_topmenu')
			
			@endif


           
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			@if (Auth()->guard('admin')->check())
			@include ('backend.layouts.left_sidebar')

			@elseif(Auth()->guard('doctor')->check())
			@include ('backend.layouts.left_sidebar')
			
			@endif
			
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Menu -->
			@include ('backend.layouts.right_sidebar');
			<!-- /Right Sidebar Menu -->
			<div class="page-wrapper">
        <!-- Main Content -->
		
		@yield('content');
        <!-- /Main Content -->
			</div>

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    
	@yield('js')
</body>
</html>