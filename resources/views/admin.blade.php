<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Project Laravel</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <notification :unreads="{{auth()->user()->unreadNotifications}}" :userid="{{auth()->user()->id}}" ></notification>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<html>
<head>
</head>
<body>
    <h1 id="head" style="text-align: center;"><b style="color:black; #8C001A">Welcome </b><b style="color:black;font-size:50px;">AD</b><b style="color:#8C001A;font-size:50px;">MIN</b></h1>
    <br>
    <div>
        <div class="container"  style="text-align:center;" >
            <div class="row">
                <table id="table" style="border:3px solid;margin-left:auto;margin-right:auto;cellspacing=10">

                    @if(isset($waiting_users))
                        <tr><th>User_ID </th><th>Email</th></tr>
                        @foreach($waiting_users as $CA)
                            <form method="post" action="{{ URL::to('/admin/editUser') }}">
                                {{ csrf_field() }}

                            <tr>
                                <td>{{$CA->id }}</td>
                                <td>{{$CA->email }}<input type="hidden" name="user_id" value={{$CA->id}}/></<input></td>
                                
                                <td><button type="submit" class="btn btn-primary" name="press" value="1" style="background-color:#4B8B3B">
                                        Accept
                                    </button></td>
                                <td><button type="submit" class="btn btn-primary" name="press" value="0"  style="background-color:#FF0000">
                                       Reject
                                    </button></td>
                            </tr>
                            </form>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>


<div style="text-align:center;padding-top: 5%">
<form method="post" action="{{URL::to('/admin/approve')}}" >
    {{ csrf_field() }}
    @if($autoapprove==1)
    Auto Approve is Currently Enabled, to Disable it Press: <br>
    <input type="submit" name="approve" value="Disable AutoApprove" style="color: black" />
    @else
    Auto Approve is Currently Disabled, to Enable it Press: <br>
    <input type="submit" name="approve" value="Enable AutoApprove" style="color: black"/>
    @endif
</form>
</div>
</body>
</html>



<style>
#table td, #table th{
    border:1px solid black;
    padding: 8px;
}

th{
    font-style:bold;
    color:black;
}

td{
    color:black;
}


</style>