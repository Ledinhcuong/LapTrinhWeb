<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminLoginMiddleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $users = Auth::users();
            if($users->TypeUser == 1)
                return $next($request);
            else
                return redirect('login');
        }
        else
            return redirect('login');
    }
}
