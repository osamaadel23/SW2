<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use session;

class auth_middleware
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
        
        if(session()->get('key') == 1)
        {
            return $next($request);
        }
        else
        {
            return redirect('/login');
        }
      
    }
}
