@extends('layouts.app')
@section('content')


        <div class = 'container'>
            <h1>Create Category</h1>
            <form method = 'get' action = '{{url("category")}}'>
                <button class = 'btn blue'>Category Index</button>
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
            <form method = 'POST' action = '{{url("category")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="input-field col s6">
                    <input id="name" name = "name" type="text" class="validate">
                    <label for="name">name</label>
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
