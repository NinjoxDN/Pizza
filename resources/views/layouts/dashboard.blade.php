<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}"/>
        
        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="sidebar">
            <header>
                <div class="image-text">

                    <div class="text logo-text">
                        <span class="name">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                        <span class="profession">{{ Auth::user()->type }}</span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="menu">

                    <ul class="menu-links">

                        @yield('nav')

                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="{{ route('logout') }}" title="Déconnexion">
                            <i class='bx bx-log-out icon' ></i>
                            <span class="text nav-text">Déconnexion</span>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                    
                </div>
            </div>

        </nav>
        
        <section class="home">
            @yield('content')
        </section>

        @yield('imports')
    </body>
</html>
