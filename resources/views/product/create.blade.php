@extends('layouts.app')
@section('content')


        <div class = 'container'>
            <h1>Create Product</h1>
            <form method = 'get' action = '{{url("product")}}'>
                <button class = 'btn blue'>Product Index</button>
            </form>
            <br>
            @if (count($errors) > 0)
        		<div class="alert alert-danger">
        			<strong>Whoops!</strong> There were some problems with your input.<br><br>
        			<ul>
        				@foreach ($errors->all() as $error)
        					<li>{{ $error }}</li>
        				@endforeach
        			</ul>
        		</div>
        	@endif
            <form method = 'POST' action = '{{url("product")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="input-field col s6">
                    <input id="name" name = "name" type="text" class="validate">
                    <label for="name">name</label>
                </div>

                <div class="input-field col s6">
                    <input id="price" name = "price" type="text" class="validate">
                    <label for="price">price</label>
                </div>

                <div class="input-field col s6">
                    <input id="quantity" name = "quantity" type="number" min="0" class="validate">
                    <label for="quantity">quantity</label>
                </div>


                <div class="input-field col s12">
                    <select name = 'category_id'>
                        @foreach($categories as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <label>Category</label>
                </div>

                <button class = 'btn red' type ='submit'>Create</button>
            </form>
        </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
@endsection
