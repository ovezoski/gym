@extends('layouts.master')

@section('content')

    <form action="/bodybuilder/" method="POST" class='jumbotron w-75 mt-5 wh'  style="margin: auto">
    
 @csrf

        <div class="form-group">
          <label for="name">Name </label>
             <input type="text" class='form-control' name="name" placeholder='Name'>
         
        </div>

        <div class="form-group">
          <label for="nickname">Nickname</label>
                <input type="text" class='form-control' name="nickname" placeholder='Nickname'>
            
        </div>
        
        <input type="submit" class='btn btn-block lg' value="Create">

    </form>

@include('layouts.errors')

@endsection