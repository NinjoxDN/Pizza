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
                        <h1 class="text text-large">Créer un compte</h1>
                        <p class="text text-normal">Déjà un compte? <span><a href="/login" class="text text-links">Se connecter</a></span></p>
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

                    @yield('content')

                </section>
            </div>
        </main>

    </body>
</html>