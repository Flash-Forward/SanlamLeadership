<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectPath() {
        $role = Auth::user()->user_roles_id; 
        switch ($role) {
          case '1':
            return '/lobby';
            break;
          case '2':
            //if(Auth::user()->email != "ffp3@gmail.com" && Auth::user()->email != "ffp2@gmail.com" && Auth::user()->email != "ffp1@gmail.com" && Auth::user()->email != "ffp@gmail.com" && Auth::user()->email != "sanlam@gmail.com")
              //Auth::logout();
            return '/lobby';
            break; 
            case '3':
               Auth::logout();
               return '/lobby';
               break; 
      
          default:
            return '/home'; 
          break;
        }
      }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
