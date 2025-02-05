<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;



class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // dd($request->segment(1));
        if ($request->segment(1) == 'en') {
            App::setLocale('en');
        } else {
            App::setLocale('az');
        }

        return $next($request);


        // if(Session::has('locale')){

        //     App::setLocale(Session::get('locale'));

        //     }
        //     return $next($request);
    }
}
