<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendenceDetail extends Model
{
    protected $guarded = [];

    public function attendance() {
        return $this->belongsTo(Attendence::class);
    }
}
