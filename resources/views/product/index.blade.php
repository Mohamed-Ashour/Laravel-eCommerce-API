@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <h1>Products</h1>
            <div class="row">
                <form class = 'col s3' method = 'get' action = '{{url("product")}}/create'>
                    <button class = 'btn red' type = 'submit'>Create New Product</button>
                </form>
            </div>
            <table>
                <thead>

                    <th>Name</th>

                    <th>Price</th>

                    <th>Quantity</th>


                    <th>Category name</th>

                    <th>Created at</th>

                    <th>Updated at</th>



                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($products as $Product)

                    <tr>

                        <td>{{$Product->name}}</td>

                        <td>{{$Product->price}}</td>

                        <td>{{$Product->quantity}}</td>




                        <td>{{$Product->category->name}}</td>

                        <td>{{$Product->category->created_at}}</td>

                        <td>{{$Product->category->updated_at}}</td>



                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/product/{{$Product->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/product/{{$Product->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/product/{{$Product->id}}'><i class = 'material-icons'>info</i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="modal1" class="modal">
            <div class = "row AjaxisModal">
            </div>
        </div>
@endsection
