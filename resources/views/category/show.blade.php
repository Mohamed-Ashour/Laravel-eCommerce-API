@extends('layouts.app')
@section('content')


        <div class = 'container'>
            <h1>Show Category</h1>
            <form method = 'get' action = '{{url("category")}}'>
                <button class = 'btn blue'>Category Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>


                    <tr>
                        <td>
                            <b><i>name : </i></b>
                        </td>
                        <td>{{$category->name}}</td>
                    </tr>



                </tbody>
            </table>
        </div>

    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
@endsection
