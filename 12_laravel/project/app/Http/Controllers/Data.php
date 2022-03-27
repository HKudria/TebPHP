<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    public function list(){
//        return HTTP::get('https://jsonplaceholder.typicode.com/posts');
      //  return HTTP::get('https://jsonplaceholder.typicode.com/posts')->json();
        $data = json_decode(HTTP::get('https://jsonplaceholder.typicode.com/posts'));
        $arr['jsonData'] = $data;
        $arr['link'] = 'https://jsonplaceholder.typicode.com/posts';
        return view('data',$arr);
    }

    public function kurs(){
        $data = HTTP::get('api.nbp.pl/api/exchangerates/tables/C/')->json();
        return view('kusr',['kurs' => $data]);
    }

    public function kalkulator(Request $request){
        $data = HTTP::get('api.nbp.pl/api/exchangerates/tables/C/')->json();
        $result = null;
        $kurs = null;


        if($request->first){
            foreach($data[0]['rates'] as $valuta){
                if($valuta['code'] == $request->second){
                   $kurs = $valuta['ask'];
                }
            }
            $result = $request->first * $kurs;
        }
        return view('kalkulatorvalut',['kurs' => $data, 'result' => (int) $result, 'code' => $request->second, 'kwota' => $request->first]);
    }


}
