<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use User;
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
    //protected $redirectTo = '/inscripcion';
    protected function authenticated(Request $request) {
        $user= Auth::user();
        if(!$user->roles->first()){
            abort(403, 'Soy un aborto xD');
        } else {
        switch($user->roles->first()->name)
        {
            case 'Alumno':
                return redirect(route('alumnoConsultas'));
                break;
            case 'Docente':
                return redirect(route('docenteHome'));
                break;
            case 'Administrador':
                return redirect(route('adminHome'));
                break;
            default:
                abort(403, 'This action is not authorized');
        }}
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