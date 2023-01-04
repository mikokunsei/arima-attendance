<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $guarded =  [];
    
    public function detail() {

        return $this->hasMany(AttendenceDetail::class);
    
    }

}
