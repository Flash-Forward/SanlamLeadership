<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $role = Auth::user()->user_roles_id; 
      
          switch ($role) {
            case '1':
              return '/speaker/100';
              break;
            case '2':
              return '/home';
              break; 
        
            default:
              return '/home'; 
            break;
          }
        }
        return $next($request);
      }
}
