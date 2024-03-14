@extends('layouts.app')

@section('content')
    <div class="add">
        <h2>Addition</h2>



        <form action="{{route('additionNumbbers')}}" method="POST" >
        @csrf
            <table>
                <tr>
                    <td>First number</td>
                    <td><input type="number" name="a" required></td>
                </tr>

                <tr>
                    <td>Second number</td>
                <td><input type="number" name="b" required></td>
                </tr>

                <tr>
                    <td></td>
                     <td><button type="submit">Get Answer</button></td>
                </tr>

            </table>
        </form>
    </div>
@endsection
