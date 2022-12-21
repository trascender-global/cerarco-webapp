<?php

namespace App\Http\Middleware;

use App\Http\Traits\AuthTrait;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdminMiddleware
{

    use AuthTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( $this->isAdmin() ) {
            return $next($request);
        }
        if( $this->isEditor() ) {
            return $next($request);
        }
        if( $this->isUser() ) {
            return redirect('/');
        }


        Auth::logout();
        return redirect()
            ->route('admin.login');
        //return route('admin.login');
    }
}
