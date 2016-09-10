@extends('layouts.app')
@section('content')


        <div class = 'container'>
            <h1>Show Product</h1>
            <form method = 'get' action = '{{url("product")}}'>
                <button class = 'btn blue'>Product Index</button>
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
                        <td>{{$product->name}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>price : </i></b>
                        </td>
                        <td>{{$product->price}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>quantity : </i></b>
                        </td>
                        <td>{{$product->quantity}}</td>
                    </tr>




                        <tr>
                        <td>
                            <b><i>name : </i><b>
                        </td>
                        <td>{{$product->category->name}}</td>
                        </tr>

                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$product->category->created_at}}</td>
                        </tr>

                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$product->category->updated_at}}</td>
                        </tr>



                </tbody>
            </table>
        </div>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
@endsection
