<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel 9 User Roles and Permissions') }}</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors_css.css') }}">
	<!-- Style-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/skin_color.css') }}">
	
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />   -->
     
  </head>
  <body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
    <div class="wrapper">
        <div id="loader"></div>
    <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent text-white" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="{{ asset('assets/images/logo-letscms.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{ asset('assets/images/logo-dark-text.png')}}" alt="logo"></span>
		  </div>
		</a>	
	</div> 
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			
		</ul> 
	  </div>

      </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  	<div class="multinav-scroll" style="height: 100%;">	
			  <ul class="sidebar-menu" data-widget="tree">
				<li><a class="nav-link" href="{{ route('home') }}"><i class="fa fa-window-maximize" aria-hidden="true"></i>Dashboard</a></li>
			  	<li class="treeview"><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> Manage User</a>
					<ul class="treeview-menu">
						<li><a class="nav-link" href="{{ route('users.create') }}">Create User</a></li>
						<li><a class="nav-link" href="{{ route('users.index') }}">List User</a></li>
					</ul>
				</li>
				@can('role-edit')
				<li  class="treeview"><a class="nav-link" href="{{ route('roles.index') }}"><i class="fa fa-users" aria-hidden="true"></i>Manage Role</a>
					<ul class="treeview-menu">
				  		<li><a class="nav-link" href="{{ route('roles.create') }}">Create Role</a></li>
						  <li><a class="nav-link" href="{{ route('roles.index') }}">List Role</a></li>
				  	</ul>	
				</li>
				@endcan
				<li  class="treeview"><a class="nav-link" href="{{ route('permissions.index') }}"><i class="fa fa-user-secret" aria-hidden="true"></i>Manage Permission</a>
					<ul class="treeview-menu">
				  		<li><a class="nav-link" href="{{ route('permissions.create') }}">Create Permissions</a></li>
						  <li><a class="nav-link" href="{{ route('permissions.index') }}">List Permissions</a></li>
				  	</ul>	
				</li>
				<li  class="treeview"><a class="nav-link" href="{{ route('posts.index') }}"><i class="fa fa-address-card" aria-hidden="true"></i>Manage Post</a>
					<ul class="treeview-menu">
				  		<li><a class="nav-link" href="{{ route('posts.create') }}">Create Post</a></li>
						  <li><a class="nav-link" href="{{ route('posts.index') }}">List Post</a></li>
				  	</ul>	
				</li>
			  </ul>
        	</div>
		</div>
		<div class="sidebar-footer">
			<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
			<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
			<a href="{{ route('logout') }}" class="link" data-bs-toggle="tooltip" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
		</div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<!-- <div class="box bg-primary-light">
						<div class="box-body d-flex px-0">
							<div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md" style="background-position: right bottom; background-size: auto 100%; background-image: url(../images/svg-icon/color-svg/custom-1.svg)">
								<div class="row">
									<div class="col-12 col-xl-7">
										<h2>Welcome back, <strong>{{ Auth::user()->name }}!</strong></h2>
										<p class="text-dark my-10 fs-16"></p>
									</div>
									<div class="col-12 col-xl-5"></div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- Main Content -->
					<div class="container mt-5 ">
						@yield('content')
					</div>
                    </div>				
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
	  &copy; 2021 <a href="https://www.letscms.com/">Letscms Pvt Ltd</a>. All Rights Reserved.
  </footer>

    </div>

    <!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>
	<script src="{{ asset('assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{ asset('assets/assets/icons/feather-icons/feather.min.js')}}"></script>

	<script src="{{ asset('assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	<script src="{{ asset('assets/assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{ asset('assets/assets/vendor_components/fullcalendar/fullcalendar.js')}}"></script>
	
	<!-- EduAdmin App -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	<script src="{{ asset('assets/js/pages/dashboard.js')}}"></script>
	<script src="{{ asset('assets/js/pages/calendar.js')}}"></script>

    
  </body>