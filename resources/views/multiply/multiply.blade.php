@extends('layouts.app')

@section('content')
    <div class="add">
        <h2>Multiplcation</h2>


    <form action="{{route('multiplyNumbbers')}}" method="POST">
    @csrf
        <table>
            <tr>
                <td>First number</td>
                <td><input type="number" name="a" required></td>
            </tr>

            <tr>
                <td>Second number</td>
            <td><input type="number" name="b"  required></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit">Get Answer</button></td>
            </tr>

        </table>
    </form>
    </div>
@endsection
