<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role {

  public function handle($request, Closure $next, String $role) {

    $user = Auth::user();
    if($user->user_roles_id == $role)
      return $next($request);

    switch ($user->user_roles_id) {
        case '1':
          return redirect('/speaker');
          break;
        case '2':
          return redirect('/home');
          break; 
    
        default:
          return redirect('/home'); 
        break;
      }
  }
}