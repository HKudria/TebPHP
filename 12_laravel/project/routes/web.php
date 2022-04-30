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

Route::prefix('user')->group(function(){
    Route::get('home/{name}/{age?}', function (string $name, int $age=null) {
        echo 'Witaj '. $name;
        if(!is_null($age)){
            echo '<br>Twoj wiek wynosi '. $age;
        }
    })->where(['name' => '[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]+', 'age' => '[0-9]+']); //regex by function

    Route::get('/users', function () {
        echo 'user pages';
    });
});


Route::get('/teb1', function () {
    $arr = [
        'name' => 'Janusz',
        'surname' => 'Nowak',
        'city' => 'Poznań',
        //'city' => 'Wroclaw',
        //'city' => 'Warszawa',
        //'city' => 'Jarocin',
    ];
    $arr['znak'] = mb_strlen($arr['city']);

    return view('teb', $arr);
});


Route::get('loop', function (){
    $car = [
        [
            'brand' => 'Ferrari',
            'model' => 'f430',
            'color' => 'red',
        ],
        [
            'brand' => 'Fiat',
            'model' => '126p',
            'color' => 'white',
        ],
        [
            'brand' => 'Porsche',
            'model' => 'Panamera',
            'color' => 'black',
        ]
    ];

    return view('loop', ['car'=>$car]);
});

Route::get('/car/{brand?}/{model?}/{color?}/{price?}', function(string $brand=null, string $model=null, string $color=null, int $price=null) {
  $car = [
      'brand' => $brand,
      'model' => $model,
      'color' => $color,
      'price' => $price
  ];

    return view('car',$car);
})->where(['brand' => '[A-Za-z]+', 'model' => '[A-Za-z0-9]+', 'color'=> '[A-Za-z]+', 'price' => '[0-9]+'])->name('car');

Route::redirect('/auto/{brand?}/{model?}/{color?}/{price?}','/car/{brand?}/{model?}/{color?}/{price?}');

//Route::fallback(function () {
//    return view('mistake');
//});

Route::get('blade', function (){
   return view('szablon');
});

Route::get('TebC', [App\Http\Controllers\TebSite::class, 'index']);

//zadanie domowe
Route::get('carTest/{brand?}/{model?}/{color?}/{price?}', [App\Http\Controllers\TebSite::class, 'car'])->where(['brand' => '[A-Za-z]+', 'model' => '[A-Za-z0-9]+', 'color'=> '[A-Za-z]+', 'price' => '[0-9]+'])->name('carTest');

Route::redirect('/auto1/{brand?}/{model?}/{color?}/{price?}','/carTest/{brand?}/{model?}/{color?}/{price?}');

Route::get('apis/{first?}/{second?}', [App\Http\Controllers\Api::class, 'index']);


Route::get('data', [App\Http\Controllers\Data::class, 'list']);
Route::get('kursy', [App\Http\Controllers\Data::class, 'kurs']);
Route::get('kalkulatorvalut', [App\Http\Controllers\Data::class, 'kalkulator']);
Route::post('kalkulatorvalut', [App\Http\Controllers\Data::class, 'kalkulator']);

Route::get('json', function (){
    echo 'isJson';
})->middleware('isJson');

//30.04.2022 - New lesson
Route::view('login','login');

Route::post('login',[App\Http\Controllers\Login::class, 'index']);
Route::get('logout',[App\Http\Controllers\Login::class, 'logout']);
Route::get('profile',[App\Http\Controllers\Login::class, 'profile']);

//Route::view('profilelang','profileLang');
Route::get('/profilelang/{lang?}', function($lang='pl'){
    if (! in_array($lang, ['en', 'pl', 'ru'])) {
        abort(404);
    }
    App::setLocale($lang);
    return view('profileLang');
});

Route::get('send',function (){
    $details = [
        'title' => 'CDV - email',
        'body' => 'Wiadomość testowa',
        ];
    \Mail::to('mirek.szyper@gmail.com')->send(new \App\Mail\TestMail($details));
    echo 'Wiadomość wyslana pomyślnie';
});


Route::get('wykres', [App\Http\Controllers\Wykres::class, 'wykres']);
