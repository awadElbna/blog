<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    public function users(){
    	//code
    	return $this->belongesTo(User::class);
    }
}
