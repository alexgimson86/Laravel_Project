<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function isComplete() {
        
        if($this->id % 2 == 0 )
            return true;
        else
            return false;

    }
}
