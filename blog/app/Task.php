<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query){

        return $query->where('complete',0);
    }

    public function scopeComplete($query){

        return $query->where('complete', 1);   
    }
    
    public function isComplete(){
        
        if($this->complete == 1)
            return true;
        else
            return false;
            
    }
}
