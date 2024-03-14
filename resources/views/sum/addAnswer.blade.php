@extends('layouts.app')

@section('content')
    <p><a href="{{route('addition')}}">Back</a></p>

    <div class="add">
        <h2>The sum of <mark>{{$a}}</mark> and <mark>{{$b}}</mark> is: <p>{{$sum}}</p></h2>

    </div>

@endsection
