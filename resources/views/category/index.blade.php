@extends('layouts.app')
@section('content')


        <div class = 'container'>
            <h1>Categories</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = '{{url("category")}}/create'>
                <button class = 'btn red' type = 'submit'>Create New Category</button>
            </form>
                        </div>
            <table>
                <thead>

                    <th>Name</th>

                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($categories as $Category)

                    <tr>

                        <td>{{$Category->name}}</td>


                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/category/{{$Category->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/category/{{$Category->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/category/{{$Category->id}}'><i class = 'material-icons'>info</i></a>
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
