@extends('layouts.app')

@section('content')
    <div class="add">
        <h2>Square of Number</h2>

        <form action="{{route('sqrtOfNumbbers')}}" method="POST">
        @csrf
            <table>
                <tr>
                    <td>Enter number</td>
                    <td><input type="number" name="a" required></td>
                </tr>



                <tr>
                    <td></td>
                    <td><button type="submit">Get Answer</button></td>
                </tr>

            </table>
        </form>
    </div>
@endsection
