<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel 9 User Roles and Permissions') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    .sidenav {
        /* border-right: 1px solid #333;
        background-color: #333;
        padding-left: 10px;
        margin-left: 12px;
        margin-right: 10px;  */
    }
    .navbar-brand{
        padding-bottom: 250px;
    }
</style>
</head>
<body>
<div class="wrapper" style="height:auto; min-height:100%;">
<div class="container-fliud ">
    <div class="row g-0">
        <div class="col-3" id="sidebar">
        <nav class="navbar bg-dark navbar-dark h-100">
        <div class="container-fluid  fixed-top">
            <!-- Links -->
            <ul class="navbar-nav">
            <li><a class="navbar-brand" href="#">
            <img src="img_avatar1.png" alt="Logo" style="width:40px;" class="rounded-pill">
            </a></li>
           
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li><a class="nav-link" href="{{ route('users.index') }}">Manage User</a></li>
                    <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>

                @endguest
                </ul>
        </div>
        </nav>
        </div>
        <!-- Main Content Right Area -->
        <div class="col-9" id="maincontent" >
            <!--Main Navigation-->
            <header>
            <nav class="navbar navbar-expand navbar-dark bg-success shadow-sm">
                <div class="container">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <!-- Authentication Links -->
                            @guest
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @else
                                
                                <div class="dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                                
                            @endguest
                        </ul>
                </div>
            </nav>
            </header>

            <!-- Main Content -->
            <div class="container mt-5 ">
                @yield('content')
            </div>


             <!-- Footer -->
                <footer class="bg-light text-center text-lg-start">
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2022 Copyright:
                        <a class="text-dark" href="https://www.letscms.com/">Letscms.com</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                
        </div>
    </div>
</div>
</div>
<script>
    // addEventListener('load', (event) => {});
    window.addEventListener('load',(event)=>{
        console.log(window.outerHeight);
        const leftheight=document.getElementById('sidebar');
        leftheight.style.minHeight=window.outerHeight+'px';
        const maincontent=document.getElementById('maincontent');
        maincontent.style.minHeight=window.outerHeight+'px';
        console.log(leftheight);
        // .style.height=window.outerHeight+'px';
    })
</script>
</body>
</html>
