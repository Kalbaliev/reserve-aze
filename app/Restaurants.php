<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected  $table='restaurants';
    protected $fillable=['name','phone','title','about','address','slug'];
    protected $guarded=array();
}
