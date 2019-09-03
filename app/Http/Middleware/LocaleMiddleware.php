<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Request;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public static $mainLanguage = 'en'; //основной язык, который не должен отображаться в URl
//    public static $mainLanguage = 'uk'; //основной язык, который не должен отображаться в URl

    public static $languages = ['en', 'ru', 'uk']; // Указываем, какие языки будем использовать в приложении.

    public static function getLocale()
    {
        $uri = Request::path(); //получаем URI


        $segmentsURI = explode('/',$uri); //делим на части по разделителю "/"


        //Проверяем метку языка  - есть ли она среди доступных языков
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {
            return $segmentsURI[0];
        }else{
            return  self::$mainLanguage;
        }
    }

    /*
    * Устанавливает язык приложения в зависимости от метки языка из URL
    */
    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if($locale) App::setLocale($locale);
        //если метки нет - устанавливаем основной язык $mainLanguage
//        else App::setLocale(self::$mainLanguage);

        return $next($request); //пропускаем дальше - передаем в следующий посредник
    }

}
