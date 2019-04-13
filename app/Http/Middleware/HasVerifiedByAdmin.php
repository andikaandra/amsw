<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Competition;
use Auth;

class HasVerifiedByAdmin
{
    public function handle($request, Closure $next)
    {
        //todo
        if (Auth::user()) {
            return $next($request);
        }
        if ($request->ajax()) {
            return response()->json(['message' => 'unauthorised.'], 401);
        }
        return redirect('participant');
    }
}
