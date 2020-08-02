<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FanurGram</title>

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
    <div><div><div class="container">
                

        <div style="position: relative;
top: -30px;" class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right links">
                <a href="{{ url('/') }}"><img style="position: relative;
left: -1000px; top: 25px" src="/svg/lapzGramLogo.svg" alt="logo"></a>
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
                <strong>FanurGram</strong>
                </div>

                <img class="fade" style=" margin-bottom: 50px;" class="ani-a" src="https://images.unsplash.com/photo-1508830524289-0adcbe822b40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80" alt="Developer screen.">
<div></div> 
            <div class="d-flex">
              <div class="pr-5" style = "font-size: 20px;"> <strong>25</strong> posts </div>
              <div class="pr-5" style = "font-size: 20px;"> <strong>30K</strong> followers</div>
              <div class="pr-5" style = "font-size: 20px;"> <strong>15</strong> following</div>  
            </div> 

            <div><p style = "font-size: 20px;"><strong>If you enjoy spending your free time increasing your knowledge of Web Development and building fun and challenging projects, join us!</strong></p></div>
            
        </div>
    </div></div>
                <div class="links">
                    <a href="https:fanurgram.herokuapp.com/" target="_blank">Home</a>
                    <a href="https://fowsinur.com/#Portfolio" target="_blank" >Portfolio</a>
                    <a href="https://fowsinur.com/#About" target="_blank">About</a>
                    <a href="https://fowsinur.com/#Contact" target="_blank">Contact</a>
                    <a href="https://github.com/FNuri" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
