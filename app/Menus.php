<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected  $table='menus';
    protected $fillable=['menu_type','menu_name','restaurant_id'];
    protected $guarded=array();



    public function foodFunc(){

        return $this->hasMany('App\Foods','menu_id','id'); //Sehvlik vardi duzeltdim
    }
}
