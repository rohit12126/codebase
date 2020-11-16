<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class AdminAuth
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
        if(!Auth::guard('admin')->check())
        {
            return redirect('admin/login')->withErrors('You need to login!');
        }
        return $next($request);
    }

    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('admin/login');
    //     }
    // }
}
