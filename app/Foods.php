<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected  $table='foods';
    protected $fillable=['food_name','food_price','menu_id'];
    protected $guarded=array();

}
