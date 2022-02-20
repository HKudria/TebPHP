<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TebSite extends Controller
{
    public function index(){
        echo "TebController";
    }

    public function car(string $brand=null, string $model=null, string $color=null, int $price=null){
        $car = [
            'brand' => $brand,
            'model' => $model,
            'color' => $color,
            'price' => $price
        ];

        return view('car1',$car);
    }
}
