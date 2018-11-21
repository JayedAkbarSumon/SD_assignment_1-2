<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class isLoggedIn
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
        if(!Session::has('userid')){
            return redirect('loginn');
        }
        return $next($request);
    }
}
