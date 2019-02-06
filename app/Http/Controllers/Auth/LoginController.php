<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    public function redirectTo(){
        
    // User role
    $user = Auth::user(); 
    //si está habilitado 1, deshabilitado 0
    $egoera = $user -> egoera;
    $rol = $user -> rol;
    switch ($egoera){

        case '0':
            return '/';
        break;

        case '1':

            // Check user role
            switch ($rol) {
                case '0':
                        return '/administratzailea';
                    break;
                case '1':
                        return '/irakaslea';
                    break;
                case '2':
                    return '/ikaslea';
                break; 
                default:
                        return '/login'; 
                    break;
            }
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
