@extends('layouts.app')




@section('content')
{{-- <div class="container"> --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{-- <div class="panel panel-default"> --}}
                <div class="panel-heading"><h1 style="color:#8C001A;"><b style="color:black;">{{auth()->User()->name}}</b> You are Welcome!</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="color:black">Successfully Logged in!</p>
                </div>
            </div>
            <div class="container" id="div">
                <table style="border:0px;">
                <tr>
                <td style="padding:12px;"><form method="post" action="{{URL::to('workshop/create')}}">
                    {{csrf_field()}}
                    <input type="submit" value="Create Workshop" style="color: black">
                </form></td>
                
                <td style="padding:12px;">
                <form method="post" action="{{URL::to('workshop/login')}}">
                    {{ csrf_field()}}
                    <input type="submit" value="Enter a workshop" style="color: black">
                </form></td>
                 </tr>
                </table>
            {{-- </div> --}}
        </div>
    </div>

{{-- </div> --}}
@endsection

<style>
    #div{
        padding-left:5%;
        
    }
    
</style>