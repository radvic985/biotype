<?php

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

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){
    Route::get('/', ['as' => 'test', function () {
        return view('test');
    }]);
});
//Переключение языков
Route::get('setlocale/{lang}', function ($lang) {
    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
//    print_r($referer);echo "<br/>";
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы
//    print_r($parse_url);echo "<br/>";
//    die();
//    $parse_url = substr($parse_url, 17);
//    print_r($parse_url);echo "<br/>";
        //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);
//    print_r($segments);echo "<br/>";
//    print_r($segments[1]);echo "<br/>";
//    die();
    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {
        unset($segments[1]); //удаляем метку
    }
    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    array_splice($segments, 1, 0, $lang);
//    print_r($segments);echo "<br/>";
    //формируем полный URL
    $url = Request::root().implode("/", $segments);
//    print_r($url);echo "<br/>";
//    die();
    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
//    print_r($url);echo "<br/>";
//    die();
    return redirect($url); //Перенаправляем назад на ту же страницу
})->name('setlocale');

Route::get('/', function () {
    return redirect('/'. App\Http\Middleware\LocaleMiddleware::$mainLanguage);
});

Route::post('/get-info','CalculateController@getInfo');