<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Ikaslea
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
    $rol=Auth::user()->rol;
    // If the user is not logged in, respond with a 403 error.
    if ( ! Auth::check() || $rol!=2) {
        abort(403, 'Unauthorized action.');
    }
    
    // If the user is not subscribed, show a different payments page.
    

    // The user is subscribed; continue with the request.
    return $next($request);
}
}


