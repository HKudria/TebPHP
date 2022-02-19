<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/teb', function () {
    $arr = [
        'name' => 'Janusz',
        'surname' => 'Nowak',
        'city' => 'Poznań'
    ];
    return view('teb', $arr);
});

Route::get('/pages/{inbox}', function ($inbox) {
    $arr = [
        'about' => 'Strona Teb',
        'home' => 'Strona domowa',
        'contact' => 'teb@gmail.com'
    ];
    if (key_exists($inbox,$arr)){
        echo $arr[$inbox];
    } else {
        return abort(404);
    }

});

//Route::get('/addres/{city}/{street?}/{zipCode?}', function(string $city, string $street="", string $zipCode=null) {
//    return redirect('/address/'.$city.'/'.$street.'/'.$zipCode);
//});

Route::get('/address/{city}/{street?}/{zipCode?}', function(string $city, string $street="", string $zipCode=null) {
    if(is_null($zipCode)){
        $zipCode='brak';
    }else{
        $zipCode = substr($zipCode,0,2).'-'.substr($zipCode,2,3);
    }

    echo <<<ADRESS
        Miasto: $city <br>
        Ulica: $street <br>
        Kod pocztowy: $zipCode
ADRESS;


})->name('address');

Route::redirect('/addres/{city}/{street?}/{zipCode?}','/address/{city}/{street?}/{zipCode?}');

Route::prefix('admin')->group(function(){
    Route::get('/home', function () {
       echo 'admin pages';
    });

    Route::get('/user', function () {
        echo 'user pages';
    });
});
