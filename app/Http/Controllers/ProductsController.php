<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function food_baverages(){
    return view('product.baverages');
   }
   public function beauty_health(){
    return view('product.health');
   }
   public function home_care(){
    return view('product.care');
   }
   public function baby_kid(){
    return view('product.kid');
   }
}
