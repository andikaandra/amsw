<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HasVerifiedByAdmin
{
    public function handle($request, Closure $next)
    {
        //todo
        if (Auth::user()->competitions[0]->verification_status == 'verified') {
            return $next($request);
        }
        if ($request->ajax()) {
            return response()->json(['message' => 'unauthorised.'], 401);
        }
        return redirect('participant');
    }
}
