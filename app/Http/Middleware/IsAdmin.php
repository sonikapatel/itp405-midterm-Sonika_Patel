<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsAdmin
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
    if(Auth::check() /*&& Auth::user()->isAdmin()*/){ //check to see if logged in AND admin
        return $next($request);
    }
    else{
      return redirect('/login'); //else if not admin redirect to login page
    }
}
}
