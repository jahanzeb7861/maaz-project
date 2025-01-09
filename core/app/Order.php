<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id','name','email','phone','location','brand_id','category_id','status'];

}
