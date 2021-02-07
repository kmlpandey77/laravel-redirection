<?php

namespace Kmlpandey77\Redirection\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Kmlpandey77\Redirection\Facades\Redirection;

class Redirector
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if($redirect_path = Redirection::check($request->path()))
            return redirect($redirect_path);

        return $next($request);
    }
}
