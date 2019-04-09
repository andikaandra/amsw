<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class HasVerifyEmail
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
      if (Auth::user()->email_verification == 'verified') {
        return $next($request);
      }
      if ($request->ajax()) {
        return response()->json(['message' => 'unauthorised.'], 401);
      }
      return redirect('participant');
    }
}
