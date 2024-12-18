<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointLog extends Model
{
    protected $guarded = ['id'];

    public function userTo(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function userFrom(){
    	return $this->belongsTo(User::class,'who');
    }
}
