<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}">

        <title>@yield('title')</title>
    </head>
    <body>

        <main class="main">

            

            <div class="container">
                <section class="wrapper">

                    <div class="heading">
                        <h1 class="text text-large">Page de connexion</h1>
                        <p class="text text-normal">Pas de compte? <span><a href="/register" class="text text-links">Créer un compte</a></span></p>
                    </div>

                    @if ($errors->any())
                        <div class="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="success">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif

                    @yield('content')

                </section>
            </div>
        </main>

    </body>
</html>