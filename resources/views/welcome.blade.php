<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
            <link href="{{url('/css/mystyle.css')}}" rel="stylesheet" type="text/css">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
            <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
            <script src="{{url('/js/vocal.js')}}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
              /*  height: 100vh;*/
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

            a {
                
                padding: 0 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .blockBaground{
                min-width: 300px;
                min-height: 300px;
                margin:10px;
                padding:4px;
                border: 1px solid #ededed;
                width: 18%;

            }
            .blockBaground:hover{
                background-color: #ededed;
            }
            .flexContainer{
                display:flex;
                flex-wrap: wrap;
            }
            .fontTitle{
                font-size:24px;
                font-weight: bold;
            }
            .iSpray{color:#82ccdd;}
            .iTomato{color:#eb2f06;}
            .iDarkSapphire{color:#0c2461;}
            .iCarrot{color:#e58e26;}
            .iParadiseGreen{color:#b8e994;}
            @media screen and (min-width: 200px) and (max-width: 540px) {
               .blockBaground{
                    min-width: 300px;
                    min-height: 300px;
                    margin:10px;
                    padding:4px;
                    border: 1px solid #ededed;
                    width: 100%;
                }
                
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>    

               
        @extends('home')
  
    </body>
</html>
