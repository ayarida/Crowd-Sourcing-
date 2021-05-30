@extends('layouts.app')
@section('content')

    <div class="container">
        <div>
            <div class="container">
                <div style="text-align: center" class="row">
                    <div style="font-size: 50px" class="col-md-12"><b style="color:#8C001A">Title: {{$data->title}}</b></div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div style="text-align:center;margin-top:50px" class="row">
                    <div style="font-size: 40px;color:black" class="col-md-12">Question: {{$data->question}}</div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{URL::to('/workshop/sendIdea')}}">
            {{ csrf_field() }}
            <div style="margin-top: 50px;text-align:center" class="container">
                <div>
                    <textarea name="idea" style=" resize: none; width:740px; height: 280px"></textarea>
                </div>
                <div>
                    <button  type="submit">Submit</button>
                </div>
                <input type="hidden" name='key' value="{{$data->key}}"/>
            </div>
        </form>
    </div>
@endsection