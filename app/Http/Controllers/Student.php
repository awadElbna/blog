<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{


	// get all data in student table >>>>>>
    public function getAll(){
     
     $stud=\App\Student::all();
   

     return response()->json($stud,200);

    }

    // display one student

    public function getitem($id){
     
    $stud=\App\Student::find($id);
   

     return response()->json($stud,200);

    }

    // add new student to database 
     public function addstud(Request $Request){

        $student= new \App\Student;

        $student->id=$Request['id'];
        $student->name=$Request['name'];
        $student->phone=$Request['phone'];
        $student->save();
       return response()->json($student,200);

    }

    // delete student from database

    public function Del($id){

        $student=\App\Student::find($id);

         $student->delete();

         return response()->json(["msg"=> "student $student->name deleted successfuly"],200);
    }
    


      public function Edit($id){

        $stud=\App\Student::find($id);
   

        return response()->json($stud,200);

    }


    public function  edited(Request $Request){

        $stud=\App\Student::find($Request['id']);

        $stud->exists = true;
        $stud->phone=$Request['phone'];
        $stud->name=$Request['name'];
        
        $stud->save();
      return response()->json(["msg"=> "student $stud->name updated  successfuly"],200);
        
    }

}
