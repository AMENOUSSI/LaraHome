@extends('layouts.app')

@section('content')
    <p><a href="{{route('sqrt')}}">Back</a></p>




    <div class="add">
        <h2>The square root of the <mark>{{$number}}</mark> is: <p>{{$squareRoot}}</p></h2>

    </div>

@endsection
