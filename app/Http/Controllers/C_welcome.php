<?php

namespace App\Http\Controllers;
use  Illuminate\Http\Request;

class C_welcome extends controller {
    
    public function view(){
        
        $tasks=\App\Todo::all();
        
        return view('view',[ "tasks" =>$tasks]);
        
    }

    
    public function  newtask(){
       
    return view('new');
    
    }
    public function printtask(Request $Request){

     $this->validate(request(),[ 

       'newtask'=>'required |min:10',
    ]);

        $todo= new \App\Todo;
        $todo->todo_name=$Request['newtask'];
        $todo->save();
        return redirect('/view');
        
    }

    

    public function Del($id){

        $tod=\App\Todo::find($id);

         $tod->delete();

       return redirect('/view');
    }


    public function Edit($id){

        $todos=\App\Todo::find($id);
        return view('/edit',['todos'=>$todos]);

    }


    public function  edited(Request $Request){

        
     $this->validate(request(),[ 

       'editedtask'=>'required |min:10',
    ]);

        $todo= new \App\Todo;
        $todo->exists = true;
        $todo->id=$Request['id'];
        $todo->todo_name=$Request['editedtask'];
        
        $todo->save();
        return redirect('/view');
        
    }
}