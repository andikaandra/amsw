<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HasFilledRegistration
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
        if(Auth::user()->competitions[0]->participants->first()) {
            return $next($request);
        }
        return redirect('participant');
    }
}
