@extends('layouts.master')

@section('content')

<form action="/gym/" method="POST">

@csrf

<input type="text" name="name">

<button type="submit"> Create Gym </button>



</form>

@endsection