<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tasks extends Controller
{
    public function getAll(){
     
     $tasks=\App\Todo::all();
   

     return response()->json($tasks,200);

    }
    public function Del($id){

        $tod=\App\Todo::find($id);

         $tod->delete();

       return response()->json(["true deleted item"],200);
    }
     public function edit(Request $Request,$id){
     
       $todo= new \App\Todo;
        $todo->exists = true;
        $todo->id=$id;
        $todo->todo_name=$Request['editedtask'];
        $todo->save();
   

     return response()->json(["true update item"],200);

    }
     public function getitem($id){
     
     $tasks=\App\Todo::find($id);
   

     return response()->json($tasks,200);

    }

}
