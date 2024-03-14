@extends('layouts.app')

@section('content')
    <p><a href="{{route('multiplication')}}">Back</a></p>

    <div class="add">
        <h2>The answer of the multiplication of <mark>{{$a}}</mark> and <mark>{{$b}}</mark> is: <p>{{$multi}}</p></h2>

    </div>

@endsection
