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
			  <span class="light-logo"><img src="{{ asset('assets/images/logo-light-text.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{ asset('assets/images/logo-dark-text.png')}}" alt="logo"></span>
		  </div>
		</a>	
	</div> 
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
					<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
					<i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
			    </a>
			</li>
		</ul> 
	  </div>

      </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="header">Dashboard & Apps</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
					<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
					<li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
					<li><a href="index4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 4</a></li>
					<li><a href="index5.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 5</a></li>
					<li><a href="index6.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 6</a></li>
				  </ul>
				</li>
              </ul>
              </div>
		</div>
    </section>
    <div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="box bg-primary-light">
						<div class="box-body d-flex px-0">
							<div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md" style="background-position: right bottom; background-size: auto 100%; background-image: url(../images/svg-icon/color-svg/custom-1.svg)">
								<div class="row">
									<div class="col-12 col-xl-7">
										<h2>Welcome back, <strong>John!</strong></h2>

										<p class="text-dark my-10 fs-16">
											Your students complated <strong class="text-warning">80%</strong> of the tasks.
										</p>
										<p class="text-dark my-10 fs-16">
											Progress is <strong class="text-warning">very good!</strong>
										</p>
									</div>
									<div class="col-12 col-xl-5"></div>
								</div>
							</div>
						</div>
					</div>
                    </div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-body">							
							<div class="box no-shadow mb-0">
								<div class="box-body px-0 pt-0">
									<div id="calendar" class="dask evt-cal min-h-400"></div>
								</div>
							</div>
					
							<div class="box no-shadow mb-0">
								<div class="box-header no-border">
									<h4 class="box-title">Lessons</h4>							
									<div class="box-controls pull-right d-md-flex d-none">
									  <a href="#">View All</a>
									</div>
								</div>
							</div>
							<div class="px-5">
								<div class="box bt-5 border-danger rounded">
									<div class="box-body">	
										<div class="flex-grow-1">	
											<div class="d-flex align-items-center pe-2 justify-content-between">							
												<h4 class="fw-500">
													Programming
												</h4>
												<div class="dropdown">
													<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
													<div class="dropdown-menu dropdown-menu-end">
													  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
													  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
													  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
													  <div class="dropdown-divider"></div>
													  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
													</div>
												</div>						
											</div>
											<p class="fs-16">
												Every Day 10am to 11am
											</p>
										</div>							
										<div class="d-flex align-items-center justify-content-between mt-10">
											<div class="d-flex">
												<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
													<img src="{{ asset('assets/images/avatar/avatar-1.png" class="h-50 align-self-end')}}" alt="">
												</a>
												<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
													<img src="{{ asset('assets/images/avatar/avatar-3.png" class="h-50 align-self-end')}}" alt="">
												</a>
												<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
													<img src="{{ asset('assets/images/avatar/avatar-4.png" class="h-50 align-self-end')}}" alt="">
												</a>
											</div>
											<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
										</div>
									</div>					
								</div>
								<div class="box bt-5 border-primary rounded">
									<div class="box-body">	
										<div class="flex-grow-1">	
											<div class="d-flex align-items-center pe-2 justify-content-between">							
												<h4 class="fw-500">
													Core Language
												</h4>
												<div class="dropdown">
													<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
													<div class="dropdown-menu dropdown-menu-end">
													  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
													  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
													  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
													  <div class="dropdown-divider"></div>
													  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
													</div>
												</div>						
											</div>
											<p class="fs-16">
												Every Day 12pm to 01pm
											</p>
										</div>							
										<div class="d-flex align-items-center justify-content-between mt-10">
											<div class="d-flex">
												<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
													<img src="{{ asset('assets/images/avatar/avatar-2.png" class="h-50 align-self-end')}}" alt="">
												</a>
												<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
													<img src="{{ asset('assets/images/avatar/avatar-5.png" class="h-50 align-self-end')}}" alt="">
												</a>
												<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
													<img src="{{ asset('assets/images/avatar/avatar-6.png" class="h-50 align-self-end')}}" alt="">
												</a>
											</div>
											<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
										</div>
									</div>					
								</div>
							</div>
					
							<div class="box no-shadow mb-0">
								<div class="box-header no-border">
									<h4 class="box-title">Lessons</h4>							
									<div class="box-controls pull-right d-md-flex d-none">
									  <a href="#">View All</a>
									</div>
								</div>
							</div>
							<div class="px-5">
								<div class="box mb-15">
									<div class="box-body">
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="me-15 bg-warning h-50 w-50 l-h-60 rounded text-center">
													<span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
												</div>
												<div class="d-flex flex-column fw-500">
													<a href="#" class="text-dark hover-primary mb-1 fs-16">Informatic Course</a>
													<span class="text-fade">Johen Doe, 19 April</span>
												</div>
											</div>
											<a href="#">
												<span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
											</a>
										</div>
									</div>
								</div>
								<div class="box mb-15">
									<div class="box-body">
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="me-15 bg-primary h-50 w-50 l-h-60 rounded text-center">
													<span class="icon-Mail fs-24"></span>
												</div>
												<div class="d-flex flex-column fw-500">
													<a href="#" class="text-dark hover-primary mb-1 fs-16">Live Drawing</a>
													<span class="text-fade">Micak Doe, 12 June</span>
												</div>
											</div>
											<a href="#">
												<span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
											</a>
										</div>
									</div>
								</div>
								<div class="box mb-0">
									<div class="box-body">
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="me-15 bg-danger h-50 w-50 l-h-60 rounded text-center">
													<span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
												</div>
												<div class="d-flex flex-column fw-500">
													<a href="#" class="text-dark hover-primary mb-1 fs-16">Contemporary Art</a>
													<span class="text-fade">Potar doe, 27 July</span>
												</div>
											</div>
											<a href="#">
												<span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
											</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
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