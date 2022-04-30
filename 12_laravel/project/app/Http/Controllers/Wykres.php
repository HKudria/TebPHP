<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wykres extends Controller
{
    function wykres(){
        $months = array(11,10,22,1,2,3,15,5,6,7,20,8);

        $datas = array(0,11,0,0,0,0,0,0,6,0,0,0);
        foreach ($months as $key => $month){
            $datas[$key] = $months[$key];
        }

        return view('wykres', compact('datas'));
    }
}
