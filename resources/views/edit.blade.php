<div class="container">
@extends('layouts.app')

@section('content')

<h1 class="title"> edit task</h1>

@if (count($errors))
<div>
	@foreach ($errors->all() as $error)
	<p class="alert alert-danger">{{$error}}</p>
	@endforeach
</div>
@endif
  

<form action="http://localhost/blog/public/edit" method="post">
   
     <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

    <input type="text" name="editedtask" value= "{{ $todos->todo_name}}">

    <input type="hidden" name="id" value= "{{ $todos->id}}">
    <br />
    <input type="submit"  name="edit">
    
</form>

@endsection
</div>