<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="container">
        <h1 class="display-4 text-center" style="font-size: 3.0rem">{{ __('lang.welcome', ['Name' => 'Toni'])}}</h1>
        <h3 class="display-4 text-center" style="font-size: 2.0rem">{{ __('lang.title') }}</h3>
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __("Let's learn Laravel Localization")}}</h4>
        <br><br>   
        <h4 class="display-4 text-center" style="font-size: 1.5rem">yes we can{{ __("Pluralization Rules")}}</h4>
        <h5 class="display-4 text-center" style="font-size: 1.0rem"><b>Two options: </b><?php echo trans_choice('lang.languages', 2)?></h6>
        <h5 class="display-4 text-center" style="font-size: 1.0rem"><b>Ranges: </b><?php echo trans_choice('lang.languagesRange', 5)?></h6>
        <h5 class="display-4 text-center" style="font-size: 1.0rem"><b>Count Placeholder: </b><?php echo trans_choice('lang.count', 5)?></h6>
    </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>


