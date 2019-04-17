<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

// This middleware is to check whether participant is selected for finals
class SelectedForFinal
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
        if(Auth::user()->competitions[0]->competition_status == 'final')
            return $next($request);
        return redirect('participant');
    }
}
