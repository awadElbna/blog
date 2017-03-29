<div class="container">
@extends('layouts.app')

@section('content')
<h1 class="title m-b-md"> add new task</h1>
@if (count($errors))
<span>
	@foreach ($errors->all() as $error)
	<p class="alert alert-danger">{{$error}}</p>
	@endforeach
</span>
@endif

<form action="" method="post">
    {{ csrf_field() }}
    <input type="text" name="newtask">
    <input type="submit" name="new">
    
</form>

@endsection
</div>