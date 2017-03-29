<div class="container">
@extends('layouts.app')

@section('content')
    <h1 class="title m-b-md">TASKS</h1>

 <div>
     <table class="table">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>time</th>
                <th>edit</th>
                <th>delete</th>
            </thead>
             @foreach ($tasks as $key => $task)

            <tbody>
                <tr>
                     <td>{{$task->id}} </td>
                     <td>{{$task->todo_name}} </td>
                     <td>{{$task->created_at}} </td>
                     <th><a href="http://localhost/blog/public/edit/{{$task->id}}">edit</a></th>
                     <th><a href="http://localhost/blog/public/delete/{{$task->id}}">delete</a></th>

                </tr>
            </tbody>
            @endforeach

     </table>             
    

 </div>
 </div>



@endsection