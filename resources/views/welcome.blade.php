<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP_PROJECT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                font-size: 12px;
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
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title" id="div" style="color:black;">
                    <div>
                    <b id="BC">C</b>ROWD
                    <br>
                    <b id="BS">S</b>OURCING 
                    </div>
                    {{-- <p style="color:black; font-size:14px"><b>Crowdsourcing is the practice of engaging a 'crowd' or group for a common goal — often innovation, problem solving, or efficiency.</b></p> --}}
                </div>

            
                    <div class="links">
                    <h5 style="color:black;font-size:20px;">Check our LinkedIn Accounts!</h5>
                    <a href="https://www.linkedin.com/in/aya-rida-279027183/"><b>Aya Rida</b></a>
                    <a href="https://www.linkedin.com/in/razane-yasien-63022a17a/">Razan Yassine</a>
                 
                    </div>
                
            </div>
        </div>
    </body>
</html>

<style> 
a:link{
    color: black;
}


a:hover{
    color:#E77471;
}

#BC,#BS{
    background-color:#E77471;
    padding-left: 20%;

}
#BC{
    padding-right:10%;
}
#BS{
    padding-right:11.35%;
}
</style>