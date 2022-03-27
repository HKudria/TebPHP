<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api extends Controller
{
    public function index($first = null, $second = null){
        switch ($first){
            case 'RadioOn':
                echo json_encode('RadioOn');
                break;
            case 'RadioOff':
                echo json_encode('RadioOff');
                break;
            case 'RadioAM':
                echo json_encode('RadioAM');
                break;
            case 'RadioFM':
                echo json_encode('RadioFM');
                break;
            case 'SearchChanel':
                echo json_encode(['new_chanel' => '93.00']);
                break;
            case 'chanelName':
                echo json_encode(['new_chanel' => $second]);
                break;
            case 'saveToFavorite':
                echo json_encode(['save_chanel' => $second]);
                break;
            case 'getFavorite':
                echo json_encode(['favorite_chanel' => '93.00']);
                break;
            case 'setFavorite':
                echo json_encode(['setFavorite' => '93.00']);
                break;
        }
    }
}
