<?php

namespace App\Http\Controllers;

use App\Menus;
use App\Foods;
use Illuminate\Http\Request;

class FrontEnd extends Controller
{
public function  getOneRestaurant(){


    $menus= Menus::where('restaurant_id',1)->get();

        return view('frontend.restaurant-OnePage')->with('menus',$menus);
}

    public function getFoodsByMenuId($menuId)
    {
        // burdada hemin id-ye gore datani finds edirem whereMenuId eslinde bu kimi bi seydi where(menu_id,$menuId) qisa seklidi sonra da gelen datani return edirem hemin retrun olunan data
        $foods = Foods::whereMenuId($menuId)->get();
        if (isset($foods))
        {
            return response()->json([
                'foods' => $foods,
                'success' => true
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'data not found'
            ],200);
//                ;
        }
    }


}
