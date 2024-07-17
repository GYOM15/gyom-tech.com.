<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //Get the selected language from session
        $language = session('language');
        //Set the current language
        app()->setLocale($language);
        
        //Log the updated locale for verification 
        //Log::infor("Locale set to:" . $language. "(Selected language: " .$language. ")");

        return $next($request);
    }
}
